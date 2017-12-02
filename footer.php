<?php
randompic();
$smarty->assign('Title', $page_title);
$smarty->assign('op', $op);
$smarty->display(PAGE_TPL);
