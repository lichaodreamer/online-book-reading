<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/bookreading/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/bookreading/Public/admin/css/main.css"/>
    <script type="text/javascript" src="/bookreading/Public/admin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="">管理员</a></li>
                <li><a href="">修改密码</a></li>
                <li><a href="">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="<?php echo U('Admin/user/alluser');?>"><i class="icon-font">&#xe018;</i>账号管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/user/alluser');?>"><i class="icon-font">&#xe005;</i>账号列表</a></li>
                        <li><a href="adduser.html"><i class="icon-font">&#xe026;</i>账号添加</a></li>
                    </ul>
                </li>
                <li>
                    <a href="allcomment.html"><i class="icon-font">&#xe018;</i>评论管理</a>
                    <ul class="sub-menu">
                        <li><a href="allcomment.html"><i class="icon-font">&#xe00b;</i>评论列表<li><a href="addcomment.html"><i class="icon-font">&#xe002;</i>评论编辑</a></li>
                    </ul>
                </li>
                <li>
                    <a href="allbook.html"><i class="icon-font">&#xe018;</i>书籍管理</a>
                    <ul class="sub-menu">
                        <li><a href="allbook.html"><i class="icon-font">&#xe006;</i>书籍列表<li><a href="addbook.html"><i class="icon-font">&#xe002;</i>书籍编辑</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Admin/index/index');?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo U('Admin/user/alluser');?>">账号管理</a><span class="crumb-step">&gt;</span><span>新增账号</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('Admin/user/newuser');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>身份：</th>
                            <td>
                                <select name="colId" id="catid" class="required">
                                    <option value="0">用户</option>
                                    <option value="1">管理员</option>
                                </select>
                            </td>
                        </tr>
                            <tr>
                                <th><i class="require-red">*</i>昵称：</th>
                                <td>
                                    <input class="common-text required" id="nickname" name="nickname" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>账号：</th>
                                <td>
                                    <input class="common-text required" id="username" name="username" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>密码：</th>
                                <td>
                                    <input class="common-text required" id="password" name="password" size="50" value="" type="password">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>确认密码：</th>
                                <td>
                                    <input class="common-text required" id="passwords" name="passwords" size="50" value="" type="password">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>性别：</th>
                                <td>
                                    <input class="common-text required" id="sex" name="sex" size="50" value="男" type="sex">
                                </td>
                            </tr>
                            <tr>
                                <th>电话：</th>
                                <td>
                                    <input class="common-text required" id="tel" name="tel" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>邮箱：</th>
                                <td>
                                    <input class="common-text required" id="email" name="email" size="50" value="" type="email">
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>