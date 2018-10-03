<?php if (!defined('THINK_PATH')) exit();?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- 分别为：屏幕宽度和设备一直，初始缩放比例，最大缩放比例和禁止用户缩放 -->
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <title>治水官网后台-添加政策文件</title>
  <!-- jQuery -->
  <script type="text/javascript" src="/wsgz/Public/js/jQuery.js"></script>
  <!-- bootstrap.min.javascript -->
  <script type="text/javascript" src="/wsgz/Public/js/bootstrap.min.js"></script>
  <!-- style CSS -->
  <link rel="stylesheet" type="text/css" href="/wsgz/Public/css/back.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="/wsgz/Public/css/bootstrap.min.css" />
  <!-- style CSS -->
  <link rel="stylesheet" type="text/css" href="/wsgz/Public/css/style.css" />
  <!-- umeditor css-->
  <link rel="stylesheet" type="text/css" href="/wsgz/Public/editor/themes/default/css/umeditor.css" />

  <!-- jquery javascript-->
  <script type="text/javascript" src="/wsgz/Public/js/jquery.min.js"></script>

  <!-- umeditor javascript-->
  <script type="text/javascript" src="/wsgz/Public/editor/umeditor.config.js"></script>
  <script type="text/javascript" src="/wsgz/Public/editor/umeditor.min.js"></script>
  <script type="text/javascript" src="/wsgz/Public/editor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
  <!-- 头部文件开始 -->
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
  <!-- 头部文件结束 -->
  <!--自创sideba-->
  <div class="container" style="min-height: 500px;padding:0;margin:0;">
    <div class="row">
      <!-- 个人中心侧边栏开始 -->
      <div class="col-md-3 col-sm-4 col-lg-3 col-xs-4">
    <ul class="list-group">
        <li class="list-group-item itemfix">
            <a href=<?php echo U('Personal/noticelist');?>>
                <span class="glyphicon glyphicon-phone-alt"></span>
                &nbsp;投诉信息管理
            </a>
        </li>
        <li class="list-group-item itemfix">
            <a href=<?php echo U('Personal/articlelist');?>>
                <span class="glyphicon glyphicon-edit"></span>
                &nbsp;增改治水新闻
            </a>
        </li>

        <li class="list-group-item itemfix" id="infocol">
            <a href="#"}>
                <span class="glyphicon glyphicon-comment"></span>
                &nbsp;信息会展管理
            </a>
        </li>
        <li class="list-group-item itemfix" id="reproject" style="display: none">
            <a href=<?php echo U('Personal/waterproject');?> style="color:#99cccc">
                <span class="glyphicon glyphicon-th-list"></span>
                &nbsp;治水项目发布
            </a>
        </li>
        <li class="list-group-item itemfix" id="savecom" style="display: none">
            <a href=<?php echo U('Personal/watercompany');?> style="color:#99cccc">
                <span class="glyphicon glyphicon-tint"></span>
                &nbsp;节水企业增加
            </a>
        </li>
        <li class="list-group-item itemfix" id="rivercol" style="display: none">
            <a href=<?php echo U('Personal/waterroad');?> style="color:#99cccc">
                <span class="glyphicon glyphicon-grain"></span>
                &nbsp;河道信息管理
            </a>
        </li>

        <li class="list-group-item itemfix" id="upload">
            <a href="#">
                <span class="glyphicon glyphicon-list-alt"></span>
                &nbsp;治水文件上传
            </a>
        </li>
        <li class="list-group-item itemfix" id="province" style="display: none">
            <a href=<?php echo U('Personal/waterprovince');?> style="color:#99cccc">
                <span class="glyphicon glyphicon-grain"></span>
                &nbsp;省市简报上传
            </a>
        </li>
        <li class="list-group-item itemfix" id="waterdocument" style="display: none">
            <a href=<?php echo U('Personal/waterdocument');?> style="color:#99cccc">
                <span class="glyphicon glyphicon-grain"></span>
                &nbsp;政策文件上传
            </a>
        </li>

        <li class="list-group-item itemfix">
            <a href=<?php echo U('Personal/pwdfix');?>>
                <span class="glyphicon glyphicon-pencil"></span>
                &nbsp;修改密码
            </a>
        </li>
    </ul>
</div>

<script type="text/javascript">
    window.onload = function (){
        var info = document.getElementById('infocol');
        var pro = document.getElementById('reproject');
        var save = document.getElementById('savecom');
        var river = document.getElementById('rivercol');
        var upload = document.getElementById('upload');
        var vince = document.getElementById('province');
        var waterdocument = document.getElementById('waterdocument');

        info.onclick = function() {
            if(pro.style.display == 'block'){
                pro.style.display = 'none';
                save.style.display = 'none';
                rivercol.style.display = 'none';
            }else{
                pro.style.display = 'block';
                save.style.display = 'block';
                rivercol.style.display = 'block';
            }
        };

        upload.onclick = function() {
            if(vince.style.display == 'block'){
                vince.style.display = 'none';
                waterdocument.style.display = 'none';
            }else{
                vince.style.display = 'block';
                waterdocument.style.display = 'block';
            }
        };
    };
</script>
      <!-- 个人中心侧边栏结束 -->
      <div class="col-md-9 col-sm-8 col-lg-9 col-xs-8">
        <div class="main">
          <div class="main-h" >
            <ul class="breadcrumb">
              <li>
                <a href=<?php echo U('Personal/index');?>>个人中心</a>
                <span class="divider"></span>
              </li>
              <li>
                <a href=<?php echo U('Personal/waterprovince');?>>治水文件上传</a>
                <span class="divider"></span>
              </li>
              <li class="active">添加政策文件</li>
            </ul>
            <h3 class="side-lined" style="color:#000"><?php echo ($username); ?>欢迎你！</h3>
            <form action=<?php echo U('Personal/documentadd_fun');?> method="post">
              <input name="documentname" type="text" placeholder="请输入政策文件标题" class="form-control" style="width:50%">
              <br>
              <script type="text/plain" id="container" name="container" style="width:100%;height:300px;"></script>
              <br>
              <input type="submit" class="form-control" value="提交" style="width:100px; margin-bottom: 3%">
              <!-- <input type="file" name="photo" />
              <input type="submit" value="上传" />
              -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <!-- 实例化编辑器 -->
  <script>  
    var editor = UM.getEditor('container',{
      toolbar: 
            ['bold italic underline fullscreen', 'link unlink','|', 'emotion image video' ,'|', 'fontfamily fontsize'] 
    });
    </script>
  <!-- 实例化编辑器结束 -->
  <!-- 底部文件footer开始 -->
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
  <!-- 底部文件footer结束 -->
</body>
</html>