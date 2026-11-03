<?php
session_start();
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../includes/functions.php';

if (isLoggedIn()) redirect('/ToCode/user/dashboard.php');

$errors = [];
$old = ['name' => '', 'email' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pass  = $_POST['password'] ?? '';
    $pass2 = $_POST['password_confirm'] ?? '';

    $old['name'] = $name;
    $old['email'] = $email;

    if (mb_strlen($name) < 3) $errors[] = 'نام باید حداقل ۳ حرف باشد.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'ایمیل معتبر نیست.';
    if (strlen($pass) < 6) $errors[] = 'رمز حداقل ۶ کاراکتر باشد.';
    if ($pass !== $pass2) $errors[] = 'رمزها یکسان نیستند.';

    if (empty($errors)) {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) $errors[] = 'این ایمیل قبلاً ثبت شده است.';
    }

    if (empty($errors)) {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $hash]);

        $_SESSION['user_id']   = $pdo->lastInsertId();
        $_SESSION['user_name'] = $name;
        $_SESSION['user_role'] = 'user';

        redirect('/ToCode/user/dashboard.php');
    }
}

$pageTitle = 'ثبت‌نام';
include __DIR__ . '/../includes/header.php';
?>

<h1>ثبت‌نام</h1>

<?php foreach ($errors as $err): ?>
    <p class="error"><?= e($err) ?></p>
<?php endforeach; ?>

<form method="POST">
    <label>نام:</label>
    <input type="text" name="name" value="<?= e($old['name']) ?>" required>

    <label>ایمیل:</label>
    <input type="email" name="email" value="<?= e($old['email']) ?>" required>

    <label>رمز عبور:</label>
    <input type="password" name="password" required>

    <label>تکرار رمز:</label>
    <input type="password" name="password_confirm" required>

    <button type="submit">ثبت‌نام</button>
</form>

<p>حساب داری؟ <a href="/ToCode/auth/login.php">ورود</a></p>

<?php include __DIR__ . '/../includes/footer.php'; ?>