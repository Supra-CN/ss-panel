<?php
include_once 'lib/config.php';
include_once 'header.php';
?>
<body>
<div class="container">
    <?php include_once 'nav.php';?>

    <div class="jumbotron">
        <h2><?php echo $site_name; ?></h2>
        <p class="lead">本站仅供方便个人技术学习免费使用，美国节点20GB/月起。</P>
        <p class="lead">请文明上网，自觉遵守当地法律限制，禁止用于商业目的。</p>
        <p class="lead">交流学习q群：485561913。</p>
        <p class="lead">联系站长请在<a href="http://blog.supra.tw">Supra's Garage</a>留言;</p>
        <p class="lead">或mailto:<a href="mailto:supra.cn@gmail.com">Supra.CN@Gmail.com</a>。</p>
        <p><a class="btn btn-lg btn-success" href="user/register.php" role="button">立即注册</a>
	<a class="btn btn-lg btn-success" href="http://donate.supra.tw" role="button">捐助Supra</a></p>
    </div>


    <div class="row marketing">
        <div class="col-lg-6">
            <a href="https://play.google.com/store/apps/details?id=com.github.shadowsocks"><h4>Android</h4></a>
            <p>Android客户端 | <a href="http://file.supra.tw/ssc-android-2.7.7.apk">本地镜像</a></p>
            <h4><a href="http://sourceforge.net/projects/shadowsocksgui/files/dist/">Shadowsocks C#</a></h4>
            <p>Windows用户推荐此客户端 | <a href="http://file.supra.tw/ssc-win-2.5.2.zip">本地镜像</a></p>
            <h4><a href="https://github.com/shadowsocks/shadowsocks-gui">GUI客户端</a></h4>
            <p>linux osx win</p>

        </div>

        <div class="col-lg-6">
            <a href="https://itunes.apple.com/us/app/shadowsocks/id665729974?mt=8"><h4>iOS</h4></a>
            <p>iOS客户端</p>

            <h4><a href="https://github.com/ohdarling/GoAgentX/releases">GoAgentX</a></h4>
            <p> OS X用户推荐此客户端。</p>
        </div>
    </div><?php
            include_once 'footer.php';
            include_once 'ana.php';?>
</div> <!-- /container -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="asset/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
