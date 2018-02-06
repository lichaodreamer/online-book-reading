$(document).ready(function(){
		// 共有导航动画效果开始
		$("#classification li").click(function(){
			$(this).css({"border-bottom-color":"#66CDAA"});
			$(this).siblings().css({"border-bottom-color":"#ddd"});
			$(this).children("a").css({"color":"#66CDAA","font-weight":"bold"});
			$(this).siblings().children("a").css({"color":"#000","font-weight":"normal"});
		});
		// 导航动画效果结束
		$("#carousel li").click(function(){
			$(this).css({"border-bottom-color":"#66CDAA"});
			$(this).siblings().css({"border-bottom-color":"#ddd"});
			$(this).children("a").css({"color":"#66CDAA","font-weight":"bold"});
			$(this).siblings().children("a").css({"color":"#000","font-weight":"normal"});
		});
		// index页面轮播右侧动画效果结束
		//排行榜效果
		$("#hotbook .list-group-item").mousemove(function(){
			$(this).children("p").css({"display":"none"});
			$(this).children(".row").css({"display":"block"});
			$(this).siblings().children("p").css({"display":"block"});
			$(this).siblings().children(".row").css({"display":"none"});
		})
		// content页面
		$("#bookbody li").click(function(){
			$(this).css({"border-bottom-color":"#66CDAA"});
			$(this).siblings().css({"border-bottom-color":"#ddd"});
			$(this).children("a").css({"color":"#66CDAA","font-weight":"bold"});
			$(this).siblings().children("a").css({"color":"#000","font-weight":"normal"});
		});
		//排行榜效果
		$("#bookbody .list-group-item").mousemove(function(){
			$(this).children("p").css({"display":"none"});
			$(this).children(".row").css({"display":"block"});
			$(this).siblings().children("p").css({"display":"block"});
			$(this).siblings().children(".row").css({"display":"none"});
		});
		// 目录展开 
		var h5s=$("#myTabContent h5");
		var open = $("#myTabContent .pull-right>a");
		function auto(){
			let l=h5s.length
			for(let i=0;i<l;i++){
				if(i<7){
					h5s.eq(i).css({"display":"block"})
				}else{
					h5s.eq(i).css({"display":"none"})
				}
			}
		}
		auto();//前7章自动展开的
		//点击控制展开
		var mouse=0;//鼠标点击0-未点击，1-点击
		open.click(function(){
			if(mouse==0){
				h5s.css({"display":"block"});
				mouse=1;
				open.html("收起");
			}else{
				auto();
				mouse=0;
				open.html("展开");
			}

		})
		// 点击禁用
		$("#bookbody .comment .media .media-body p button").click(function(){
			$(this).attr({"disabled":"disabled"});
			// 这里可以进行入库存储点赞信息
		})
		// content页面结束

		//introduce页面的切换
		$("#subject li a").click(function(){
			let m=$(this).parent().index();
			let read=$("#subject .read");
			read.eq(m).show().siblings().hide();
		})
		//introduce页面的切换结束
		// 重要reading页面
		// 分享文字
    function select(){
      return document.selection?document.selection.createRange().text:window.getSelection().toString();
    }
    let text=$("#share");
    let shareButto=$("#share_button");
    text.mouseup(function(e){
      var e=e||window.event;
      l=e.clientX;
      t=e.clientY;
      if(select().length>10){
        setTimeout(function (){//解决IE下文本选中不正确的问题
          shareButto.css({"display":"block"});
          shareButto.css({"left":l+"px"});
          shareButto.css({"top":t+"px"});
        },100);
      }else{
        share_button.style.display='none';
      }
      document.onclick=function(){
        share_button.style.display='none';
      }
      text.click(function(){
        var ev=ev||window.event;
        ev.cacelBubble=true;
      })
      shareButto.click(function(){
      	window.location.href="http://service.weibo.com/share/share.php?title="+select();
      })
    })
		//字体大小切换
		var fli = $("#fonts .dropdown-menu li");
		fli.click(function(){
			let m=$(this).index();
			switch(m){
				case 0:{
					$("#reading .col-md-12 pre").css({"font-size":"12px"})
					console.log(m);
					break;
				}
				case 1:{
					$("#reading .col-md-12 pre").css({"font-size":"16px"})
					console.log(m);
					break;
				};
				case 2:{
					$("#reading .col-md-12 pre").css({"font-size":"18px"})
					console.log(m);
					break;
				}
			}
		})
		// 背景色切换
		var cli = $("#colors .dropdown-menu li");
		cli.click(function(){
			let m=$(this).index();
			switch(m){
				case 0:{
					$("#reading").css({"background-color":"#EFE0CB"});
					$("#reading .col-md-12").css({"background-color":"#FCF5ED"});
					$("#reading .col-md-12 pre").css({"background-color":"#FCF5ED"});
					break;
				};
				case 1:{
					$("#reading").css({"background-color":"#C9C1C1"});
					$("#reading .col-md-12").css({"background-color":"#EFEFEF"});
					$("#reading .col-md-12 pre").css({"background-color":"#EFEFEF"});
					break;
				};
				case 2:{
					$("#reading").css({"background-color":"#98C4F7"});
					$("#reading .col-md-12").css({"background-color":"#D2E6FA"});
					$("#reading .col-md-12 pre").css({"background-color":"#D2E6FA"});
					break;
				};
				case 3:{
					$("#reading").css({"background-color":"#C1EAAA"});
					$("#reading .col-md-12").css({"background-color":"#D2EFC3"});
					$("#reading .col-md-12 pre").css({"background-color":"#D2EFC3"});
					break;
				};
				case 4:{
					$("#reading").css({"background-color":"#817E7E"});
					$("#reading .col-md-12").css({"background-color":"#9A9A9A"});
					$("#reading .col-md-12 pre").css({"background-color":"#9A9A9A"});
					break;
				};
			}
		})
		//全屏模式
		window.isflsgrn = false;//ie11是否进入全屏标志，true为全屏状态
		window.ieIsfSceen = false;//ie11是否进入全屏标志，true为全屏状态态
		//跨浏览器返回当前 document 是否进入了可以请求全屏模式的状态
		function fullscreenEnable(){
		  var isFullscreen = document.fullscreenEnabled ||window.fullScreen ||document.mozFullscreenEnabled ||document.webkitIsFullScreen;
		  return isFullscreen;
		}
		//全屏
		var fScreen = function(){
			var docElm = document.documentElement;
			if (docElm.requestFullscreen) {
				docElm.requestFullscreen();
			}else if (docElm.msRequestFullscreen) {
				 docElm.msRequestFullscreen();
				 ieIsfSceen = true;
			}else if (docElm.mozRequestFullScreen) {
				  docElm.mozRequestFullScreen();
			}else if (docElm.webkitRequestFullScreen) {
				  docElm.webkitRequestFullScreen();
			}else {//对不支持全屏API浏览器的处理
			  window.parent.hideTopBottom();
			  isflsgrn = true;
			}
			$("#header").hide(1000);
      $("#footer").hide(1000);
		}
    //退出全屏
    var cfScreen = function(){
      if(document.exitFullscreen) {
				 document.exitFullscreen();
		  }else if (document.msExitFullscreen) {
				 document.msExitFullscreen();
      }else if (document.mozCancelFullScreen) {
				 document.mozCancelFullScreen();
      }else if (document.webkitCancelFullScreen) {
         document.webkitCancelFullScreen();
      }else {
				window.parent.showTopBottom();
        isflsgrn = false;
      }
      $("#header").show(1000);
      $("#footer").show(1000);
    }
    // 出发函数
		$("#screen").click(function(){
			console.log(1)
			var isfScreen = fullscreenEnable();
      if(!isfScreen && isflsgrn == false){
        if (ieIsfSceen == true) {
          document.msExitFullscreen();
          ieIsfSceen = false;
          return;
        }
        fScreen();
      }else{
        cfScreen();
      }
    });
    // 键盘
    $(document).keydown(function (event) {
      if(event.keyCode == 27 && ieIsfSceen == true){
        ieIsfSceen = false;
      }
    });
    // reading页面结束
		new WOW().init();
})