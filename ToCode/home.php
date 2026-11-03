<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/config/db.php';
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">


<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="یادگیری برنامه نویسی با ToCode">
<meta name="keywords" content="
برنامه نویسی, کد نویسی , یادگیری برنامه نویسی, هوش مصنوعی, کانال برنامه نویسی
">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>ToCode | برنامه‌نویسی فراتر از کدنویسی</title>



    <link rel="stylesheet" href="styles/styles.css">


</head>

<body>

<div class="background"></div>

<header>

    <div class="logo">

        <div class="logo-icon">
            {T}
        </div>

        <div class="logo-text">

            <h1>ToCode</h1>

            <p>
                برنامه‌نویسی فراتر از کدنویسی
            </p>

        </div>
       

    </div>
    <nav>
        <a href="about.php" target="_blank">درباره ما</a>
        <a href="/ToCode/auth/login.php" target="_blank">ورود</a>
    </nav>

</header>

<main>

<section class="hero">

<h2>
به دنیای برنامه‌نویسی خوش آمدید
</h2>

<p>

در ToCode فقط کدنویسی یاد نمی‌گیرید؛
اینجا یاد می‌گیرید چگونه مثل یک توسعه‌دهنده فکر کنید.

</p>

<a
class="join-btn"
href="https://rubika.ir/ToCodeEverything"
target="_blank">

ورود به کانال روبیکا

</a>

</section>

<section class="features">

<div class="card">

<div class="icon">💡</div>

<h3>
نکات سریع برنامه‌نویسی
</h3>

<p>
آموزش‌های کوتاه و کاربردی برای توسعه‌دهندگان.
</p>

</div>

<div class="card">

<div class="icon">🧠</div>

<h3>
برنامه‌نویسی فراتر از کدنویسی
</h3>

<p>
تفاوت یک کدنویس با یک برنامه‌نویس را یاد بگیرید.
</p>

</div>
<div class="card">

<div class="icon">🤖</div>

<h3>
هوش مصنوعی و مهندسی پرامپت
</h3>

<p>
استفاده حرفه‌ای از ابزارهای هوش مصنوعی در برنامه‌نویسی.
</p>

</div>

<div class="card">

<div class="icon">🛠️</div>

<h3>
معرفی ابزارهای مفید
</h3>

<p>
آشنایی با ابزارها، وب‌سایت‌ها و سرویس‌های کاربردی برای برنامه‌نویسان.
</p>

</div>

</section>

<section class="quote">

<blockquote>

«برنامه‌نویسی فقط نوشتن کد نیست؛
هنر حل مسئله است.»

</blockquote>

</section>

</main>

<footer>

<h3>ToCode</h3>

<p>
کانال رسمی آموزش برنامه‌نویسی
</p>

<a
class="footer-link"
href="https://rubika.ir/ToCodeEverything"
target="_blank">

@ToCodeEverything

</a>

<p class="copyright">

© تمامی حقوق برای ToCode محفوظ است.
<?= date('Y') ?>
</p>

</footer>

    <script src="scripts/scripts.js"></script>

</body>
</html>