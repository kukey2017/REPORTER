<?php
require_once 'loginheader.php';
require_once 'header.php';
$page_title = "管理頁面";
// 過濾網頁標籤語法在用的 htmlspecialchars(文字,ENT_QUOTES)更好
// filter_var 功能更高更細
// real_escape_string給資料客寫入時候用的

$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int) $_REQUEST['sn'] : 0;

switch ($op) {
    case "insert":
        $sn = insert_article();
        header("location: index.php?sn={$sn}");
        exit;
    case "delete":
        delete_article($sn);
        header("location: index.php");
        exit;

    case "article_form":
        // article_form();
        break;

    case "modify_form":
        show_article($sn);
        break;
    case "update":
        update_article($sn);
        header("location: index.php");
        exit;

    default:
        $op = "";
        break;
}

require_once 'footer.php';

function insert_article()
{
    global $db;
    $title    = $db->real_escape_string($_POST['title']);
    $content  = $db->real_escape_string($_POST['content']);
    $username = $db->real_escape_string($_POST['username']);
    $sql      = "INSERT INTO `article` (`title`, `content`, `username`, `create_time`, `update_time`) VALUES('{$title}', '{$content}', '{$username}', now(), now())";
    $db->query($sql) or die($db->error . $sql);
    $sn = $db->insert_id;
    upload_pic($sn);
    return $sn;
}

function delete_article($sn)
{
    global $db;
    $sql = "DELETE FROM `article` WHERE `sn`='{$sn}' and `username`='{$_SESSION['username']}'";
    $db->query($sql) or die($db->error . $sql);

    if (file_exists("uploads/cover_{$sn}.png")) {
        unlink("uploads/cover_{$sn}.png");
        unlink("uploads/thumb_{$sn}.png");
    }
}

function update_article($sn)
{
    global $db;
    $title    = $db->real_escape_string($_POST['title']);
    $content  = $db->real_escape_string($_POST['content']);
    $username = $db->real_escape_string($_POST['username']);
    $sql      = "UPDATE `article` SET `title`='{$title}', `content` = '{$content}', `update_time`= now() WHERE `sn` = '{$sn}' and `username`='{$_SESSION['username']}'";
    $db->query($sql) or die($db->error . $sql);
    upload_pic($sn);
    return $sn;
}

function upload_pic($sn)
{
    if (isset($_FILES)) {
        require_once 'class/upload/class.upload.php';
        $foo = new Upload($_FILES['pic']);
        if ($foo->uploaded) {
            // save uploaded image with a new name
            $foo->file_new_name_body = 'cover_' . $sn;
            $foo->image_resize       = true;
            $foo->image_convert      = png;
            $foo->image_x            = 1200;
            $foo->image_ratio_y      = true;
            $foo->Process('uploads/');
            if ($foo->processed) {
                $foo->file_new_name_body = 'thumb_' . $sn;
                $foo->image_resize       = true;
                $foo->image_convert      = png;
                $foo->image_x            = 400;
                $foo->image_ratio_y      = true;
                $foo->Process('uploads/');
            }
        }
    }
}
