<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include __DIR__ . '/functions.php';

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



    <link rel="stylesheet" href="/ToCode/styles/styles.css">


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
        <a href="/ToCode/about.php" target="_blank">درباره ما</a>
        <a href="/ToCode/home.php" target="_blank">خانه</a>
        <a href="/ToCode/auth/login.php" target="_blank">ورود</a>
    </nav>

</header>

<main>