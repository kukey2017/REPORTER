<?php
require_once 'header.php';
$page_title = "首頁";

// die(var_dump($_SESSION));

$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int) ($_REQUEST['sn']) : 0;

switch ($op) {

    default:
        if ($sn) {
            $data       = show_article($sn);
            $op         = 'show_article';
            $page_title = $data['title'];
        } else {
            list_article();
            $op = 'list_article';
        }
        break;
}

require_once 'footer.php';

function list_article()
{
    global $db, $smarty;
    $sql    = "select * from `article` order by `update_time` DESC LIMIT 0,9";
    $result = $db->query($sql) or die($db->error);
    $all    = [];
    $i      = 0;
    while ($data = $result->fetch_assoc()) {
        $all[$i] = $data;
        // 取得字數
        $num = mb_strlen($data['content']);
        if ($num > 90) {
            $all[$i]['summary'] = mb_substr(strip_tags($data['content']), 0, 90);
            // $all[$i]['url']     = "<a href='index.php?sn={$data[sn]}'>more</a>";
        } else {
            $all[$i]['summary'] = $data['content'];
            // $all[$i]['url']     = "";
        }
        $i++;
    }
    // die(var_export($all));
    $smarty->assign('all_data', $all);
}
