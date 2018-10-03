<?php if (!defined('THINK_PATH')) exit();?><!-- 全局css排版样式 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>台院O2O-登录</title>
	<link rel="stylesheet" href="/wsgz/Public/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="page-header">用户登录</h1>
		<form action="" class="form-horizontal">
			<div class="form-group">
				<div class="col-md-5">
					<input class="form-control" type="text" placeholder="请输入用户名/email"/>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-5">
					<input class="form-control" type="password" placeholder="请输入密码"/>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-5">
					<input type="submit" class="btn btn-primary" value="登录">
				</div>
			</div>
		</form>
	</div>
	<script src="/wsgz/Public/js/jquery.min.js"></script>
	<script src="/wsgz/Public/js/bootstrap.min.js"></script>
</body>
</html>