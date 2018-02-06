<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>阅读</title>
	<meta charset="utf-8">
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
	<section id="reading">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h5>
						<?php if(is_array($charpter)): $i = 0; $__LIST__ = $charpter;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><p><?php echo ($c["bname"]); ?>&nbsp;&nbsp;<sub><?php echo ($c["bauthor"]); ?>&nbsp;著</sub></p><?php endforeach; endif; else: echo "" ;endif; ?>
						
						<div class="btn-group pull-right">
							<a href="<?php echo U('Home/Index/content');?>/id/<?php echo ($c["bid"]); ?>" type="button" class="btn btn-default"><span class="glyphicon glyphicon-th-list"></span>&nbsp;目录</a>
							<a type="button" id="screen" class="btn btn-default"><span class="glyphicon glyphicon-fullscreen"></span>&nbsp;全屏</a>
							<a type="button" data-toggle="modal" data-target="#addmymark" class="btn btn-default"><span class="glyphicon glyphicon-bookmark"></span>&nbsp;书签</a>
							<div class="btn-group" id="fonts">
								<a type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-font"></span>&nbsp;字体
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">小</a></li>
									<li><a href="#">中</a></li>
									<li><a href="#">大</a></li>
								</ul>
						  	</div>
							<div class="btn-group" id="colors">
								<a type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-adjust"></span>&nbsp;背景
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#"><span></span>&nbsp;&nbsp;浅色</a></li>
									<li><a href="#"><span></span>&nbsp;&nbsp;灰色</a></li>
									<li><a href="#"><span></span>&nbsp;&nbsp;蓝色</a></li>
									<li><a href="#"><span></span>&nbsp;&nbsp;绿色</a></li>
									<li><a href="#"><span></span>&nbsp;&nbsp;夜间模式</a></li>
								</ul>
						  </div>
						</div>
						<?php if($c["mark"] == 1): ?><span id="markicon" style="color: red;" class="glyphicon glyphicon-bookmark pull-right"></span>
							<?php else: ?>
							<span id="markicon" style="color: grey;" class="glyphicon glyphicon-bookmark pull-right"></span><?php endif; ?>
						
					</h5>
					<div class="readtitle">
						<p>正文：第<?php echo ($c["cid"]); ?>章</p>
						<h3><?php echo ($c["cname"]); ?></h3>
						<h5><?php echo ($c["bname"]); ?>&nbsp;&nbsp;经典名著&nbsp;&nbsp;作者：<?php echo ($c["bauthor"]); ?>&nbsp;著</h5>
					</div>
					<div class="readbody">
						<pre id="share"><?php echo ($c["content"]); ?></pre>
					</div>
					<div id="share_button" style="display: none;"><img src="/bookreading/Public/home/images/share.gif" alt="" /></div>
					<div class="jump">
						<p>
							<a href="" id="prev" class="btn btn-default" type="button">上一章</a>
							<a href="" class="btn btn-default" type="button">目录</a>
							<a href="" id="next" class="btn btn-default" type="button">下一章</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modalFrame"></div>
<div class="modal fade" id="addmymark" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">添加书签</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">书签名:</label>
            <input type="text" class="form-control" placeholder="请输入书签名" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="submit" id="addmark" class="btn btn-primary" data-dismiss="modal">确认</button>
      </div>
    </div>
  </div>
</div>
	</section>
	<section id="footer">
		<span><a href="<?php echo U('Home/Index/introduce');?>/id/readbook">关于读书</a></span>
		<span><a href="<?php echo U('Home/Index/introduce');?>/id/statement">免责声明</a></span>
		<span><a href="<?php echo U('Home/Index/introduce');?>/id/law">相关法律</a></span>
		<span><a href="<?php echo U('Home/Index/introduce');?>/id/contact">联系我们</a></span>
		<p>Copyright © 古典文学 www.gudian.com 2006-2016, All Rights Reserved. 鄂ICP备15019699号-2</p>
	</section>
</body>
<script type="text/javascript" src="/bookreading/Public/home/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/bookreading/Public/home/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/bookreading/Public/home/js/wow.min.js"></script>
<script type="text/javascript" src="/bookreading/Public/home/js/myslider.js"></script>
<script type="text/javascript">
	$cid=<?php echo ($c["cid"]); ?>;
	var url = "<?php echo U('Home/Index/jumpchar');?>";
	// 上一章
	$("#prev").click(function(){
		event.preventDefault();
		$cid--;
		$data={
    	"bid":"<?php echo ($c["bid"]); ?>",
    	"cid":$cid
    	};
    	ajax();
		if($cid=="0"){ 
			$cid=1;
		};
	});
	// 下一章
	$("#next").click(function(){
		event.preventDefault();
		$cid++;
	    $data={
	    	"bid":"<?php echo ($c["bid"]); ?>",
	    	"cid":$cid
	    };
	    ajax();
	});
	function ajax(){
    	$.post(url,$data,function(msg){
	    	if(msg==false){
	    	//msg没有内容，因为第0章没内容的msg=[]
	    		$(".modalFrame").html("亲，这已经是第一章咯！！！").show().delay(1000).fadeOut();
	    	}else if(msg==1){
	    		//msg，才是返回来的值msg=1
	    		$(".modalFrame").html("亲，这已经是最后一章咯！！！").show().delay(1000).fadeOut();
	    	}else{
	    		$("#reading .readtitle p").html("正文：第"+msg[0]["cid"]+"章");
		   		$("#reading .readtitle h3").html(msg[0]["cname"]);
	    		$("#reading .readbody pre").html(msg[0]["content"]);
	    		$(window).scrollTop(0);//回到顶部
	            $(window).scrollLeft(0);
    		}
	   	
    	},'json');
  	}
  	// 添加新书签
  	$("#addmark").mouseover(function(){
  		$markname=$("#addmymark input").val();
  		if($markname==""){
  			$("#addmymark input").attr('placeholder','亲，书签名不能为空哦！！！');
  		}
  	})
  	$("#addmark").click(function(){	
  		$markurl="<?php echo U('Home/Index/addmark');?>";  	
	  	$bookname=String("<?php echo ($c["bname"]); ?>")
	  	$charname=String("<?php echo ($c["cname"]); ?>");
	  	$data={
	  		"bid":<?php echo ($c["bid"]); ?>,
	  		"cid":<?php echo ($c["cid"]); ?>,
	  		"bname":$bookname,
	  		"cname":$charname,
	  		"mname":$markname
	  	};
	  	$.post($markurl,$data,function(msg){
	    	if(msg==0){
	    		$(".modalFrame").html("亲，已经存在书签咯！！！").show().delay(2000).fadeOut();
	    	}else{
	    		$(".modalFrame").html("亲，成功添加书签咯！！！").show().delay(2000).fadeOut();
	    		$("#markicon").css("color","red");
	    	}
	    },'json');
  	})
</script>
</html>