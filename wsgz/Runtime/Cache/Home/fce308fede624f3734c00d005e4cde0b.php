<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- 分别为：屏幕宽度和设备一直，初始缩放比例，最大缩放比例和禁止用户缩放 -->
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" href="/wsgz/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/wsgz/Public/css/style.css">
</head>
<body>
	<!-- 响应式导航条 -->
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
		<h1>关于</h1>
		<h4>本机构的成长介绍...</h4>
	</div>
</div>

<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-3 hidden-xs">
				<div class="list-group">
					<a href="#1" class="list-group-item">1.机构介绍</a>
					<a href="#2" class="list-group-item">2.加入我们</a>
					<a href="#3" class="list-group-item">3.联系方式</a>
				</div>
			</div>
			<div class="col-md-9 about">
				<div class="box">
					<a name="1"></a>
					<h3>机构简介</h3>
					<p>
						机构简介主要是各种社会机构为介绍自己的工作性质、业务范围、组织构成以及其他有关情况而编写的说明介绍文书。作用是使公众社会对其有一定程度的了解，并在需要时可以循着一定的渠道与之发生联系。
						与说明书相比，简介类文字的功利性并不明显，主要在于树立公关形象。
						机构简介的内容很简单，主要是写清机构全称、经济性质、领导机构、经营方向、发展历史、市场前景等几项；要写好简介，其要诀在后三点上：经营方向要写出自己的特色，发展历史要平中见奇，市场前景要对人能产生吸引力。
						机构简介通常表现为两种形式：一是短文式，一是名片式。“短文”要写出精彩，“名片”要写出精粹。
					</p>
				</div>
				<div class="box">
					<a name="2"></a>
					<h3>加入我们</h3>
					<p>为此，虎嗅编辑过去两年多里风里来雨里去，晨晨昏昏。但是，还不够。远远不够。图森破。除了人肉驱动，我们还能玩儿点别的么？为此，我们准备找更多的入伙，如果你愿意跟我们这么一个“目前”规模仍不大的团队一起创造点儿什么，经历一家注定将要走远路的公司难能可贵的初创期，那么，赶快加入我们吧。
					虎嗅没有什么？堪与大公司匹敌的薪水。
					虎嗅有什么？极简的决策流程、可以发挥产品设计想象的极大空间。想到？棒极了？那就做！
					我们有什么期望与要求？
					以下是各个空缺岗位具体职责与要求，有意者请详阅，并发简历、相应作品及个人阐述至：
					jobs@huxiu.com
					<br>
					员工对于阿里巴巴集团是最大的资产。我们致力营造开放透明的工作环境，让团队的每一名成员都有机会发挥潜能，也确保每个人的意见都获得尊重。我们诚邀跟我们一样力求突破的您加入阿里巴巴的大家庭。有关我们的职位空缺资讯，请点击这里。
					</p>
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


	<script src="/wsgz/Public/js/jquery.min.js"></script>
	<script src="/wsgz/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript">

	</script>
</body>
</html>