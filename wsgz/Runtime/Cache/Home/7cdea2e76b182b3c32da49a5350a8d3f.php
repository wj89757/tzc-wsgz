<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- 分别为：屏幕宽度和设备一直，初始缩放比例，最大缩放比例和禁止用户缩放 -->
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>台院O2O</title>
	<link rel="stylesheet" href="/wsgz/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/wsgz/Public/css/style.css">
</head>
<body>
	<!-- 响应式导航条 -->
	<!-- 响应式导航条 -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="index.html" class="navbar-brand nodis">
          <img src="/wsgz/Public/img/logo.png" alt="品牌logo">
        </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right nokx">
          <li><a href="index.html"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
          <li><a href="news.html"><span class="glyphicon glyphicon-list"></span> 资讯</a></li>
          <li><a href="case.html"><span class="glyphicon glyphicon-fire"></span> 地图</a></li>
          <li class="active"><a href="about.html"><span class="glyphicon glyphicon-question-sign"></span> 关于</a></li>
        </ul>
      </div>
    </div>
  </nav>



	<!-- 响应式轮播图 -->
	<div id="myCarousel" class="carousel slide">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active" style="background-color:#A6CEE7">
				<img src="/wsgz/Public/img/slide1.jpg" alt="第一张">
			</div>
			<div class="item" style="background-color: #D3C4A5">
				<img src="/wsgz/Public/img/slide2.jpg" alt="第二张">
			</div>
			<div class="item" style="background-color: #FF0024">
				<img src="/wsgz/Public/img/slide3.jpg" alt="第三张">
			</div>
		</div>
		<a href="#myCarousel" data-slide="prev" class="carousel-control left">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a href="#myCarousel" data-slide="next" class="carousel-control right">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>

	<div class="tab1">
		<div class="container">
			<h2 class="tab-h2">[ 为什么要选择台院O2O ]</h2>
			<p class="tab-p">强大的后台服务，美观的前台设计，迅速的快递服务！</p>
			<div class="row">
				<div class="col-md-6 col">
					<div class="media">
						<div class="media-left">
							<a href="#">
								<img src="/wsgz/Public/img/net4.png" alt="" class="media-object">
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">后台服务</h4>
							<p> SAE作为公有云服务，其整体架构具有高可靠性和高安全性，并具备专业的团队来负责安全及运营维护工作</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col">
					<div class="media">
						<div class="media-left">
							<a href="#">
								<img src="/wsgz/Public/img/net1.png" alt="">
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">前台设计</h4>
							<p>组件风格和控制代码分离，基于CSS3，轻松
引入海量bootstrap资源，风格千变万化</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col">
					<div class="media">
						<div class="media-left">
							<a href="#">
								<img src="/wsgz/Public/img/net7.png" alt="">
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">各类终端</h4>
							<p>安卓app、苹果app、微信服务号、微信企业号、
web App、其它轻应用，全面优化，极致体验！</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col">
					<div class="media">
						<div class="media-left">
							<a href="#">
								<img src="/wsgz/Public/img/net6.png" alt="">
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">快递服务</h4>
							<p>台院快递，神速，校内学生运送，独立APP配货平台，互联网+货运，实力强，业务广，渠道多</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- tab3 -->
	<div class="tab3">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 tab3-img">
					<img src="/wsgz/Public/img/o2o2.jpg" class="auto img-responsive center-block">
				</div>
				<div class="col-md-6 col-sm-6 text tab3-text">
					<h3>完美的管理方式</h3>
					<p>最新的管理培训方案，让您的受到服务更加满意</p>
				</div>

			</div>
		</div>
	</div>

	<!-- tab2 -->
	<div class="tab2">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 tab2-img">
					<img src="/wsgz/Public/img/o2o1.png" class="auto img-responsive center-block">
				</div>
				<div class="col-md-6 col-sm-6 text">
					<h3>强大的涉及范围</h3>
					<p>能够在全校进行涉及，起到一定的作用和影响，让您的快递不再缓慢</p>
				</div>
			</div>
		</div>
	</div>
	<!-- footer底部 -->
	<footer id="footer">
		<div class="container">
			<p>合作加盟 | 意见见解 | 版权投诉 </p>
			<p>浙 ICP 备 12345678. © 2009-2016 治来水团队，Powered by Bootstrap.</p>
		</div>
	</footer>
	<script src="/wsgz/Public/js/jquery.min.js"></script>
	<script src="/wsgz/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function()
		{
			// 设置自动播放
			$('#myCarousel').carousel({
				// 自动4秒播放
				intervar: 2000,
			});

			// 设置左右大括号垂直居中
			// $('.carousel-control').css('line-height',$('.carousel-inner img').height() + 'px');
			// $(window).resize(function()
			// {
			// 	var $height = $('.carousel-inner img').eq(0).height() || $('.carousel-inner img').eq(1).height() || $('.carousel-inner img').eq(2).height();
			// 	$('.carousel-control').css('line-height',$height + 'px');
			// });
			// 设置文字垂直居中
			$(window).load(function(){
				$('.text').eq(0).css('margin-top',($('.auto').eq(0).height() - $('.text').eq(0).height()) / 2 +'px');
			});
			$(window).resize(function() {
				$('.text').eq(0).css('margin-top',($('.auto').eq(0).height() - $('.text').eq(0).height()) / 2 +'px');
			});
			$(window).load(function(){
				$('.text').eq(1).css('margin-top',($('.auto').eq(1).height() - $('.text').eq(1).height()) / 2 +'px');
			});
			$(window).resize(function() {
				$('.text').eq(1).css('margin-top',($('.auto').eq(1).height() - $('.text').eq(1).height()) / 2 +'px');
			});
		});
	</script>
</body>
</html>