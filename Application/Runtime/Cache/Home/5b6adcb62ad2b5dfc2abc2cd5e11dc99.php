<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <title>国学经典</title>
    <link rel="stylesheet" type="text/css" href="/bookreading/Public/home/css/common.css">
    <link rel="stylesheet" type="text/css" href="/bookreading/Public/home/css/modal.css">
    <link rel="stylesheet" type="text/css" href="/bookreading/Public/home/css/bgstretcher.css">
    <script type="text/javascript" src="/bookreading/Public/home/js/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="/bookreading/Public/home/js/my.js"></script>
    <script type="text/javascript" src="/bookreading/Public/home/js/html5shiv.min.js"></script>
    <script type="text/javascript" src="/bookreading/Public/home/js/respond.min.js"></script>
    <script type="text/javascript" src="/bookreading/Public/home/js/bgstretcher.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#body').bgStretcher({
            images: ['/bookreading/Public/home/img/bg1.jpg', '/bookreading/Public/home/img/bg2.jpg', '/bookreading/Public/home/img/bg3.jpg'],
            imageWidth: 1024,
            imageHeight: 500,
            transitionEffect: 'fade',
            nextSlideDelay:'8000'
        });
    });
    </script>
</head>

<body>
    <div class="global-nav-inner">
        <div class="global-nav-container clearfloat">
            <ul class="nav js-global-actions" role="navigation" id="global-actions">
                <li id="global-nav-home" class="home">
                    <a class="js-nav js-tooltip js-dynamic-tooltip" href="index.html">
                        <span><img src="/bookreading/Public/home/img/logo.png"></span>
                    </a>
                </li>
                <li id="global-nav-about" class="about">
                    <a class="js-tooltip js-dynamic-tooltip" href="javascript:void(0)" target="_blank">
                        <span class="text">品国学经典，扬中华文明！</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="body"></div>
    <div class="webInfo">
        <h1 class="webInfo-title">欢迎进入国学经典<p class="webInfo-title-en">Welcome to  Classical Sinology</p></h1>
        <p class="webInfo-info">为爱读书人打造的在线阅读平台</p>
        <p class="webInfo-info">串联作家、读者双方的交流关系</p>
    </div>
    <div class="login-register">
        <p class="banner1-title">国学经典</p>
        <p class="login"><a href="<?php echo U('Home/Login/login');?>">登录</a></p>
        <p class="register"><a href="<?php echo U('Home/Index/introduce');?>">注册</a></p>
    </div>
    <div class="body-footer">
        <ul class="clearfloat">
            <li class="footerli"><a href="<?php echo U('Home/Index/introduce');?>/id/readbook">关于读书</a></li>
            <li class="footerli"><a href="<?php echo U('Home/Index/introduce');?>/id/statement">免责声明</a></li>
            <li class="footerli"><a href="<?php echo U('Home/Index/introduce');?>/id/law">相关法律</a></li>
            <li class="footerli"><a href="<?php echo U('Home/Index/introduce');?>/id/contact">联系我们</a></li>
        </ul>
        <p>Copyright © 古典文学 www.gudian.com 2006-2016, All Rights Reserved. 鄂ICP备15019699号-2.</p>
    </div>
</body>

</html>