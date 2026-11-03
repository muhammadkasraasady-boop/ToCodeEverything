<?php
session_start();
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../includes/functions.php';

if (isLoggedIn()) redirect('/ToCode/user/dashboard.php');

$error = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $pass  = $_POST['password'] ?? '';

    if ($email && $pass) {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($pass, $user['password'])) {
            session_regenerate_id(true);
            $_SESSION['user_id']   = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_role'] = $user['role'];
            redirect('/ToCode/user/dashboard.php');
        } else {
            $error = 'ایمیل یا رمز عبور اشتباه است.';
        }
    } else {
        $error = 'همه فیلدها را پر کن.';
    }
}

$pageTitle = 'ورود';
include __DIR__ . '/../includes/header.php';
?>

<h1>ورود</h1>

<?php if ($error): ?>
    <p class="error"><?= e($error) ?></p>
<?php endif; ?>

<form method="POST">
    <label>ایمیل:</label>
    <input type="email" name="email" value="<?= e($email) ?>" required>

    <label>رمز عبور:</label>
    <input type="password" name="password" required>

    <button type="submit">ورود</button>
</form>

<p>حساب نداری؟ <a href="register.php">ثبت‌نام</a></p>

<?php include __DIR__ . '/../includes/footer.php'; ?>