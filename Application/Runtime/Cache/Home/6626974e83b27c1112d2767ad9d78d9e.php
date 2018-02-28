<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>国学经典-注册</title>
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
    <div id="modal-overlay" style="visibility: visible;">
        <div class="loginPop-box loginBg">
            <p>
                <a href="index.html" class="index-close"></a>
            </p>
            <div class="lop-inner">
                <div class="loginPop-logo"><img src="/bookreading/Public/home/img/banner1.jpg" width="88px" height="88px"></div>
                <h1>用户名注册</h1>
                <div class="lop-content contentMar">
                    <div class="lop-right lop-right-res-stu">
                        <form method="post" >
                            <div class="pr-main pr-main-child js-registerTemplateType" data-type="student">
                                <div class="c-text c-text-res-stu">
                                    <span class="login-icon-res-stu icon-5"></span>
                                    <input type="text" placeholder="请输入用户名" class="txt1 JS-inputEvent JS-classInput" name="realname">
                                </div>
                                <div class="c-text c-text-res-stu">
                                    <span class="login-icon-res-stu icon-4"></span>
                                    <input type="tel" placeholder="请输入密码" class="txt1 JS-inputEvent JS-classInput" name="password">
                                </div>
                                <input type="button" name="sub" value="完成注册" class="login-btn login-btn-res-stu login-orange JS-getClassLIst">
                            </div>
                        </form>
                        <div class="lop-tab tabLeft">
                            <ul>
                                <li class="JS-selectStudent-main stu active">
                                    <div class="image"></div>
                                    <div class="side">用户名注册</div>
                                </li>
                                <li class="JS-selectTeacher-main" onclick="location.href='user_tel.html'">
                                    <div class="image image-tea"></div>
                                    <div class="side">手机号注册</div>
                                </li>
                            </ul>
                        </div>
                        <script type="text/javascript">
                        $(document).ready(function() {
                            gradeSwitch();
                            sexSwitch();

                            function gradeSwitch() {
                                var gradeItem = $(".select-grade");
                                for (var i = 0; i < gradeItem.length; i++) {
                                    gradeItem[i].onclick = function() {
                                        for (var j = 0; j < gradeItem.length; j++) {
                                            $(gradeItem[j]).find(".grade-item").attr('value', '');
                                            gradeItem[j].className = '';
                                        }
                                        $(this).addClass('active');
                                        var val = $(this).text();
                                        $(this).find(".grade-item").attr('value', val);
                                    }
                                }
                            }

                            function sexSwitch() {
                                var sexItem = $(".select-sex-item");
                                for (var i = 0; i < sexItem.length; i++) {
                                    sexItem[i].onclick = function() {
                                        for (var j = 0; j < sexItem.length; j++) {
                                            $(sexItem[j]).find(".sex-item").attr('value', '');
                                            sexItem[j].className = '';
                                        }
                                        $(this).addClass('active');
                                        var val = $(this).text();
                                        $(this).find(".sex-item").attr('value', val);
                                    }
                                }
                            }

                        });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>