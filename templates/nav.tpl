<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-primary py-0">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">
        <img alt="Brand" src="images/logo.png" class="img-fluid">
    </a>

    <div class="collapse navbar-collapse" id="menu">
        <div class="navbar-nav mr-auto">
            <a href="index.php" class="nav-link text-white">首頁</a>
            <a href="index.php" class="nav-link text-white">編輯精選</a>
            <a href="index.php" class="nav-link text-white">街巷故事</a>
            <a href="index.php" class="nav-link text-white">市井觀點</a>
            <a href="index.php" class="nav-link text-white">私房知識塾</a> 
        </div>
        <div class="navbar-nav">
            {if isset($smarty.session.username)}
                <a href="admin.php?op=article_form" class="nav-link text-white">發布</a>
                <a href="logout.php" class="nav-link text-white">登出</a> 
            {else}
                <a href="signup.php" class="nav-link text-white">註冊</a>
                <a href="main_login.php" class="nav-link text-white">登入</a> 
            {/if}
        </div>
    </div>
</nav>


<!-- <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="index.php">首頁</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="gallery.php">圖集</a>
    </li>
    
    {if isset($smarty.session.username)}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">後台管理</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="admin.php">文章管理</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="admin.php?op=article_form">發佈文章</a>
                <a class="dropdown-item" href="#">Something else here</a>

                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">登出</a>
        </li>
    {else}
        <li class="nav-item">
            <a class="nav-link" href="signup.php">註冊</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="main_login.php">登入</a>
        </li>
    {/if}

</ul> -->