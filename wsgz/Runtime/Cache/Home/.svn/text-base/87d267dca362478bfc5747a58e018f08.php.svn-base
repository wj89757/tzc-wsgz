<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- 分别为：屏幕宽度和设备一直，初始缩放比例，最大缩放比例和禁止用户缩放 -->
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>治水官网-地图</title>
	<link rel="stylesheet" href="/wsgz/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/wsgz/Public/css/style.css">
</head>
<body>
	<!-- 响应式导航条 -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href=<?php echo U('Index/index');?> class="navbar-brand nodis">
          <img src="/wsgz/Public/img/logo.png" alt="品牌logo">
        </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <!--亲爱的学弟，学妹们，别怪学长坑你们，后台什么的就不做了。你们加油。-->
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right nokx">
          <li><a href=<?php echo U('Index/index');?>><span class="glyphicon glyphicon-home"></span> 首页</a></li>
          <li><a href=<?php echo U('News/news');?>><span class="glyphicon glyphicon-list"></span> 资讯</a></li>
          <li><a href=<?php echo U('Case/map');?>><span class="glyphicon glyphicon-fire"></span> 地图</a></li>
          <li><a href=<?php echo U('About/about');?>><span class="glyphicon glyphicon-question-sign"></span> 关于</a></li>
        </ul>
      </div>
    </div>
  </nav>

	<div class="jumbotron">
		<div class="container">
			<h1>地图</h1>
			<h4>全国各个省市河流污染程度数据可视化分析</h4>
		</div>
	</div>

	<div id="case">
		<div class="container">
			<div class="row">
				<!--定义页面图表容器-->
				<!-- 必须制定容器的大小（height、width） -->
				<div id="main" style="width: 98%; height: 500px;border: 1px solid #ccc; padding: 10px;"></div>
			</div>
		</div>
	</div>

	<!-- footer底部 -->
	<footer id="footer">
    <div class="container">
      <p><a href="http://www.baidu.com" target="_blank">合作加盟</a> | <a href="http://www.baidu.com" target="_blank">意见见解</a> | <a href="http://www.baidu.com" target="_blank">版权投诉</a> | 
      	<!-- 用户值是否为空 -->
  		<?php if(empty($username)): ?><a href=<?php echo U('Index/login');?>>后台登录</a> 
  		<?php else: ?> 
        <a href=<?php echo U('Personal/index');?>><?php echo ($username); ?></a> 
  			<a href=<?php echo U('Index/logout');?>>注销</a><?php endif; ?> 
      </p>
      <p>浙 ICP 备 12345678. © 2015-2016 治来水团队，Powered by Bootstrap.</p>
    </div>
  </footer>


	<script src="/wsgz/Public/js/echarts-all.js"></script>
	<script src="/wsgz/Public/js/jquery.min.js"></script>
	<script src="/wsgz/Public/js/bootstrap.min.js"></script>
	<script src="/wsgz/Public/js/myEchart.js"></script>
</body>
</html>