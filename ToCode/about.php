<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/config/db.php';
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="یادگیری برنامه نویسی با ToCode">
    <meta name="keywords" content="
برنامه نویسی, کد نویسی , یادگیری برنامه نویسی, هوش مصنوعی, کانال برنامه نویسی
">
    <title>درباره ToCode | یادگیری برنامه نویسی</title>
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

            <p>درباره ما</p>

        </div>
       

    </div>
    <nav>
        <a href="home.php" target="_blank">خانه</a>
        
    </nav>

</header>
<!--about-->
<section class="about">
    <h2> ما که هستیم؟</h2>
    <p>
         ToCode مجموعه ای از کانال ها و گروه ها در شبکه های اجتماعیست برای آموزش پایه های برنامه نویسی با تمرکز بر آموزش نوشتن کد های تمیز تر و خوانا تر.

    </p>
</section>

<section class="about">
    <h2>چرا ما را انتخاب کنید</h2>
    <p>
            .مجموعه ما برنامه نویسی و مهارت های هوش مصنوعی را بدون محتوای سنگین و غیرقابل درک در اختیار شما قرار می دهد. همچنین شما می توانید انتقاداتان را به صورت عمومی به اشتراک بگذارید. همینطور می توانید سوالات خود را در گروه پرسش و پاسخ ما اشتراک گذاری کنید

    </p>
</section>


<!--links-->
<div class="card">
    <h3>روبیکا </h3>
    <a href="https://rubika.ir/ToCodeEverything" target="_blank" class="join-btn">ورود به کانال روبیکا
    </a>
</div>

<div class="card">
    <h3>بله</h3>
    <a href="https://ble.ir/ToCodeEverything" target="_blank" class="join-btn">ورود به کانال بله

    </a>
</div>
 
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