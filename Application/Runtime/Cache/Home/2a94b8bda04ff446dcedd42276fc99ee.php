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
	
<title>首页</title>
	<!-- 轮播图 -->
	<section id="carousel">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div id="myCarousel" class="carousel slide">
					    <!-- 轮播（Carousel）指标 -->
					    <ol class="carousel-indicators">
					        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					        <li data-target="#myCarousel" data-slide-to="1"></li>
					        <li data-target="#myCarousel" data-slide-to="2"></li>
					        <li data-target="#myCarousel" data-slide-to="3"></li>
					    </ol>   
					    <!-- 轮播（Carousel）项目 -->
					    <div class="carousel-inner">
					        <div class="item active">
					            <img src="/bookreading/Public/home/images/1.jpg" alt="First slide">
					        </div>
					        <div class="item">
					            <img src="/bookreading/Public/home/images/2.jpg" alt="Second slide">
					        </div>
					        <div class="item">
					            <img src="/bookreading/Public/home/images/3.jpg" alt="Third slide">
					        </div>
					        <div class="item">
					            <img src="/bookreading/Public/home/images/4.jpg" alt="Third slide">
					        </div>
					    </div>
					    <!-- 轮播（Carousel）导航 -->
					    <a class="carousel-control left" href="#myCarousel" 
					        data-slide="prev">
					    </a>
					    <a class="carousel-control right" href="#myCarousel" 
					        data-slide="next">
					    </a>
					</div>
				</div>
				<div class="col-md-4">
					<ul id="myTab" class="nav nav-tabs">
					    <li class="active"><a href="#home" data-toggle="tab">图书导航</a>
					    </li>
					    <li><a href="#class" data-toggle="tab">经典导航</a></li>
					    <li><a href="#ios" data-toggle="tab">读书导航</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
					    <div class="tab-pane fade in active" id="home">
					        <table class="table table-bordered">
					        	<tr>
					        		<td><a href="<?php echo U('Home/Index/booklist');?>/id/文学">国学入门</a></td>
					        		<td><a href="<?php echo U('Home/Index/booklist');?>/id/文学">文学史</a></td>
					        		<td><a href="<?php echo U('Home/Index/booklist');?>/id/文学">纪实文学</a></td>
					        		<td><a href="<?php echo U('Home/Index/booklist');?>/id/文学">散文随笔</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="<?php echo U('Home/Index/booklist');?>/id/名著">古典名著</a></td>
					        		<td><a href="<?php echo U('Home/Index/booklist');?>/id/小说">古典小说</a></td>
					        		<td><a href="">人物传记</a></td>
					        		<td><a href="">绘画</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="">法律</a></td>
					        		<td><a href="">社会科学</a></td>
					        		<td><a href="">历史纪实</a></td>
					        		<td><a href="">书法/篆刻</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="">文学鉴赏</a></td>
					        		<td><a href="">励志</a></td>
					        		<td><a href="">古典艺术</a></td>
					        		<td><a href="">人文社科</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="">民间记录</a></td>
					        		<td><a href="">皇家记录</a></td>
					        		<td><a href="">史记</a></td>
					        		<td><a href="">古代工艺</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="">园林艺术</a></td>
					        		<td><a href="">建筑艺术</a></td>
					        		<td><a href="">散文</a></td>
					        		<td><a href="">兵法</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="<?php echo U('Home/Index/booklist');?>/id/儒家">儒家经典</a></td>
					        		<td><a href="<?php echo U('Home/Index/booklist');?>/id/道家">道家经典</a></td>
					        		<td><a href="<?php echo U('Home/Index/booklist');?>/id/法家">法家经典</a></td>
					        		<td><a href="<?php echo U('Home/Index/booklist');?>/id/佛家">佛家经典</a></td>
					        	</tr>
					        </table>
					    </div>
					    <div class="tab-pane fade" id="class">
					       <table class="table table-bordered">
					        	<tr>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/红楼梦">红楼梦</a></td>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/西游记">西游记</a></td>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/三国演义">三国演义</a></td>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/水浒传">水浒传</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/史记">史记</a></td>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/资治通鉴">资治通鉴</a></td>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/大学">大学</a></td>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/中庸">中庸</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/论语">论语</a></td>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/孟子">孟子</a></td>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/诗经">诗经</a></td>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/尚书">尚书</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/仪礼">仪礼</a></td>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/周易">周易</a></td>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/春秋左传">春秋左传</a></td>
					        		<td><a href="<?php echo U('Home/Index/content');?>/id/宋词">宋词</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="">孝经</a></td>
					        		<td><a href="">国语</a></td>
					        		<td><a href="">战国策</a></td>
					        		<td><a href="">老子</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="">庄子</a></td>
					        		<td><a href="">孙子兵法</a></td>
					        		<td><a href="">楚辞</a></td>
					        		<td><a href="">古文观止</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="">吕氏长春秋</a></td>
					        		<td><a href="">世说新语</a></td>
					        		<td><a href="">唐诗</a></td>
					        		<td><a href="">元曲</a></td>
					        	</tr>
					        </table>
					    </div>
					    <div class="tab-pane fade" id="ios">
					      <table class="table table-bordered">
					        	<tr>
					        		<td><a href=""><span>新浪读书</span></a></td>
					        		<td><a href="">当当</a></td>
					        		<td><a href="">京东图书</a></td>
					        		<td><a href="">亚马逊</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="">网易阅读</a></td>
					        		<td><a href="">多看图书</a></td>
					        		<td><a href="">掌阅</a></td>
					        		<td><a href="">豆瓣</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="">超星</a></td>
					        		<td><a href="">起点</a></td>
					        		<td><a href="">纵横</a></td>
					        		<td><a href="">国图</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="">中国知网</a></td>
					        		<td><a href="">龙源期刊</a></td>
					        		<td><a href="">搜狐读书</a></td>
					        		<td><a href="">凤凰读书</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="">博库网</a></td>
					        		<td><a href="">文轩网</a></td>
					        		<td><a href="">孔夫子书网</a></td>
					        		<td><a href="">北发图书网</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="">99读书</a></td>
					        		<td><a href="">和讯读书</a></td>
					        		<td><a href="">新华悦读</a></td>
					        		<td><a href="">文明网读书</a></td>
					        	</tr>
					        	<tr>
					        		<td><a href="">国学网</a></td>
					        		<td><a href="">书格</a></td>
					        		<td><a href="">古籍馆</a></td>
					        		<td><a href="">殆知阁</a></td>
					        	</tr>
					        </table>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- 读书咨询 -->
	<section id="Consultation">
		<div class="container wow pulse">
			<div class="row">
				<div class="col-md-12">
					<h3><span class="glyphicon glyphicon-indent-left"></span>&nbsp;读书资讯</h3>
					<div class="row">
				    <div class="col-sm-6 col-md-3">
				         <div class="thumbnail">
				         	<a href="">
				            <img src="/bookreading/Public/home/images/jikang.jpg" 
				             alt="通用的占位符缩略图">
				            <div class="caption">
				                <h3>嵇康：我想和这个世界谈谈风度</h3>
				                <p>鲁迅先生不轻易赞美古人，但他心仪魏晋风度。竹林七贤，是魏晋风度的一个缩影，而嵇康走在最前面...</p>
				            </div>
				           </a> 
				         </div>
				    </div>
				    <div class="col-sm-6 col-md-3">
				        <div class="thumbnail">
				        	<a href="">
				            <img src="/bookreading/Public/home/images/jianshu.jpg" 
				            alt="通用的占位符缩略图">
				            <div class="caption">
				                <h3>检书:鲁迅有鲁迅的苦,朱安有朱安的痛</h3>
				                <p>朱安也试图改变自己，但似乎难以奏效。她看到越来越多的新式女性前来拜访鲁迅，鲁迅喜笑颜开</p>
				            </div>
				           </a>
				        </div>
				    </div>
				    <div class="col-sm-6 col-md-3">
				        <div class="thumbnail">
				        	<a href="">
				            <img src="/bookreading/Public/home/images/guoyun.jpg" 
				            alt="通用的占位符缩略图">
				            <div class="caption">
				                <h3>国运、文化与重器：《国家宝藏…</h3>
				                <p>事实上，虽然在面向大众的节目或者展览中，文物的“国宝”性质比较严重，但是文物保…</p>
				            </div>
				          </a>
				        </div>
				    </div>
				    <div class="col-sm-6 col-md-3">
				        <div class="thumbnail">
				       		<a href="">
				            <img src="/bookreading/Public/home/images/xueleishi.jpg" 
				            alt="通用的占位符缩略图">
				            <div class="caption">
				                <h3>普通话：千年汉族血泪史</h3>
				                <p>西晋末年，匈奴等五胡在晋室内乱之时攻陷洛阳，史称“五胡乱华”。中原汉人纷纷南渡…</p>
				            </div>
				          </a>
				        </div>
				    </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- 热书推荐 -->
	<section id="hotbook">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3><span class="glyphicon glyphicon-fire"></span>&nbsp;热书推荐<span class="pull-right"><a href="<?php echo U('Home/Index/booklist');?>/id/<?php echo ($b["btype"]); ?>">更多&gt</a></span></h3>
					<div class="row">
						<div class="col-md-9 wow fadeInLeft">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<?php if(is_array($book)): foreach($book as $key=>$b): ?><div class="col-sm-6 col-md-3">
										      <div class="thumbnail">
										        <a href="<?php echo U('Home/Index/content');?>/id/<?php echo ($b["bid"]); ?>">
										          <img src="/bookreading/Public/home/images/bookPhoto/<?php echo ($b["bphoto"]); ?>" 
										             alt="通用的占位符缩略图">
										          <div class="caption">
										            <h3>作者：<?php echo ($b["bauthor"]); ?></h3>
										          </div>
										        </a>
										      </div>     
										    </div><?php endforeach; endif; ?>
										</div>
									</div>
								</div>
						</div>
						<div class="col-md-3 wow fadeInRight">
							<h3 class="list">热书排行榜</h3>
							<ul class="list-group">
								<?php if(is_array($book)): foreach($book as $key=>$b): if($b["bid"] == 1): ?><li class="list-group-item">
											<p style="display: none;"><a href=""><i><?php echo ($b["bid"]); ?></i>&nbsp;&nbsp;<?php echo ($b["bname"]); ?></a>
											</p>
											<div class="row" style="display: block;">
												<div class="col-md-4">
													<img src="/bookreading/Public/home/images/bookPhoto/<?php echo ($b["bphoto"]); ?>">
												</div>
												<div class="col-md-7">
													<a href="<?php echo U('Home/Index/content');?>/id/<?php echo ($b["bid"]); ?>">
														<h4>作者：<?php echo ($b["bauthor"]); ?></h4>
														<p><?php echo ($b["bintroduction"]); ?></p>
													</a>
												</div>
											</div>
										</li>
										<?php else: ?>
										<li class="list-group-item">
									<p style="display: block;"><a href=""><i><?php echo ($b["bid"]); ?></i>&nbsp;&nbsp;<?php echo ($b["bname"]); ?></a>
									</p>
									<div class="row" style="display: none;">
										<div class="col-md-4">
											<img src="/bookreading/Public/home/images/bookPhoto/<?php echo ($b["bphoto"]); ?>">
										</div>
										<div class="col-md-7">
											<a href="<?php echo U('Home/Index/content');?>/id/<?php echo ($b["bid"]); ?>">
												<h4>作者：<?php echo ($b["bauthor"]); ?></h4>
												<p><?php echo ($b["bintroduction"]); ?></p>
											</a>
										</div>
									</div>
								</li><?php endif; endforeach; endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- 小型轮播 -->
	<section id="carSilder">
		<div class="container wow bounceInUp">
			<div class="row">
				<div class="col-md-12">
					<div class="change">
				  		<div class="scroll">
				  			<div class="imgList">
				  				<a href=""><img src="/bookreading/Public/home/images/11.jpg" /></a>
				  				<a href=""><img src="/bookreading/Public/home/images/12.jpg" /></a>
				  				<a href=""><img src="/bookreading/Public/home/images/13.jpg" /></a>
				  				<a href=""><img src="/bookreading/Public/home/images/14.jpg" /></a>
				  				<a href=""><img src="/bookreading/Public/home/images/15.jpg" /></a>
				  				<a href=""><img src="/bookreading/Public/home/images/16.jpg" /></a>
				  				<a href=""><img src="/bookreading/Public/home/images/17.jpg" /></a>
				  				<a href=""><img src="/bookreading/Public/home/images/18.jpg" /></a>
				  				<a href=""><img src="/bookreading/Public/home/images/19.jpg" /></a>
				  				<a href=""><img src="/bookreading/Public/home/images/20.jpg" /></a>
				  				<a href=""><img src="/bookreading/Public/home/images/21.jpg" /></a>
				  				<a href=""><img src="/bookreading/Public/home/images/22.jpg" /></a>
				  			</div>
				  		</div>
				  </div>
				</div>
			</div>
		</div>
	</section>
</body>
<script type="text/javascript" src="/bookreading/Public/home/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/bookreading/Public/home/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/bookreading/Public/home/js/wow.min.js"></script>
<script type="text/javascript" src="/bookreading/Public/home/js/myslider.js"></script>
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