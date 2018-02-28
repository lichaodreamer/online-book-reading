<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/bookreading/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/bookreading/Public/admin/css/main.css"/>
    <script type="text/javascript" src="/bookreading/Public/admin/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="/bookreading/Public/admin/js/libs/jquery-3.2.1.min.js"></script>
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
                    <a href="javascript:void(0);"><i class="icon-font">&#xe018;</i>账号管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/user/alluser');?>"><i class="icon-font">&#xe005;</i>账号列表</a></li>
                        <li><a href="<?php echo U('Admin/user/adduser');?>"><i class="icon-font">&#xe026;</i>账号添加</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="icon-font">&#xe018;</i>书籍管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/books/allbook');?>"><i class="icon-font">&#xe006;</i>书籍列表</a></li>
                        <li><a href="<?php echo U('Admin/books/addbook');?>"><i class="icon-font">&#xe026;</i>新增书籍</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="icon-font">&#xe018;</i>信息管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/mark/allmark');?>"><i class="icon-font">&#xe051;</i>书签列表</a></li>
                        <li><a href="<?php echo U('Admin/shelf/allshelf');?>"><i class="icon-font">&#xe006;</i>书架列表</a></li>
                         <li><a href="<?php echo U('Admin/comment/allcomment');?>"><i class="icon-font">&#xe00b;</i>评论列表</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Admin/index/index');?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="javascript:void(0)">书籍管理</a><span class="crumb-step">&gt;</span><span>书籍新增</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('Admin/books/newbook');?>" method="post"  enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                            <input type="hidden" name="bid" value="<?php echo ($b["bid"]); ?>">
                                <th><i class="require-red">*</i>图书名称：</th>
                                <td>
                                    <input class="common-text required" required="required" name="bname" value="" placeholder="名称" size="50" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>作者：</th><td><input name="bauthor" type="text" required="required" value="" placeholder="作者" size="50"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>分类：</th>
                                <td>
                                    <input class="common-text required" required="required" name="btype" value="" placeholder="图书分类" size="50" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>出版社：</th><td><input name="bpress" required="required" type="text" value="" placeholder="出版社" size="50"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>出版时间：</th><td><input name="btime" required="required" type="date" value="" placeholder="出版时间" size="50"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>图书缩略图：</th>
                                <td>
                                    <input name="bimage" type="file" value="12"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>字数:</th><td><input name="bnum" type="number" required="required" min="1" max="5" value="" style="width:80px">万</td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>分数:</th><td><input name="bscore" type="number" required="required" value="" style="width:80px">分</td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>图书介绍：</th>
                                <td><textarea name="bintroduction" class="common-textarea" cols="10" placeholder="图书简介" style="width: 98%;" rows="4"></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit" multiple>
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->

<!-- <script type="text/javascript">
    $(document).ready(function(){
        $(".sidebar-list li a").click(function(){
            $i=$(this).parent().index();
            $(".sidebar-list li ul").hide()
            $(".sidebar-list li ul").eq($i).css("display","block");
        });      
    })
</script> -->