<?php
require_once 'header.php';
$page_title = '登入';
$op         = 'login';
if (isset($_SESSION['username'])) {
    header("location:index.php");
}
require_once 'footer.php';
