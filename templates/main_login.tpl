<!doctype html>
<html lang="zh-Hant-TW">

<head>
    {include file="header.tpl"}
</head>

<body>
    <div class="img-container">
        <div class="container py-2">
            {include file="nav.tpl"}

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

    {include file="footer.tpl"}
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>

</body>

</html>