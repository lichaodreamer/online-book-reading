<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- <link rel="icon" href="ico地址" type="image/x-icon"> -->
	<link rel="stylesheet" type="text/css" href="/bookreading/Public/home/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/bookreading/Public/home/css/bookread.css">
	<link rel="stylesheet" type="text/css" href="/bookreading/Public/home/css/animate.css">
</head>
<body>
<!-- header -->
<section id="header">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p class="headSaying">品国学经典，扬中华文明!</p>
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">未登录</a></li>
							<li><a href="#">登录</a></li>
							<li><a href="#">注册</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
</section>
	
	<!-- logo -->
	<section id="logo">
		<div class="row">
			<div class="col-md-3 logo"></div>
			<div class="col-md-4">
				<div class="input-group">
		      <input type="text" id="searchtext" class="form-control" placeholder="经典图书">
		      <span class="input-group-btn">
		        <a id="search" class="btn btn-default" type="button">搜索</a>
		      </span>
		    </div>
  		</div>
			<div class="col-md-2">
				<div class="btn-group pull-right">
		    	<a href="<?php echo U('Home/Index/person');?>/id/mymark" type="button" class="btn btn-default"><span class="glyphicon glyphicon glyphicon-bookmark"></span>&nbsp;我的书签</a>
		    	<a href="<?php echo U('Home/Index/person');?>/id/myshelf" type="button" class="btn btn-default"><span class="glyphicon glyphicon glyphicon-book"></span>&nbsp;我的书架</a>
				</div>
			</div>
			<div class="col-md-2">
				<div class="code"></div>
			</div>
		</div>
	</section>
	<!-- 分类导航 -->
	<section id="classification">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="nav nav-tabs">
					  <li role="presentation"><a href="<?php echo U('Home/Index/index');?>">网站首页</a></li>
					  <li role="presentation"><a href="<?php echo U('Home/Index/booklist');?>/id/名著">名著经典</a></li>
					  <li role="presentation"><a href="<?php echo U('Home/Index/booklist');?>/id/文学">文学经典</a></li>
					  <li role="presentation"><a href="<?php echo U('Home/Index/booklist');?>/id/诗词">诗词经典</a></li>
					  <li role="presentation"><a href="<?php echo U('Home/Index/booklist');?>/id/儒家">儒家哲学</a></li>
					  <li role="presentation"><a href="<?php echo U('Home/Index/booklist');?>/id/道家">道家哲学</a></li>
					  <li role="presentation" class="pull-right"><a href="<?php echo U('Home/Index/person');?>/id/mycenter"><span class="glyphicon glyphicon glyphicon-user"></span>&nbsp;个人中心</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
