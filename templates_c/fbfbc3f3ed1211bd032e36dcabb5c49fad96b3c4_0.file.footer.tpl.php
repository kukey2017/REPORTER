<?php
/* Smarty version 3.1.30, created on 2017-11-25 08:03:02
  from "D:\10602\kukey\UniServerZ\www\REPORTER\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1923b647dab0_47955737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbfbc3f3ed1211bd032e36dcabb5c49fad96b3c4' => 
    array (
      0 => 'D:\\10602\\kukey\\UniServerZ\\www\\REPORTER\\templates\\footer.tpl',
      1 => 1511596969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1923b647dab0_47955737 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="footer"></div>
    <footer class="bg-dark text-white py-2 fixed-bottom text-center">
        <div class="container">
            <div class="my-3 d-none d-sm-block">
                小趙繼續解釋，「有時候我講話他沒有回應，我就擔心他是不是在氣我；聽不清楚他說什麼的時候，我不太敢再追問；每次有事情需要請假，我都很害怕他在簽我的假單時會不會覺得我怠惰職務……」 「但是你問問題是為了釐清狀況，請假也都是照著公司規定來，不是嗎？這樣有什麼好怕的？」這下子換我困惑了。
            </div>

            <div class="my-2 d-block d-sm-none">
                 我就擔心他是不是在氣我
            </div>
        </div>
    </footer>

<?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        // 隨機變換圖片
        // var images = ['pic1.jpg', 'pic2.jpg'];
        // var images = <?php echo $_smarty_tpl->tpl_vars['pic_data']->value;?>
;

        // $('.img-container').css({ 'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')' });
        // 隨機變換顏色
        // var colors = ['red','green'];
        // $('.img-container').css({ 'background-color': colors[Math.floor(Math.random() * colors.length)]});
        // 隨機變換文字
        // var txt = ['大家好','歡迎光臨'];
        // $('title').text(txt[Math.floor(Math.random() * txt.length)]);
        // 指定路徑自動抓取圖片


        $('.img-container').css('width', $(window).width());
        $('.img-container').css('height', $(window).height());
        // $('.img-container').css('background-image', "url('images/pic2.jpg')");
    });

    $(window).resize(function () {
        $('.img-container').css('width', $(window).width());
        $('.img-container').css('height', $(window).height());
    });
<?php echo '</script'; ?>
>
<!-- 假文產生器 -->
<?php echo '<script'; ?>
 src="http://more.handlino.com/javascripts/moretext-1.2.js" type="text/javascript"><?php echo '</script'; ?>
><?php }
}
