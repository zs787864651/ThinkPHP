<?php if (!defined('THINK_PATH')) exit();?><!-- 调用头部文件 -->
<!DOCTYPE html>
<html>

<head lang="en">
<meta charset="UTF-8">
<title>YPI-Cloud</title>
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
					<li class="am-active"><a href="<?php echo U('Index/index');?>">首页</a></li>
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




<!-- 
<head lang="en">
<meta charset="UTF-8">
<title>YPI-Cloud</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate icon" type="image/png" href="assets/i/favicon.png"> 
</head>
 -->

<style>
.get {
	background: #1E5B94;
	color: #fff;
	text-align: center;
	padding: 100px 0;
}

.get-title {
	font-size: 180%;
	border: 2px solid #fff;
	padding: 20px;
	display: inline-block;
}

.get-btn {
	background: #fff;
}

.detail {
	background: #fff;
}

.detail-h2 {
	text-align: center;
	font-size: 150%;
	margin: 40px 0;
}

.detail-h3 {
	color: #1f8dd6;
}

.detail-p {
	color: #7f8c8d;
}

.detail-mb {
	margin-bottom: 30px;
}

.hope {
	background: #0bb59b;
	padding: 50px 0;
}

.hope-img {
	text-align: center;
}

.hope-hr {
	border-color: #149C88;
}

.hope-title {
	font-size: 140%;
}

.about {
	background: #fff;
	padding: 40px 0;
	color: #7f8c8d;
}

.about-color {
	color: #34495e;
}

.about-title {
	font-size: 180%;
	padding: 30px 0 50px 0;
	text-align: center;
}

.footer p {
	color: #7f8c8d;
	margin: 0;
	padding: 15px 0;
	text-align: center;
	background: #2d3e50;
}
</style>



	<div class="get">
		<div class="am-g">
			<div class="am-u-lg-12">
				<h1 class="get-title">
					扬州工业职业技术学院<br />扬工云 云校园
				</h1>

				<p>期待你的参与，携手共同打造扬工院云生态</p>

				<p>
					<a href="<?php echo U('Login/login');?>" class="am-btn am-btn-sm get-btn"><?php echo ($login["renzheng"]); ?></a>
				</p>
			</div>
		</div>
	</div>

	<div class="detail">
		<div class="am-g am-container">
			<div class="am-u-lg-12">
				<!-- <h2 class="detail-h2">云生态 一人成长 万人助力,期待和你一起去实现!</h2> -->
				<div class="am-g">
				   <a href="<?php echo U('Query/index');?>">
					<div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
						<h3 class="detail-h3">
							<br /><i class="am-icon-mobile am-icon-sm"></i> 查询中心
						</h3>
						<p class="detail-p">支持查询考试时间、考试成绩、学生课表等，请先身份认证后查询。</p>
					</div></a>
					<a href="<?php echo U('Toutiao/index');?>">
					<div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
						<h3 class="detail-h3">
							<br /><i class="am-icon-cogs am-icon-sm"></i> 扬工头条
						</h3>
						<p class="detail-p">扬州工业职业技术学院校歌歌词征集公告：
						校歌是学校文化的重要组成部分，是学校办学理念、校园精神和学校特色的集中体现。
						学校决定面向全校师生员工、广大校友、社会友人开展校歌歌词征集活动...</p>
					</div></a>
					<a href="<?php echo U('Zhaopin/index');?>">
					<div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
						<h3 class="detail-h3">
							<br /><i class="am-icon-check-square-o am-icon-sm"></i> 校园招聘
						</h3>
						<p class="detail-p">江苏易推科技有限公司招聘简章：江苏易推科技有限公司成立于2001年，
						一家专业从事软件开发、多媒体开发、技术培训、计算机服务的公司，是江苏省人事厅指定的人才实训基地，
						江苏省商务厅认定的软件及服务外包示范企业...</p>
					</div></a>
					<a href="<?php echo U('Jiangtan/index');?>">
					<div class="am-u-lg-3 am-u-md-6 am-u-sm-12 detail-mb">
						<h3 class="detail-h3">
							<br /><i class="am-icon-send-o am-icon-sm"></i> 扬帆讲坛
						</h3>
						<p class="detail-p">中青报编委曹林做客我校扬帆讲坛：《中国青年报》编委、
						社评部主任、首席评论员曹林做客我校扬帆讲坛，在图文信息大楼大报告厅为我校生师带来了一场主题为
						“分析时事热点应具备的理性思维”的报告，300余名生师聆听了报告会...</p>
					</div></a>
				</div>
			</div>
		</div>
	</div>


	<div class="hope">
		<div class="am-g am-container">
			<div class="am-u-lg-4 am-u-md-6 am-u-sm-12 hope-img">
				<img src="/ypicloud/Public/i/examples/landing.png" alt=""
					data-am-scrollspy="{animation:'slide-left', repeat: false}">
				<hr class="am-article-divider am-show-sm-only hope-hr">
			</div>
			<div class="am-u-lg-8 am-u-md-6 am-u-sm-12">
				<h2 class="hope-title">阳光榜——云上的阳光</h2>
				<p>在知识爆炸的年代，我们不愿成为知识的过客，拥抱阳光，发挥知识的力量，参与到云校园阳光项目中获得自我提升。</p>
			</div>
		</div>
	</div>




<br />

<div class="am-cf admin-main">
  <div class="admin-content">
    <div class="admin-content-body">
<ul class="am-avg-sm-4 am-avg-md-4 am-avg-lg-10 am-margin gallery-list notes">
        <?php if(is_array($arr)): foreach($arr as $key=>$vo): ?><li>
                            <div style="color:#fff;background:<?php echo ($vo["color"]); ?>;overflow:hidden;">
                                <small><?php echo (date("Y-m-d H:i:s",$vo["ctime"])); ?></small>
                                <h4><?php echo ($vo["title"]); ?></h4>
                                <p ><?php echo ($vo["content"]); ?></p>
                                <a href="#"><i class="fa fa-paint-brush"></i><?php echo ($vo["name"]); ?></a>
                            </div>
                        </li><?php endforeach; endif; ?>
      </ul>

</div>
</div>
</div>



	<footer class="footer">
		<p>
			© 2016 <a href="http://www.ypi.edu.cn/" target="_blank">扬州工业职业技术学院</a>
		</p>
	</footer>

<!-- 调用脚部文件 -->




	<!--[if (gte IE 9)|!(IE)]><!-->
	<script type="text/javascript" src="/ypicloud/Public/js/jquerymin.js"></script>
	<!--<![endif]-->
	<script type="text/javascript" src="/ypicloud/Public/js/amazeuimin.js"></script>
	<script type="text/javascript" src="/ypicloud/Public/js/app.js"></script>
	
	
	
</body>
</html>