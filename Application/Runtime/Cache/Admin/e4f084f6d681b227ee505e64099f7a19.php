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
                        <li><a href="addbook.html"><i class="icon-font">&#xe026;</i>书籍添加</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Admin/index/index');?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo U('Admin/books/allbook');?>">书籍管理</a><span class="crumb-step">&gt;</span><span>图书编辑</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('Admin/goods/store');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>书籍名称：</th>
                                <td>
                                    <input class="common-text required" id="pname" name="pname" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>作者：</th>
                                <td>
                                    <input class="common-text required" id="pname" name="pname" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>书籍分类：</th>
                                <td>
                                    <select name="pcid" id="pcid">
                                        <option selected>请选择</option>
                                        <?php if(is_array($product_category)): $i = 0; $__LIST__ = $product_category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pc): $mod = ($i % 2 );++$i;?><option value="<?php echo ($pc["pcid"]); ?>">名著</option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>书籍图片：</th>
                                <td><input name="images" id="images" type="file" ></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>书籍简介：</th>
                                <td>
                                    <input class="common-text required" id="pintroduce" name="pintroduce" size="50" value="" type="text">
                                </td></tr>
                            
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit" multiple>
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