<title>个人中心</title>
	<section id="center">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<ul class="leftlist">
						<li class="listitem active">
							<a href="<?php echo U('Home/Index/person');?>/id/mycenter"><span class="glyphicon glyphicon glyphicon-user"></span>&nbsp;个人资料</a>
						</li>
						<li class="listitem">
							<a href="<?php echo U('Home/Index/person');?>/id/mymark"><span class=" glyphicon glyphicon-bookmark"></span>&nbsp;我的书签</a>
						</li>
						<li class="listitem">
							<a href="<?php echo U('Home/Index/person');?>/id/myshelf"><span class=" glyphicon glyphicon-book"></span>&nbsp;我的书架</a>
						</li>
						<li class="listitem">
							<a href="<?php echo U('Home/Index/person');?>/id/mycomment"><span class="glyphicon glyphicon-envelope"></span>&nbsp;我的评论</a>
						</li>
					</ul>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-9">
					<div class="row person myself">
						<div class="centerTitle">
							<span class="glyphicon glyphicon glyphicon-user"></span>&nbsp;个人中心
						</div>
						<div class="row">
							<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><div class="col-md-2">
									<img src="/bookreading/Public/home/images/userPhoto/<?php echo ($u["userphoto"]); ?>.png">
								</div>
								<div class="col-md-10">
									<div class="col-md-6">
										<p>昵称：<span id="loadname"><?php echo ($u["nickname"]); ?></span>&nbsp;&nbsp;&nbsp;<sub><?php echo ($u["usex"]); ?></sub></p>
									<p>账号：<span><?php echo ($u["username"]); ?></span></p>
									<p>身份：<span><?php echo ($u["identity"]); ?></span></p>
									</div>
									<div class="col-md-6">
										<h5>联系方式:<span class="pull-right glyphicon glyphicon glyphicon-pencil" data-toggle="modal" data-target="#editmyinfo"></span></h5>
										<p>电话：<span id="loadtel"><?php echo ($u["tel"]); ?></span></p>
										<p>Email：<span id="loademail"><?php echo ($u["email"]); ?></span></p>
									</div>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<div class="row person" style="display: none;">
						<div class="centerTitle">
							<span class="glyphicon glyphicon glyphicon-bookmark"></span>&nbsp;我的书签
						</div>
						<div class="col-md-12">
							<table class="table table-responsive table-hover">
								<thead>
									<tr>
										<th>标签名</th>
										<th>书名</th>
										<th>章节名</th>
										<th>时间</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
								<?php if(is_array($mark)): $i = 0; $__LIST__ = $mark;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?><tr class="marktr">
										<td><?php echo ($m["mname"]); ?></td>
										<td><?php echo ($m["bname"]); ?></td>
										<td><?php echo ($m["cname"]); ?></td>
										<td><?php echo ($m["mtime"]); ?></td>
										<td>
											<ul>
											<li><a href="" name='<?php echo ($m["bid"]); ?>,<?php echo ($m["cid"]); ?>' class="editmarkname" data-toggle="modal" data-target="#bookmarkmodel">修改&nbsp;&nbsp;</a></li>
											  <li><a href="javascript:void(0);" class="delmark" name='<?php echo ($m["bid"]); ?>,<?php echo ($m["cid"]); ?>'>删除</a></li>
											</ul>
										</td>
									</tr><?php endforeach; endif; else: echo "" ;endif; ?>
								</tbody>
							</table>
						</div>	
						
					</div>
					<?php echo ($markpage); ?>
					<div class="row person" style="display: none;">
						<div class="centerTitle">
							<span class="glyphicon glyphicon glyphicon-book"></span>&nbsp;我的书架
						</div>
						<div class="col-md-12">
							<table class="table table-responsive table-hover">
								<thead>
									<tr>
										<th>书名</th>
										<th>作者</th>
										<th>类型</th>
										<th>时间</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
								<?php if(is_array($shelf)): $i = 0; $__LIST__ = $shelf;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><tr>
										<td><?php echo ($s["bname"]); ?></td>
										<td><?php echo ($s["bauthor"]); ?></td>
										<td><?php echo ($s["btype"]); ?></td>
										<td><?php echo ($s["stime"]); ?></td>
										<td>
											<ul>
											  <li><a href="javascript:void(0);" name='<?php echo ($s["bid"]); ?>' class="delshelf">删除</a></li>
											</ul>
										</td>
									</tr><?php endforeach; endif; else: echo "" ;endif; ?>
								</tbody>
							</table>
						</div>
					</div>
					<?php echo ($shelfpage); ?>
					<div class="row person" style="display: none;">
						<div class="centerTitle">
							<span class="glyphicon glyphicon glyphicon-envelope"></span>&nbsp;我的评论
						</div>
						<div class="col-md-12">
							<table class="table table-responsive table-hover">
								<thead>
									<tr>
										<th>书名</th>
										<th>作者</th>
										<th>类型</th>
										<th>内容</th>
										<th>时间</th>
									</tr>
								</thead>
								<tbody>
								<?php if(is_array($comment)): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$co): $mod = ($i % 2 );++$i;?><tr>
										<td><?php echo ($co["bname"]); ?></td>
										<td><?php echo ($co["bauthor"]); ?></td>
										<td><?php echo ($co["btype"]); ?></td>
										<td><?php echo ($co["comment"]); ?></td>
										<td><?php echo ($co["ctime"]); ?></td>
									</tr><?php endforeach; endif; else: echo "" ;endif; ?>
								</tbody>
							</table>
						</div>
					</div>
					<?php echo ($commentpage); ?>
					</div>

