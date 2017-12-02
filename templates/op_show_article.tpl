<div class="container">
    <h1>{$article.title}</h1>
    <h1>{$article.content}</h1>
    {if isset($smarty.session.username) and $smarty.session.username==$article.username}
    <div class="alert alert-info text-center">
        <a href="admin.php?op=delete&sn={$article.sn}" class="btn btn-danger">刪除</a>
        <a href="admin.php?op=modify_form&sn={$article.sn}" class="btn btn-warning">修改</a>
    </div>
    {/if}
</div>
