<?php
function link_db()
{
    $db = new mysqli('localhost', 'root', '12345', 'reporter');
    if ($db->connect_error) {
        die('無法連上資料庫：' . $db->connect_error);
    }
    $db->set_charset("utf8");
    return $db;
}

function randompic()
{
    global $smarty;
    $dir      = "images/";
    $pic_data = [];
    // Open a known directory, and proceed to read its contents
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                // echo "filename: $file : filetype: " . filetype($dir . $file) . "\n";
                // die($file);
                // $pic_data[] = $file;

                if ($file != "." && $file != "..") {
                    $pic_data[] = $file;
                }
            }
            closedir($dh);
        }
    }
    // die(var_dump($pic_data));
    // implode(',', $pic_data);
    $smarty->assign('pic_data', json_encode($pic_data));
}

// 取得單一文章
function show_article($sn)
{
    global $db, $smarty;

    require_once 'HTMLPurifier/HTMLPurifier.auto.php';
    $config   = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);

    $op     = "show_article";
    $sql    = "select * from `article` where `sn`='$sn'";
    $result = $db->query($sql) or die($db->error);
    $data   = $result->fetch_assoc();
    // content過濾
    $data['content'] = $purifier->purify($data['content']);
    // die(var_export($all));
    $smarty->assign('article', $data);
    return $data;
}
