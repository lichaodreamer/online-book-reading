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
	
<title>图书列表</title>
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<ul class="list-group">
						<li class="list-group-item"><a href="<?php echo U('Home/Index/booklist');?>/id/名著"><span class="glyphicon glyphicon-align-left"></span>&nbsp;&nbsp;经&nbsp;典&nbsp;名&nbsp;著</a></li>
						<li class="list-group-item"><a href="<?php echo U('Home/Index/booklist');?>/id/文学"><span class="glyphicon glyphicon-align-left"></span>&nbsp;&nbsp;经&nbsp;典&nbsp;文&nbsp;学</a></li>
						<li class="list-group-item"><a href="<?php echo U('Home/Index/booklist');?>/id/诗词"><span class="glyphicon glyphicon-align-left"></span>&nbsp;&nbsp;诗&nbsp;词&nbsp;文&nbsp;学</a></li>
						<li class="list-group-item"><a href="<?php echo U('Home/Index/booklist');?>/id/曲艺"><span class="glyphicon glyphicon-align-left"></span>&nbsp;&nbsp;曲&nbsp;艺&nbsp;文&nbsp;学</a></li>
						<li class="list-group-item"><a href="<?php echo U('Home/Index/booklist');?>/id/儒家"><span class="glyphicon glyphicon-align-left"></span>&nbsp;&nbsp;儒&nbsp;家&nbsp;哲&nbsp;学</a></li>
						<li class="list-group-item"><a href="<?php echo U('Home/Index/booklist');?>/id/道家"><span class="glyphicon glyphicon-align-left"></span>&nbsp;&nbsp;道&nbsp;家&nbsp;哲&nbsp;学</a></li>
						<li class="list-group-item"><a href="<?php echo U('Home/Index/booklist');?>/id/法家"><span class="glyphicon glyphicon-align-left"></span>&nbsp;&nbsp;法&nbsp;家&nbsp;哲&nbsp;学</a></li>
						<li class="list-group-item"><a href="<?php echo U('Home/Index/booklist');?>/id/佛家"><span class="glyphicon glyphicon-align-left"></span>&nbsp;&nbsp;佛&nbsp;家&nbsp;哲&nbsp;学</a></li>
						<li class="list-group-item"><a href="<?php echo U('Home/Index/booklist');?>/id/小说"><span class="glyphicon glyphicon-align-left"></span>&nbsp;&nbsp;古&nbsp;典&nbsp;小&nbsp;说</a></li>
						<li class="list-group-item"><a href="<?php echo U('Home/Index/booklist');?>/id/艺术"><span class="glyphicon glyphicon-align-left"></span>&nbsp;&nbsp;古&nbsp;典&nbsp;艺&nbsp;术</a></li>
					</ul>
				</div>
				<div class="col-md-9">
					<div class="photo">
						<img src="/bookreading/Public/home/images/guoxue.png">
					</div>
					<h3><span class="glyphicon glyphicon-gift"></span>&nbsp;书籍总览</h3>
					<table class="table table-hover table-striped wow fadeInRight">
						<thead>
							<tr>
								<th>序号</th>
								<th>书名</th>
								<th>出版社</th>
								<th>字数</th>
								<th>更新时间</th>	
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($book)): $i = 0; $__LIST__ = $book;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?><tr>
									<td><?php echo ($i); ?></td>
									<td>
										<a href="<?php echo U('Home/Index/content');?>/id/<?php echo ($b["bid"]); ?>"><?php echo ($b["bname"]); ?></a>
										<p>作者：<span><?php echo ($b["bauthor"]); ?></span></p>
									</td>
									<td><?php echo ($b["bpress"]); ?></td>
									<td><?php echo ($b["bnumword"]); ?>万</td>
									<td><?php echo ($b["btime"]); ?></td>	
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>	
					<?php echo ($page); ?>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript" src="/bookreading/Public/home/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/bookreading/Public/home/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/bookreading/Public/home/js/wow.min.js"></script>
<script type="text/javascript" src="/bookreading/Public/home/js/myslider.js"></script>
<script type="text/javascript">
	if(<?php echo ($i); ?>==0){
		$("tbody").append(" <tr><td colspan='5'>对不起，暂时还没有此类书籍！！！</td></tr>");
	}
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