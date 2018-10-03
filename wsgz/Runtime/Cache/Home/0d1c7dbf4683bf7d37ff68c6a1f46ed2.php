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
		<h1>治水百科</h1>
		<h4>省市政策文件，省市简报，五水共治办，治水采纳建议...</h4>
	</div>
</div>
<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-3 hidden-xs">
				<div class="list-group">
					<a href="#1" class="list-group-item">1.省市政策文件</a>
					<a href="#2" class="list-group-item">2.省市简报</a>
					<a href="#3" class="list-group-item">3.联系方式</a>
				</div>
			</div>
			<div class="col-md-9 about">
				<div class="box">
					<a name="1"></a>
					<h3>省市政策文件</h3>
					<?php if(is_array($list)): foreach($list as $key=>$obj): ?><h4 style="color:#666">第<?php echo ($obj["provinces_id"]); ?>篇：【<?php echo ($obj["provinces_title"]); ?>】</h4>
						<p><?php echo ($obj["provinces_content"]); ?></p>
						<hr style="FILTER: progid:DXImageTransform.Microsoft.Glow(color=#987cb9,strength=10)" width="80%" color=#987cb9 SIZE=1><?php endforeach; endif; ?>
				</div>

				<div class="box">
					<a name="2"></a>
					<h3>省市简报</h3>
					<?php if(is_array($dist)): foreach($dist as $key=>$obj): ?><h4 style="color:#666">第<?php echo ($obj["documents_id"]); ?>篇：【<?php echo ($obj["documents_title"]); ?>】</h4>
						<p><?php echo ($obj["documents_content"]); ?></p>
						<hr style="FILTER: progid:DXImageTransform.Microsoft.Glow(color=#987cb9,strength=10)" width="80%" color=#987cb9 SIZE=1><?php endforeach; endif; ?>
				</div>

				<div class="box">
					<a name="3"></a>
					<h3>联系方式</h3>
					<p>
						联系方式，能够达到对个人直接沟通的相关信息，多用于聊天、交流。也是一种告知方式的体现。
							早期主要以普通信件形式体现：电报挂号、邮政编码、详细地址、固定电话号等。
							随着信息技术的不断发展及更新，现今的联系方式表达更是异彩纷呈：QQ号码、MSN地址、飞信号码、电子邮箱、手机号码、百度用户名、微信等。
							联系方式可以简单分为：实体地址、社交软件、社交网站、电话等。
					</p>
					<p>地址：浙江省台州市临海市东方大道605号</p>
					<p>邮编：317000</p>
					<p>电话：0574-99990000</p>
					<p>传真：0576-93902010</p>
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