<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- 分别为：屏幕宽度和设备一直，初始缩放比例，最大缩放比例和禁止用户缩放 -->
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	
		<title><?php echo ($title); ?></title>
	
	<link rel="stylesheet" href="/wsgz/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/wsgz/Public/css/style.css"></head>
<body>
	<!-- 响应式导航条 -->
	<!-- 响应式导航条 -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a href=<?php echo U('Index/index');?> class="navbar-brand nodis">
        <img src="/wsgz/Public/img/logo.png" alt="品牌logo"></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!--亲爱的学弟，学妹们，别怪学长坑你们，后台什么的就不做了。你们加油。-->
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav navbar-right nokx">
        <li>
          <a href=<?php echo U('Index/index');?>>
            <span class="glyphicon glyphicon-home"></span>
            首页
          </a>
        </li>
        <li>
          <a href=<?php echo U('News/news');?>>
            <span class="glyphicon glyphicon-list"></span>
            资讯
          </a>
        </li>
        <li>
          <a href=<?php echo U('Case/map');?>>
            <span class="glyphicon glyphicon-fire"></span>
            地图
          </a>
        </li>
        <li>
          <a href=<?php echo U('About/about');?>>
            <span class="glyphicon glyphicon-question-sign"></span>
            关于
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<div class="jumbotron">
	<div class="container">
		<h1>综合信息会展</h1>
		<h4>河道信息，节水企业，治水项目，沿线企业等...</h4>
	</div>
</div>
<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-3 hidden-xs">
				<div class="list-group">
					<a href="#1" class="list-group-item">1.河道信息</a>
					<a href="#2" class="list-group-item">2.节水企业</a>
					<a href="#3" class="list-group-item">3.治水项目</a>
				</div>
			</div>
			<div class="col-md-9 about">
				<div class="box">
					<a name="1"></a>
					<h3>河道信息</h3>
					<?php if(is_array($rist)): foreach($rist as $key=>$obj): ?><h4 style="color:#666">第<?php echo ($obj["water_id"]); ?>篇：【<?php echo ($obj["water_name"]); ?>】</h4>
						<p><?php echo ($obj["water_introduction"]); ?></p>
						<hr style="FILTER: progid:DXImageTransform.Microsoft.Glow(color=#987cb9,strength=10)" width="80%" color=#987cb9 SIZE=1><?php endforeach; endif; ?>
				</div>
				<div class="box">
					<a name="2"></a>
					<h3>节水企业</h3>
					<?php if(is_array($sist)): foreach($sist as $key=>$obj): ?><h4 style="color:#666">第<?php echo ($obj["saving_id"]); ?>篇：【<?php echo ($obj["saving_name"]); ?>】</h4>
						<p><?php echo ($obj["saving_content"]); ?></p>
						<hr style="FILTER: progid:DXImageTransform.Microsoft.Glow(color=#987cb9,strength=10)" width="80%" color=#987cb9 SIZE=1><?php endforeach; endif; ?>
				</div>
				<div class="box">
					<a name="3"></a>
					<h3>治水项目</h3>
					<?php if(is_array($list)): foreach($list as $key=>$obj): ?><h4 style="color:#666">第<?php echo ($obj["project_id"]); ?>篇：【<?php echo ($obj["project_name"]); ?>】</h4>
						<p><?php echo ($obj["project_content"]); ?></p>
						<hr style="FILTER: progid:DXImageTransform.Microsoft.Glow(color=#987cb9,strength=10)" width="80%" color=#987cb9 SIZE=1><?php endforeach; endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- footer底部 -->
	<footer id="footer">
  <div class="container">
    <p>
      <a href="http://www.baidu.com" target="_blank">合作加盟</a>
      |
      <a href="http://www.baidu.com" target="_blank">意见见解</a>
      |
      <a href="http://www.baidu.com" target="_blank">版权投诉</a>
      |
      <!-- 用户值是否为空 -->
      <?php if(empty($username)): ?><a href=<?php echo U('Index/login');?>>后台登录</a>
        <?php else: ?>
        <a href=<?php echo U('Personal/index');?>><?php echo ($username); ?></a>
        <a href=<?php echo U('Index/logout');?>>注销</a><?php endif; ?>
    </p>
    <p>浙 ICP 备 12345678. © 2015-2016 治来水团队，Powered by Bootstrap.</p>
  </div>
</footer>

	<script src="/wsgz/Public/js/jquery.min.js"></script>
	<script src="/wsgz/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript"></script>
</body>
</html>