<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/bookreading/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/bookreading/Public/admin/css/main.css"/>
    <script type="text/javascript" src="/bookreading/Public/admin/js/libs/modernizr.min.js"></script>
    <!-- <script type="text/javascript" src="/bookreading/Public/admin/js/libs/jquery-3.2.1.min.js"></script> -->
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
                        <li><a href="adduser.html"><i class="icon-font">&#xe026;</i>账号添加</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="icon-font">&#xe018;</i>书籍管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/books/allbook');?>"><i class="icon-font">&#xe006;</i>书籍列表</a></li>
                        <li><a href="addbook.html"><i class="icon-font">&#xe002;</i>书籍添加</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="icon-font">&#xe018;</i>信息管理</a>
                    <ul class="sub-menu">
                        <li><a href="allbook.html"><i class="icon-font">&#xe051;</i>书签列表</a></li>
                        <li><a href="allbook.html"><i class="icon-font">&#xe006;</i>书架列表</a></li>
                         <li><a href="<?php echo U('Admin/comment/allcomment');?>"><i class="icon-font">&#xe00b;</i>评论列表</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">图书管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="addbook.html"><i class="icon-font"></i>新增图书</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>书名</th>
                            <th>作者</th>
                            <th>类型</th>
                            <th>简介</th>
                            <th>出版社</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($book)): $i = 0; $__LIST__ = $book;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?><tr>
                            <td title="509"><a target="_blank" href="#" title="509"><?php echo ($b["bname"]); ?></a> 
                            </td>
                            <td><?php echo ($b["bauthor"]); ?></td>
                            <td><?php echo ($b["btype"]); ?></td>
                            <td><?php echo (msubstr($b["bintroduction"],0,30,'utf-8')); ?></td>
                            <td><?php echo ($b["bpress"]); ?></td>
                            <td>
                                <a class="link-update" href="addbook.html">修改</a>
                                <a class="link-del" href="#">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>
<!-- <script type="text/javascript">
    $(document).ready(function(){
        $(".sidebar-list li a").click(function(){
            $i=$(this).parent().index();
            $(".sidebar-list li ul").hide()
            $(".sidebar-list li ul").eq($i).css("display","block");
        });      
    })
</script> -->