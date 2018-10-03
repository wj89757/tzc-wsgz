<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- 分别为：屏幕宽度和设备一直，初始缩放比例，最大缩放比例和禁止用户缩放 -->
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>治水官网-首页</title>
	<link rel="stylesheet" href="/wushuigongzhi/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/wushuigongzhi/Public/css/style.css"></head>
<body>
	<!-- 响应式导航条 -->
	<!-- 响应式导航条 -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a href=<?php echo U('Index/index');?> class="navbar-brand nodis">
        <img src="/wushuigongzhi/Public/img/logo.png" alt="品牌logo"></a>
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
	<div class="topimg">
		<img src="/wushuigongzhi/Public/img/bg-top.jpg" class="img-responsive" alt="五水共治"></div>
	<!-- 响应式导航条结束 -->
	<div class="tab1">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col">
					<!-- 响应式轮播图 -->
					<h3>图片一览</h3>
					<div id="myCarousel" class="carousel slide">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img src="/wushuigongzhi/Public/img/slide1.jpg" alt="第一张"></div>
							<div class="item">
								<img src="/wushuigongzhi/Public/img/slide2.jpg" alt="第二张"></div>
							<div class="item">
								<img src="/wushuigongzhi/Public/img/slide3.jpg" alt="第三张"></div>
						</div>
						<a href="#myCarousel" data-slide="prev" class="carousel-control left">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a href="#myCarousel" data-slide="next" class="carousel-control right">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
				<div class="col-md-3 col">
					<ul class="list-group">
						<!-- 需要十个li -->
						<h3>时事热点</h3>
						<?php if(is_array($hitlist)): foreach($hitlist as $key=>$item): ?><li class="list-group-item oversis">
								<a class="oversis" href=<?php echo U('News/newshow',array('id'=> $item['message_id']));?>>
								<?php echo ($item["message_title"]); ?>
								</a>
							</li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 style="color: #666666;">您的五水共治</h3>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<!-- 模态声明，show表示显示 -->
	<!-- 淡入淡出效果 fade-->
	<div class="modal fade" tabindex="-1" id="myModal">
		<!-- 窗口声明 -->
		<div class="modal-dialog">
			<!-- 内容声明 -->
			<!-- 弹窗的大小 -->
			<!-- modal-lg -->
			<form action="/wushuigongzhi/home/index/upload" enctype="multipart/form-data" method="post">
				<div class="modal-content">
					<!-- 头部 -->
					<div class="modal-header">
						<!-- dismiss="modal"关闭模态框 -->
						<button class="close" data-dismiss="modal">
							<span>&times;</span>
						</button>
						<h4 class="modal-title">在线投诉</h4>
					</div>
					<!-- 主体 -->
					<!-- 主体部分可以使用栅格系统的流体 -->
					<div class="modal-body">
						<p>请填写相应内容，谢谢您的配合！</p>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12">

									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-user"></span>
										</div>
										<input type="text" placeholder="请输入您的姓名/匿名" class="form-control" name="upname"></div>
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-earphone"></span>
										</div>
										<input type="text" placeholder="请输入您的手机号码" class="form-control" name="uptel"></div>
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-map-marker"></span>
										</div>
										<input type="text" placeholder="请输入河流编号/河流名" class="form-control" name="upriver"></div>
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-send"></span>
										</div>
										<select class="form-control" name="upreason">
											<option selected disabled="disabled">请选择投诉原因</option>
											<option value="路面积水">路面积水</option>
											<option value="河面垃圾">河面垃圾</option>
										</select>
									</div>
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-pencil"></span>
										</div>
										<textarea class="form-control" rows="3" placeholder="若有需要，请填写相应的吐槽内容" name="upcontent"></textarea>
									</div>

									<div class="input-group">
										<input id="lefile" type="file" style="display:none">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-picture"></span>
										</div>
										<input id="photoCover" class="form-control" type="file" placeholder="请选择相应的图片" name="upimg"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- 注脚 -->
					<div class="modal-footer">
						<input type="submit" value="提交" class="btn btn-primary btn-block"></div>
				</div>
			</form>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div id="bottom">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<li class="bo_box1">
						<img src="/wushuigongzhi/Public/img/warning_128px_512019_easyicon.net.png">
						<a href="complain.html" data-toggle="modal" data-target="#myModal">
							<h3>在线投诉</h3>
							Complaints Online
						</a>
					</li>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<li class="bo_box2">
						<img src="/wushuigongzhi/Public/img/warning_128px_512019_easyicon.net.png">
						<a href=<?php echo U('Index/comshow');?>>
							<h3>投诉信息展示</h3>
							Complaints Online
						</a>
					</li>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<li class="bo_box3">
						<img src="/wushuigongzhi/Public/img/warning_128px_512019_easyicon.net.png">
						<a href=<?php echo U('Index/infoshow');?>>
							<h3>综合信息会展</h3>
							Complaints Online
						</a>
					</li>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<li class="bo_box4">
						<img src="/wushuigongzhi/Public/img/warning_128px_512019_easyicon.net.png">
						<a href=<?php echo U('Index/pediashow');?>>
							<h3>治水百科</h3>
							Complaints Online
						</a>
					</li>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 style="color: #666666;">相关网站链接</h3>
			</div>
		</div>
	</div>
	<br>
	<div class="clearfix"></div>
	<div id="case">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
					<div class="thumbnail">
						<img src="/wushuigongzhi/Public/img/case1.png">
						<div class="caption">
							<h4>
								<a target="_blank" href="http://www.cztv.com/s/2014/wsgz2014/zsbdt/">浙江省五水共治</a>
							</h4>
							<p>浙江省"五水共治"工作领导小组办公室官方网站</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
					<div class="thumbnail">
						<img src="/wushuigongzhi/Public/img/case2.jpg">
						<div class="caption">
							<h4>
								<a target="_blank" href="http://www.zjwater.com/">浙江水利</a>
							</h4>
							<p>浙江省水利厅和各市、县(市、区)水利部门以及相关单位提供</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
					<div class="thumbnail">
						<img src="/wushuigongzhi/Public/img/case3.png">
						<div class="caption">
							<h4>
								<a href="http://www.zjwater.com/pages/category/0bj/index_1.htm" target="_blank">浙江水利五水共治</a>
							</h4>
							<p>定时定期更新浙江省水利厅简报（“五水共治”水利建设）</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
					<div class="thumbnail">
						<img src="/wushuigongzhi/Public/img/case4.jpg">
						<div class="caption">
							<h4>
								<a href="http://water.zjol.com.cn/" target="_blank">浙江水网</a>
							</h4>
							<p>浙江省的水网，浙江省水利厅，咨询互动文化保护印象等等方式</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
					<div class="thumbnail">
						<img src="/wushuigongzhi/Public/img/case5.jpg">
						<div class="caption">
							<h4>
								<a href="http://www.linhai.gov.cn/" target="_blank">临海政府网站</a>
							</h4>
							<p>临海政府门户网站，首页，咨询信息公开网上办事等</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
					<div class="thumbnail">
						<img src="/wushuigongzhi/Public/img/case6.jpg">
						<div class="caption">
							<h4>
								<a href="http://slj.linhai.gov.cn/" target="_blank">临海水利局</a>
							</h4>
							<p>浙江省临海市水利局网站！发布最新的临海五水共治的新闻</p>
						</div>
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
	<script src="/wushuigongzhi/Public/js/jquery.min.js"></script>
	<script src="/wushuigongzhi/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function()
		{
			// 设置自动播放	
			$('#myCarousel').carousel({
				// 自动4秒播放
				intervar: 2000,
			});
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