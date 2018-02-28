<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>国学经典-登录</title>
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
    <div id="modal-overlay">
        <div class="loginPop-box loginBg">
            <p>
                <a href="index.html" class="index-close"></a>
            </p>
            <div class="lop-inner">
                <div class="loginPop-logo"><img src="/bookreading/Public/home/img/bg1.jpg" width="88px" height="88px"></div>
                <h1>登录</h1>
                <form id="FormSubmitInit" class="JS-formSubmit" method="post" action="">
                    <!-- <input type="hidden" name="returnURL" value=""> -->
                    <div class="lop-content">
                        <div class="c-text">
                            <span class="login-icon icon-5"></span>
                            <input type="text" value="" name="username" tabindex="1" class="JS-inputEvent" id="index_login_username" placeholder="用户名/手机号">
                            <div class="errorTips" style="display: none">请输入用户名/手机号</div>
                        </div>
                        <div class="c-text">
                            <span class="login-icon icon-4"></span>
                            <input type="password" id="index_login_password" name="password" class="JS-inputEvent" tabindex="2" placeholder="输入密码">
                            <div class="errorTips" style="display: none">请输入密码</div>
                        </div>
                        <div class="c-text">
                            <a href="javascript:void(0);" class="info active JS-rememberMe-btn">
                                <!-- <input name="_spring_security_remember_me" type="checkbox" checked="checked" style="display: none;"> -->
                                <span class="login-icon icon-6"></span>记住我
                            </a>
                            <a href="javascript:void(0)" target="_blank" class="info">忘记密码 ?</a><span class="line"> | </span><a href="user_name.html" class="info JS-register-main">注册</a>
                        </div>
                    </div>
                    <div class="loginPop-footer">
                        <input type="button" value="登录" class="login-btn" id="_a_loginForm" name="loginForm" tabindex="3">
                    </div>
                </form>
            </div>
            <script type="text/javascript">
            $(document).ready(function() {
                var clicked = false;
                $(".icon-6").on('click', learnOneself);

                function checkPhone() {}
                // 记住我图片变化
                function learnOneself() {
                    console.log("a");
                    if (clicked == false) {
                        $(this).attr('class', 'login-icon icon-7');
                        clicked = true;
                    } else {
                        $(this).attr('class', 'login-icon icon-6');
                        clicked = false;
                    }
                }

            });
            </script>
        </div>
    </div>
</body>

</html>