<!-- 编辑个人资料模态框 -->
<div class="modal fade" id="editmyinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">编辑信息</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="nickname" class="control-label">昵称:</label>
            <input type="text" class="form-control" value="<?php echo ($u["nickname"]); ?>" id="nickname">
          </div>
          <div class="form-group">
            <label for="message-tel" class="control-label">电话:</label>
            <input type="text" class="form-control"  value="<?php echo ($u["tel"]); ?>" id="message-tel" />
          </div>
          <div class="form-group">
            <label for="message-email" class="control-label">Email:</label>
            <input type="text" class="form-control"  value="<?php echo ($u["email"]); ?>" id="message-email" />
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="submit" id="editinfo" class="btn btn-primary" data-dismiss="modal">确认</button>
      </div>
    </div>
  </div>
</div>
<!-- 编辑个人资料模态框 -->
<!-- 书签模态框 -->
<div class="modal fade" id="bookmarkmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">书签信息</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="mark-name" class="control-label">书签名:</label>
            <input type="text" class="form-control" value="我的书签" id="mark-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="submit" id="editmark" class="btn btn-primary" data-dismiss="modal">确认</button>
      </div>
    </div>
  </div>
</div>
<!-- 书签模态框 -->
				</div>
			</div>
		</div>
	</section>
	<div class="modalFrame"></div>
