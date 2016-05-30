<?php if (!defined('THINK_PATH')) exit();?><!-- 调用头部文件 -->
<!DOCTYPE html>
<html>

<head lang="en">
<meta charset="UTF-8">
<title>用户登录</title>
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
					<li [chaxun]}><a href="<?php echo U('Query/index');?>">查询</a></li>
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
 <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>

<!-- 
<div class="header">
  <div class="am-g">
    <h1>扬工云-云校园</h1>
    <p>在这里你可以畅所欲言<br/>寻找同伴，共同成长，一起遨游云端，追逐梦想</p>
  </div>
  <hr />
</div> -->
<br />

<div class="am-g">
  <div class="am-u-lg-4 am-u-md-8 am-u-sm-centered">
    <h1 class="header am-g">登录</h1>
    <hr>

    <form action="<?php echo U('Login/denglu');?>" method="post" class="am-form">
      <label for="number">学号:</label>
      <input type="number"  required name="floginxuehao">
      <br>
      <label for="password">密码:</label>
      <input type="password" required name="floginpasswd">
      <br>
      <!-- <label for="remember-me">
        <input id="remember-me" type="checkbox">
        记住密码
      </label> -->

  <div class="am-u-lg-5 am-u-md-8 am-u-sm-centered">
      <div class="am-container">
        <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-block ">
        <!-- <input type="submit" name="" value="忘记密码? " class="am-btn am-btn-default am-btn-sm am-fr"> -->
      </div>
      </div>
    </form>
    <hr>
    <p>© 2016 扬州工业职业技术学院 , 扬工云-云校园</p>
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