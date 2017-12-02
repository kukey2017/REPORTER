<?php
/* Smarty version 3.1.30, created on 2017-11-25 07:15:19
  from "D:\10602\kukey\UniServerZ\www\REPORTER\templates\op_show_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a19188759dbe3_23718932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ae665f6c6ff9b9d4e2ea7086e159426c12bdf33' => 
    array (
      0 => 'D:\\10602\\kukey\\UniServerZ\\www\\REPORTER\\templates\\op_show_article.tpl',
      1 => 1511589623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a19188759dbe3_23718932 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
    <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</h1>
    <?php if (isset($_SESSION['username']) && $_SESSION['username'] == $_smarty_tpl->tpl_vars['article']->value['username']) {?>
    <div class="alert alert-info text-center">
        <a href="admin.php?op=delete&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-danger">刪除</a>
        <a href="admin.php?op=modify_form&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-warning">修改</a>
    </div>
    <?php }?>
</div>
<?php }
}
