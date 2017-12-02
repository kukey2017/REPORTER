<?php
require_once 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;
$title  = '尚無文章標題';
$smarty->assign('title', $title);
$smarty->display('index.tpl');
