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
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Admin/index/index');?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo U('Admin/user/alluser');?>">账号管理</a><span class="crumb-step">&gt;</span><span>修改账号</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('Admin/user/edituser');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><tr>
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
                                    <input class="common-text required" required="required" id="nickname" name="nickname" size="50" value="<?php echo ($u["nickname"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>账号：</th>
                                <td>
                                    <input class="common-text required" required="required" readonly="readonly" id="username" name="username" size="50" value="<?php echo ($u["username"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>密码：</th>
                                <td>
                                    <input class="common-text required" required="required" id="password" name="password" size="50" value="<?php echo ($u["password"]); ?>" type="password">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>确认密码：</th>
                                <td>
                                    <input class="common-text required" required="required" id="passwords" name="passwords" size="50" value="<?php echo ($u["password"]); ?>" type="password">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>性别：</th>
                                <td>
                                    <input type="radio" name="sex" value="男" checked>男 &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="sex" value="女">女
                                </td>
                            </tr>
                            <tr>
                                <th>电话：</th>
                                <td>
                                    <input class="common-text required" id="tel" name="tel" size="50" value="<?php echo ($u["tel"]); ?>" type="telephone">
                                </td>
                            </tr>
                            <tr>
                                <th>邮箱：</th>
                                <td>
                                    <input class="common-text required" id="email" name="email" size="50" value="<?php echo ($u["email"]); ?>" type="email">
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
<script type="text/javascript">
    $("input[name='passwords']").blur(function(){
        if($("input[name='password']").val()!=$(this).val()){
            $(this).val("").attr("placeholder","确认密码与密码不一致").focus();
        }
    });
    $("input[name='tel']").blur(function(){
        if($(this).val().length<6||$(this).val().length>20){
            $(this).val("").attr("placeholder","电话大于5小于14").focus();
        }
    });
</script>
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