<?php if (!defined('THINK_PATH')) exit();?><!-- 调用头部文件 -->
<!DOCTYPE html>
<html>

<head lang="en">
<meta charset="UTF-8">
<title>查询中心</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!-- <link rel="alternate icon" type="image/png" href="assets/i/favicon.png"> -->
<link rel="stylesheet" type="text/css" href="/ypicloud/Public/css/amazeuimin.css" />
<link rel="stylesheet" type="text/css" href="/ypicloud/Public/css/style.css" />
</head>


<body style="overflow-x: hidden">

	<header class="am-topbar am-topbar-fixed-top">
		<div class="am-container">
			<h1 class="am-topbar-brand">
				<a href="http://localhost/ypicloud/admin.php">扬工云</a>
			</h1>

			<button
				class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only"
				data-am-collapse="{target: '#collapse-head'}">
				<span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span>
			</button>
			<div class="am-collapse am-topbar-collapse" id="collapse-head">
				<ul class="am-nav am-nav-pills am-topbar-nav">
					<li [shouye]><a href="<?php echo U('Index/index');?>">首页</a></li>
					<li class="am-active"}><a href="<?php echo U('Query/index');?>">查询</a></li>
					<li [toutiao]><a href="<?php echo U('Toutiao/index');?>">头条</a></li>
					<li [zhaopin]zhaopin><a href="<?php echo U('Zhaopin/index');?>">招聘</a></li>
					<li [jiangtan]><a href="<?php echo U('Jiangtan/index');?>">讲坛</a></li>
					<li class="am-dropdown" data-am-dropdown><a
						class="am-dropdown-toggle" data-am-dropdown-toggle
						href="javascript:;"> 更多 <span class="am-icon-caret-down"></span>
					</a>
						<ul class="am-dropdown-content">
							<li class="am-dropdown-header">这是标题</li>
							<li><a href="#">1. 扬工头条</a></li>
							<li><a href="#">2. 校园招聘</a></li>
							<li><a href="#">3. 扬帆讲坛</a></li>
							<li><a href="#">4. 联系我们</a></li>
						</ul></li>
				</ul>

				<div class="am-topbar-right">
					<a href="<?php echo U('Login/login');?>"><button class="am-btn am-btn-primary am-topbar-btn am-btn-sm">
						<span class="am-icon-user">
								</span><?php echo ($login["login"]); ?>
					</button></a>
					
					<a href="<?php echo U('Login/tuidenglu');?>"><button class="am-btn am-btn-primary am-topbar-btn am-btn-sm ">
						<span class="am-icon-power-off"> </span>退出
					</button></a>
				</div>
				
			</div>
		</div>
	</header>



  <link rel="stylesheet" type="text/css" href="/ypicloud/Public/css/amazeuimin.css" />
  <link rel="stylesheet" type="text/css" href="/ypicloud/Public/css/admin.css" />
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 150%;
      color: #333;
      margin-top: 10px;
    }
    .header p {
      font-size: 14px;
    }
  </style>

<div class="header">
  <div class="am-g">
    <h1>查询中心</h1>
    <p>后期还会添加功能，期待小伙伴们多多提建议，联系邮箱：787864651@qq.com</p>
  </div>
</div>

<div class="am-g">
  <div class="am-u-lg-4 am-u-md-8 am-u-sm-centered">
    <form action="<?php echo U('Query/send');?>" method="post" class="am-form">
      <label for="email">姓名:</label>
      <input class="form-control" type="text" required name="fquerygname">

      <label for="password">学号:</label>
      <input class="form-control" type="number" required name="fquerygid">
      <br>
      
      <div class="am-u-lg-5 am-u-md-8 am-u-sm-centered">
      <div class="am-container">
        <input type="submit" name="chaxun" value="查询" class="am-btn am-btn-primary am-btn-block">
        <!-- <input type="submit" name="" value="忘记密码 ^_^? " class="am-btn am-btn-default am-btn-sm am-fr"> -->
      </div>
      </div>
    </form>
  </div>
</div>


<!-- 调用脚部文件 -->




	<!--[if (gte IE 9)|!(IE)]><!-->
	<script type="text/javascript" src="/ypicloud/Public/js/jquerymin.js"></script>
	<!--<![endif]-->
	<script type="text/javascript" src="/ypicloud/Public/js/amazeuimin.js"></script>
	<script type="text/javascript" src="/ypicloud/Public/js/app.js"></script>
	
	
	
</body>
</html>