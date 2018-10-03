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
		<h1>咨讯</h1>
		<h4>有关的最新动态，资源等...</h4>
	</div>
</div>

<div id="information">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="container-fluid" style="padding:0px">
					<?php if(is_array($list)): foreach($list as $key=>$obj): ?><div class="row info-content">
							<div class="col-md-5 col-sm-5 col-xs-5">
								<!-- <img src=<?php echo ($obj["message_photo"]); ?> class="img-responsive">
								-->
								<img src="/wsgz/Public/img/new2.jpg" class="img-responsive"></div>
							<div class="col-md-7 col-sm-7 col-xs-7">
								<h4>
									<a href=<?php echo U('News/newshow',array('id'=>$obj['message_id']));?> ><?php echo ($obj["message_title"]); ?></a>
								</h4>
								<a href=<?php echo U('News/newshow',array('id'=> $obj['message_id']));?>>
									<p class="hidden-xs"><?php echo ($obj["message_overview"]); ?></p>
								</a>
								<p class="marp"><?php echo ($obj["message_author"]); ?> <?php echo ($obj["message_time"]); ?></p>
							</div>
						</div><?php endforeach; endif; ?>
					<div class="pagination"><?php echo ($page); ?></div>

				</div>
			</div>
			<div class="col-md-4 info-right hidden-xs hidden-sm">
				<blockquote>
					<h2>热门资讯</h2>
				</blockquote>
				<div class="container-fluid">
					<?php if(is_array($hitlist)): foreach($hitlist as $key=>$item): ?><div class="row">
							<div class="col-md-5 col-sm-5 col-xs-5" style="margin:12px 0;padding:0">
								<!-- <img src=<?php echo ($obj["message_photo"]); ?> class="img-responsive">
								-->
								<img src="/wsgz/Public/img/new3.jpg" class="img-responsive"></div>
							<div class="col-md-7 col-sm-7 col-xs-7" style="padding-right: 0">
								<h4>
									<a href=<?php echo U('News/newshow',array('id'=>$obj['message_id']));?>><?php echo ($item["message_title"]); ?></a>
								</h4>
								<p><?php echo ($item["message_author"]); ?> <?php echo ($item["message_time"]); ?></p>
							</div>
						</div><?php endforeach; endif; ?>
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