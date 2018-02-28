<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>国学经典注册</title>
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
            images:  ['/bookreading/Public/home/img/bg1.jpg', '/bookreading/Public/home/img/bg2.jpg', '/bookreading/Public/home/img/bg3.jpg'],
            imageWidth: 1024,
            imageHeight: 500,
            transitionEffect: 'fade',
            nextSlideDelay: '8000'
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
                <div class="loginPop-logo"><img src="/bookreading/Public/home/img/banner1.jpg." width="88px" height="88px"></div>
                <h1>手机号注册</h1>
                <div class="lop-content">
                    <div class="clearfloat"></div>
                    <div class="JS-defaultMode">
                        <form method="post" action="res-teacher-select.html">
                            <input type="hidden" name="id" value="">
                            <div class="c-text">
                                <span class="login-icon icon-5"></span>
                                <input type="text" placeholder="请输入您的手机号" class="txt1 JS-teacherRealame JS-inputEvent" name="realname">
                                <div class="errorTips"></div>
                            </div>
                            <div class="c-text">
                                <span class="login-icon icon-3"></span>
                                <input type="text" placeholder="请输入短信验证码" class="txt2 JS-teacherSmsCode JS-inputEvent" name="telcode">
                                <span class="code codeBg login-blue JS-getCheckCode" >获取验证码</span>
                                <div class="errorTips"></div>
                            </div>
                            <div class="c-text">
                                <span class="login-icon icon-2"></span>
                                <input type="text" placeholder="请输入右侧数字" class="txt2 JS-teacherCaptcha JS-inputEvent" id="captchaInputLogin" name="yzcode">
                                <span id="captchaImageLogin" class="code" >1234</span>
                                <div class="errorTips"></div>
                            </div>
                            <a href="res-teacher-select.html" class="login-btn login-blue JS-teacherVerMobile">完成注册</a>
                        </form>
                    </div>
                    <div class="lop-tab tabLeft">
                        <ul>
                            <li class="JS-selectStudent-main" onclick="location.href='user_name.html'">
                                <div class="image"></div>
                                <div class="side">用户名注册</div>
                            </li>
                            <li class="JS-selectTeacher-main tea active" onclick="location.href='user_tel.html'">
                                <div class="image image-tea"></div>
                                <div class="side">手机号注册</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>