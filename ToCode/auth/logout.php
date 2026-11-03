<?php
session_start();
$_SESSION = [];
session_destroy();
header('Location: /ToCode/home.php');
exit;