<script type="text/javascript" src="/bookreading/Public/home/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/bookreading/Public/home/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/bookreading/Public/home/js/wow.min.js"></script>
<script type="text/javascript" src="/bookreading/Public/home/js/myslider.js"></script>
<script type="text/javascript">
	$(".mypage").hide();
	var url = this.location.pathname;
	var lists=$("#center .leftlist .listitem");
	var person=$("#center .col-md-9 .person");
	if(url.indexOf("mycenter")>0){
		lists.eq(0).addClass("active").siblings().removeClass("active");
		person.eq(0).show().siblings().hide();
	}
	if(url.indexOf("mymark")>0){
		lists.eq(1).addClass("active").siblings().removeClass("active");
		person.eq(1).show().siblings().hide();
		$(".mypage").hide().eq(0).show();
	}
	if(url.indexOf("myshelf")>0){
		lists.eq(2).addClass("active").siblings().removeClass("active");
		person.eq(2).show().siblings().hide();
		$(".mypage").hide().eq(1).show();
	}
	if(url.indexOf("mycomment")>0){
		lists.eq(3).addClass("active").siblings().removeClass("active");
		person.eq(3).show().siblings().hide();
		$(".mypage").hide().eq(2).show();
	}
	// 个人信息编辑
	// 输入框判断
	$("#nickname").blur(function(){
		$nickname=$("#nickname").val();
		if($nickname==""){
			$("#nickname").attr("placeholder","昵称不能为空").focus();
		}
	});
	$("#message-tel").blur(function(){
		$tel=$("#message-tel").val();
        let ret = /^1[3|4|5|8][0-9]\d{8}$/;
        if(ret.test($tel)==false){
        	$("#message-tel").val("");
        	$("#message-tel").attr("placeholder","电话格式不正确").focus();
        }
	});
	$("#message-email").blur(function(){
		$email=$("#message-email").val();
        let ret = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(ret.test($email)==false){
        	$("#message-email").val("");
        	$("#message-email").attr("placeholder","邮箱格式不正确").focus();
        }
	});
	$("#mark-name").blur(function(){
		$markname=$("#mark-name").val();
		if($markname==""){
			$("#mark-name").attr("placeholder","书签名不能为空").focus();
		}else if($markname.length>10){
			$("#mark-name").attr("placeholder","书签名不能大于10个字符").focus();
		}
	});
	// 提交个人信息
	$("#editinfo").click(function(){
		$infourl="<?php echo U('Home/Index/editinfo');?>"; 
		$data={
	  		"nickname":String($("#nickname").val()),
	  		"tel":String($("#message-tel").val()),
		  	"email":String($("#message-email").val())
	  	};
	  	$.post($infourl,$data,function(msg){
		   	if(msg==1){
		   		$(".modalFrame").html("亲，个人信息修改成功了！！！").show().delay(1500).fadeOut();
		   		$("#loadname").html($("#nickname").val());
		   		$("#loadtel").html($("#message-tel").val());
		   		$("#loademail").html($("#message-email").val());
		   	}else{
		    	$(".modalFrame").html("亲，个人信息没有任何修改呦！！！").show().delay(1500).fadeOut();
		   	}
	    },'json');
	});
	$(".editmarkname").click(function(){
		$info=$(this).attr("name").split(",");
		$that=$(this).parent().parent().parent().parent().children("td").eq(0);
		$("#editmark").click(function(){
			$markurl="<?php echo U('Home/Index/editmark');?>"; 
			$data={
		  		"bid":$info[0],
		  		"cid":$info[1],
		  		"mname":String($("#mark-name").val())
		  	};
		  	$.post($markurl,$data,function(msg){
			   	if(msg==1){
			   		$(".modalFrame").html("亲，书签信息修改成功了！！！").show().delay(1500).fadeOut();
			   		$that.html($("#mark-name").val());
			   	}else{
			    	$(".modalFrame").html("亲，书签信息没有任何修改呦！！！").show().delay(1500).fadeOut();
			   	}
		    },'json');
		})
	})
	// 删除书签
	$(".delmark").click(function(){
		$delmarkurl="<?php echo U('Home/Index/delmarkurl');?>";
		$info=$(this).attr("name").split(",");
		$that=$(this).parent().parent().parent().parent();
		$data={
			"bid":$info[0],
	  		"cid":$info[1]
		};
		$.post($delmarkurl,$data,function(msg){
			if(msg==1){
		   		$(".modalFrame").html("亲，书签删除成功了！！！").show().delay(1500).fadeOut();
			   	$that.remove();
		   	}else{
		    	$(".modalFrame").html("亲，书签删除失败了！！！").show().delay(1500).fadeOut();
		   	}		   	
	    },'json');
	})
	//删除书架
	$(".delshelf").click(function(){
		$delshelfurl="<?php echo U('Home/Index/delshelfurl');?>";
		$info=$(this).attr("name");
		$that=$(this).parent().parent().parent().parent();
		$data={
			"bid":$info
		};
		$.post($delshelfurl,$data,function(msg){
			if(msg==1){
		   		$(".modalFrame").html("亲，删除成功了！！！").show().delay(1500).fadeOut();
			   	$that.remove();
		   	}else{
		    	$(".modalFrame").html("亲，删除失败了！！！").show().delay(1500).fadeOut();
		   	}		   	
	    },'json');
	})

</script>
</html>
		<section id="footer">
		<span><a href="<?php echo U('Home/Index/introduce');?>/id/readbook">关于读书</a></span>
		<span><a href="<?php echo U('Home/Index/introduce');?>/id/statement">免责声明</a></span>
		<span><a href="<?php echo U('Home/Index/introduce');?>/id/law">相关法律</a></span>
		<span><a href="<?php echo U('Home/Index/introduce');?>/id/contact">联系我们</a></span>
		<p>Copyright © 古典文学 www.gudian.com 2006-2016, All Rights Reserved. 鄂ICP备15019699号-2</p>
	</section>
</body>
<script type="text/javascript" src="/bookreading/Public/home/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	$("#search").click(function(){
		$myVal=$("#searchtext").val();
		$shelfurl="<?php echo U('Home/Index/booklist');?>/id/"+$myVal; 
		window.location.replace($shelfurl);
	});
	

</script>