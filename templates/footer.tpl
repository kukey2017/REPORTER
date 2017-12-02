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

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        // 隨機變換圖片
        // var images = ['pic1.jpg', 'pic2.jpg'];
        // var images = {$pic_data};

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
</script>
<!-- 假文產生器 -->
<script src="http://more.handlino.com/javascripts/moretext-1.2.js" type="text/javascript"></script>