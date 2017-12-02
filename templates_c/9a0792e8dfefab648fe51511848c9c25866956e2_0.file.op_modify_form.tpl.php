<?php
/* Smarty version 3.1.30, created on 2017-11-25 08:11:02
  from "D:\10602\kukey\UniServerZ\www\REPORTER\templates\op_modify_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a19259625daa6_37702020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a0792e8dfefab648fe51511848c9c25866956e2' => 
    array (
      0 => 'D:\\10602\\kukey\\UniServerZ\\www\\REPORTER\\templates\\op_modify_form.tpl',
      1 => 1511597229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a19259625daa6_37702020 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="js/languages/jquery.validationEngine-zh_TW.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css">


<?php echo '<script'; ?>
 src="class/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<div class="container">
    <form action="admin.php" method="post" enctype="multipart/form-data" class="py-4" id="myform">
        <div class="form-group">
            <label for="title" class="col-form-label sr-only">文章標題</label>
            <input type="text" class="form-control validate[required]" name="title" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" id="title" placeholder="請輸入文章標題">
        </div>

        <div class="form-group">
            <label for="content" class="col-form-label sr-only">文章內容</label>
            <textarea name="content" id="content" class="form-control validate[required, minSize[10]]" rows="10" placeholder="請輸入文章內容"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</textarea>
        </div>

        <div class="form-group">
            <label for="pic" class="col-form-label sr-only">上傳</label>
            <input type="file" class="form-control" name="pic" id="pic" placeholder="請輸入文章標題">
        </div>

        <div class="text-center">
            <input type="hidden" name="sn" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
">
            <input type="hidden" name="op" value="update">
            <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>
">
            <button type="submit" class="btn btn-primary">修改</button>
        </div>
    </form>
</div>

<?php echo '<script'; ?>
>
    CKEDITOR.replace('content');

    $(document).ready(function () {
        $('#myform').validationEngine();
    });
<?php echo '</script'; ?>
><?php }
}
