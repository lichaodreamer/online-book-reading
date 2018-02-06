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
	
<title>图书详情</title>
	<section id="bookbody">
		<div class="container">
			<div class="row">
				<ul class="breadcrumb">  
					<?php if(is_array($book)): $i = 0; $__LIST__ = $book;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Home/Index/booklist');?>/id/<?php echo ($b["btype"]); ?>"><?php echo ($b["btype"]); ?></a></li>
	         	<li class="active"><?php echo ($b["bname"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>   
	      </ul>
				<div class="row">
					<div class="col-md-9"> 
		        <div class="col-md-4">
		        	<a href="<?php echo U('Home/Index/reading');?>/id/<?php echo ($b["bid"]); ?>"><img src="/bookreading/Public/home/images/bookPhoto/<?php echo ($b["bphoto"]); ?>.jpg"></a>
		        </div>  
		        <div class="col-md-8">
		        	<?php if(is_array($book)): $i = 0; $__LIST__ = array_slice($book,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($i % 2 );++$i;?><h3><?php echo ($b["bname"]); ?>&nbsp;&nbsp;
			        		<sub> <?php echo ($b["bauthor"]); ?>&nbsp;&nbsp;著</sub> 
			        	</h3>
				        <p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (msubstr($b["bintroduction"],0,230,'utf-8')); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
		       	</div>
		       	<div class="mybutton">
			        <a href="<?php echo U('Home/Index/reading');?>/id/<?php echo ($b["bid"]); ?>" class="btn btn-danger" type="button">立即阅读</a>
			        <a id="addshelf" class="btn btn-default" type="button">加入书架</a>
			        <a href="/bookreading/Public/books/<?php echo ($b["bname"]); ?>.txt" download="<?php echo ($b["bname"]); ?>" class="btn btn-default" type="button">图书下载</a>
			       </div>  
					</div>
					<div class="col-md-3">
						<p id="bookscore"></p>
						<p>字数：<?php echo ($b["bnumword"]); ?>万</p>
						<p>分类：<a href="<?php echo U('Home/Index/booklist');?>/id/<?php echo ($b["btype"]); ?>"><?php echo ($b["btype"]); ?></a></p>
						<p>出版社：<?php echo ($b["bpress"]); ?></p>
						<p>出版时间：<?php echo ($b["btime"]); ?></p>
					</div>
				</div>
				<div class="row comment">
						<div class="col-md-9">
							<ul id="myTab" class="nav nav-tabs">
						    <li style="border-bottom: 2px solid rgb(97,171,170);"><a href="#home" style="color: rgb(97,171,170);" data-toggle="tab">简介</a>
						    </li>
						    <li><a href="#class" data-toggle="tab">目录</a></li>
						    <li><a href="#ios" data-toggle="tab">详情</a></li>
							</ul>
							<div id="myTabContent" class="tab-content">
							    <div class="tab-pane fade in active" id="home">
							      <h4>图书简介</h4>
							      <p><?php echo ($b["bintroduction"]); ?></p>
							    </div>
							    <div class="tab-pane fade" id="class">
							       <h4>图书目录<span class="pull-right"><a href="" data-toggle="tab">展开</a></span></h4>
							       <?php if(is_array($char)): $i = 0; $__LIST__ = $char;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><h5><a href="">第<?php echo ($c["cid"]); ?>章&nbsp;<?php echo ($c["cname"]); ?></a></h5><?php endforeach; endif; else: echo "" ;endif; ?>
							    </div>
							    <div class="tab-pane fade" id="ios">
							       <h4>图书详情</h4>
							       <p>作者<span><?php echo ($b["bauthor"]); ?></span></p>
							       <p>类别<span><?php echo ($b["btype"]); ?></span></p>
							       <p>字数<span><?php echo ($b["bnumword"]); ?>万</span></p>
							       <p>出版社<span><?php echo ($b["bpress"]); ?></span></p>
							       <p>出版时间<span><?php echo ($b["btime"]); ?></span></p>
							    </div>
							</div>
							<!-- 评论区 -->
							<h3>评论</h3>
							<div class="row">
								<?php if(is_array($comment)): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><div class="media">
									  <div class="media-left">
									    <img class="media-object img-circle" src="/bookreading/Public/home/images/userPhoto/user.png">
									  </div>
									  <div class="media-body">
									    <h4 class="media-heading"><?php echo ($c["nickname"]); ?></h4>
									    <p><?php echo ($c["comment"]); ?></p>
									    <p class="pull-right"><?php echo ($c["ctime"]); ?>发表
									  </div>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
							
							<div class="formcomment">
								<h3>发表评论</h3>
								<p>欢迎评论本书！！！</p>
								<div>
									<!-- <form> -->
										<textarea placeholder="请输入评论内容"></textarea>
										<button class="btn btn-danger pull-right">发表</button>
									<!-- </form> -->
								</div>
							</div>
							
						</div>
					<div class="col-md-3">
						<h3 class="list">其他图书</h3>
						<ul class="list-group">
							<?php if(is_array($books)): foreach($books as $key=>$bs): if($bs["bid"] == 1): ?><li class="list-group-item">
											<p style="display: none;"><a href=""><i><?php echo ($key+1); ?></i>&nbsp;&nbsp;<?php echo ($bs["bname"]); ?></a>
											</p>
											<div class="row" style="display: block;">
												<div class="col-md-4">
													<img src="/bookreading/Public/home/images/bookPhoto/<?php echo ($bs["bphoto"]); ?>.jpg">
												</div>
												<div class="col-md-7">
													<a href="<?php echo U('Home/Index/content');?>/id/<?php echo ($bs["bid"]); ?>">
														<h4>作者：<?php echo ($bs["bauthor"]); ?></h4>
														<p><?php echo ($bs["bintroduction"]); ?></p>
													</a>
												</div>
											</div>
										</li>
										<?php else: ?>
										<li class="list-group-item">
									<p style="display: block;"><a href=""><i><?php echo ($key+1); ?></i>&nbsp;&nbsp;<?php echo ($bs["bname"]); ?></a>
									</p>
									<div class="row" style="display: none;">
										<div class="col-md-4">
											<img src="/bookreading/Public/home/images/bookPhoto/<?php echo ($bs["bphoto"]); ?>.jpg">
										</div>
										<div class="col-md-7">
											<a href="<?php echo U('Home/Index/content');?>/id/<?php echo ($bs["bid"]); ?>">
												<h4>作者：<?php echo ($bs["bauthor"]); ?></h4>
												<p><?php echo ($bs["bintroduction"]); ?></p>
											</a>
										</div>
									</div>
								</li><?php endif; endforeach; endif; ?>
					
							</ul>
					</div>
				</div>
<div class="modalFrame"></div>
			</div>
		</div>
	</section>
<script type="text/javascript" src="/bookreading/Public/home/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/bookreading/Public/home/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/bookreading/Public/home/js/wow.min.js"></script>
<script type="text/javascript" src="/bookreading/Public/home/js/myslider.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var m=<?php echo ($b["bscore"]); ?>;
		for(var i=1;i<=5;i++){
			if(i<=m){
				$("#bookscore").append("<span 	class='glyphicon glyphicon-star'></span>");	
			}else{
				$("#bookscore").append("<span class='glyphicon glyphicon-star-empty'></span>");
			}
		};
		$("#bookscore").append("<span><?php echo ($b["bscore"]); ?>.0</span>");
		$bookname=String("<?php echo ($b["bname"]); ?>");
		$bookauthor=String("<?php echo ($b["bauthor"]); ?>");
		$booktype=String("<?php echo ($b["btype"]); ?>");
		// 添加书架
		$("#addshelf").click(function(){
			$shelfurl="<?php echo U('Home/Index/addshelf');?>"; 
		  	$data={
		  		"bid":<?php echo ($b["bid"]); ?>,
		  		"bname":$bookname,
		  		"bauthor":$bookauthor,
		  		"btype":$booktype
		  	};
		  	$.post($shelfurl,$data,function(msg){
		    	if(msg==0){
		    		$(".modalFrame").html("亲，已经添加书架咯！！！").show().delay(1500).fadeOut();
		    	}else{
		    		$(".modalFrame").html("亲，成功添加书架咯！！！").show().delay(1500).fadeOut();
		    	}
		    },'json');
		})
		// 评论发表
		$(".formcomment button").click(function(){
			$comment=$(".formcomment textarea").val();
			if($comment.length<10){
				$(".modalFrame").html("亲，评论内容不能少于十个字哦！！！").show().delay(1500).fadeOut();
				$(".formcomment textarea").attr("placeholder","请重新输入评论");
			}else if($comment.length>100){
				$(".modalFrame").html("亲，评论内容不能多余一百个字哦！！！").show().delay(1500).fadeOut();
				$(".formcomment textarea").attr("placeholder","请重新输入评论");
			}else{
				$commenturl="<?php echo U('Home/Index/addcomment');?>"; 
			  	$data={
			  		"bid":<?php echo ($b["bid"]); ?>,
			  		"bname":$bookname,
			  		"bauthor":$bookauthor,
			  		"btype":$booktype,
			  		"comment":$comment
			  	};
			  	$.post($commenturl,$data,function(msg){
			    	if(msg[0]==0){
			    		$(".modalFrame").html("亲，不能连续评论哦！！！").show().delay(1500).fadeOut();
			    	}else{
			    		$(".modalFrame").html("亲，评论成功咯！！！").show().delay(1500).fadeOut();
			    		$("#bookbody .container .comment .row").append("<div class='media'><div class='media-left'><img class='media-object img-circle' src='/bookreading/Public/home/images/userPhoto/user.png'></div><div class='media-body'><h4 class='media-heading'>"+msg[1]['nickname']+"</h4><p>"+msg[1]['comment']+"</p><p class='pull-right'>"+msg[1]['ctime']+"发表</div></div>");
			    		// $("#bookbody .container .comment .row").removeClass("row").addClass("row");
			    		

			    	}
			    	
			    },'json');
			}	

		})

		// console.log($comment);
	});
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