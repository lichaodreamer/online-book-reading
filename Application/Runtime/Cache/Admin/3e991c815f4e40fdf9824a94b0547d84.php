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
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Admin/index/index');?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">账号管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo U('Admin/user/adduser');?>"><i class="icon-font"></i>新增账号</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>昵称</th>
                            <th>账号</th>
                            <th>电话</th>
                            <th>email</th>
                            <th>身份</th>
                            <th>性别</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($u["nickname"]); ?></td>
                            <td><?php echo ($u["username"]); ?></td>
                            <td><?php echo ($u["tel"]); ?></td>
                            <td><?php echo ($u["email"]); ?></td>
                            <td><?php echo ($u["identity"]); ?></td>
                            <td><?php echo ($u["usex"]); ?></td>
                            <td>
                                <a class="link-update" href="">修改</a>
                                <a class="link-del" href="#">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"><?php echo ($page); ?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>