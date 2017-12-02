<?php
/* Smarty version 3.1.30, created on 2017-11-27 05:48:20
  from "D:\10602\kukey\UniServerZ\www\REPORTER\templates\main_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1ba7249db4f7_25217639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a230c72aa6f82c4f3d108e8ec491ec7e77c4a8f' => 
    array (
      0 => 'D:\\10602\\kukey\\UniServerZ\\www\\REPORTER\\templates\\main_login.tpl',
      1 => 1510370337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a1ba7249db4f7_25217639 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>
    <div class="img-container">
        <div class="container py-2">
            <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <form class="form-signin" name="form1" method="post" action="checklogin.php">
                <h2 class="form-signin-heading">Please sign in</h2>
                <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
                <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
                <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
                <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

                <div id="message"></div>
            </form>

        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- The AJAX login script -->
    <?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
