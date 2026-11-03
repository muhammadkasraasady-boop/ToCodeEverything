<?php
session_start();
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../includes/functions.php';

requireLogin();

$stmt = $pdo->prepare("SELECT name, email, bio, created_at, id FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();

$pageTitle = 'پنل کاربری';
include __DIR__ . '/../includes/header.php';
?>
<style>
#greet {
    text-align: center;
    color: var(--primary);
}

.user-details{
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    
}
</style>
<h1 id="greet">سلام <?= e($user['name']) ?> 👋</h1>
<div class="container">
    <div class="user-details">
        <p>ایمیل: <?= e($user['email']) ?></p>
        <p>تاریخ عضویت: <?= e($user['created_at']) ?></p>
        <div>
            <p>آیدی: <?= e($user['id']) ?></p>
            <p style="color:#00ff66; font-size:80%;">آیدی شما منحصر به فرد است و در صورت فراموشی رمز عبور<br> می توانبد از آیدی خود برای بازیابی استفاده کنید. </p>
        </div>
        <?php if ($user['bio']): ?>
            <p>درباره من: <?= nl2br(e($user['bio'])) ?></p>
        <?php endif; ?>

        <div>
            <a href="profile.php">ویرایش پروفایل</a>
            <a href="change-password.php">تغییر رمز</a>
            <a href="/ToCode/auth/logout.php">خروج</a>
        </div>
    </div>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>