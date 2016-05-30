<?php if (!defined('THINK_PATH')) exit();?><!-- 调用头部文件 -->
<!DOCTYPE html>
<html>

<head lang="en">
<meta charset="UTF-8">
<title>扬帆讲坛</title>
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
					<li class="am-active"><a href="<?php echo U('Jiangtan/index');?>">讲坛</a></li>
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




    <link href="/ypicloud/Public/licm/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ypicloud/Public/licm/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/ypicloud/Public/licm/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/ypicloud/Public/licm/css/animate.css" rel="stylesheet">
    <link href="/ypicloud/Public/licm/css/style.css" rel="stylesheet">

<!-- 正文开始 -->
<div class="am-g">
  <div class="am-u-lg-8 am-u-md-8 am-u-sm-centered">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <?php if($fenleiInfo["type"] == 1): ?><style>
                .button_link{display:inline-block;position:relative;text-decoration:none;font-size:15px;color:#33ab6a;font-weight:bold;width:100%;height:100%;border:2px solid rgba(225,255,255,.8);-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-transition:0.4s;-o-transition:0.4s;transition:0.4s;}
                .button_link:hover{border:2px solid rgba(255,255,255,1);}
                .button_link .line{display:inline-block;background-color:#BABABA ;position:absolute;-webkit-transition:0.5s ease;-o-transition:0.5s ease;transition:0.5s ease;}
                .button_link .line_top{height:2px;width:0;left:-50%;top:-2px;}
                .button_link:hover .line_top{width:100%;left:-2px;}
                .button_link .line_right{height:0;width:2px;top:-50%;right:-2px;}
                .button_link:hover .line_right{height:100%;top:-2px;}
                .button_link .line_bottom{width:2px;height:0;bottom:-50%;left:-2px;}
                .button_link:hover .line_bottom{height:100%;bottom:-2px;}
                .button_link .line_left{height:2px;width:0;right:-50%;bottom:-2px;}
                .button_link:hover .line_left{width:100%;right:-2px;}
            </style>
                <div class="row">
                <div class="ibox">
                
                    <?php if(is_array($articleList)): foreach($articleList as $key=>$vo): ?><div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-2" >
                                       <a href="<?php echo U('Article/index',array('id'=>$vo['id']));?>" class="button_link">
                                        <img alt="image" class="img-responsive" src="/ypicloud/Public/Uploads/<?php echo ($vo["pic"]); ?>" style="min-height:120px;">
                                        <span class="line line_top"></span>
                                        <span class="line line_right"></span>
                                        <span class="line line_bottom"></span>
                                        <span class="line line_left"></span>
                                        </a>
                                    </div>
                                    <div class="col-lg-10">
                                        <a href="<?php echo U('Article/index',array('id'=>$vo['id']));?>" class="btn-link">
                                            <h2>
                                                <?php echo (msubstr($vo["title"],0,25,'utf-8',false)); ?>
                                            </h2>
                                        </a>
                                        <p>
                                            <?php echo (msubstr(strip_tags($vo["content"]),0,160,'utf-8',true)); ?> <br>
                                        </p>
                                        <div class="row">
                                            <div class="col-md-8" >
                                                <span class="label label-primary" style="font-size:12px;">作者：<?php echo ($vo["truename"]); ?></span>
                                                <span class="label label-info"   style="font-size:12px;">查看：<?php echo ($vo["view"]); ?></span>
                                                <span class="label label-warning"   style="font-size:12px;">时间：<?php echo (date( "Y-m-d",$vo["ctime"])); ?></span>

                                            </div>
                                            <div class="col-md-2" style="margin-top:10px;">
                                                <div class="small text-right">
                                                    <a href="<?php echo U('Article/index',array('id'=>$vo['id']));?>"><button type="button" class="btn btn-w-m btn-danger">查看全文</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div><?php endforeach; endif; ?>
                    
                </div>
                    <?php elseif($fenleiInfo["type"] == 2): ?>
                        <link rel="stylesheet" type="text/css" href="/ypicloud/Public/licm/doudong/css/type2.css" />
                    <div class = "row">
                        <?php if(is_array($articleList)): foreach($articleList as $key=>$vo): ?><div class="col-lg-6">
                                <div class="ibox float-e-margins">
                                    <div>
                                        <div class="ibox-content no-padding border-left-right" >
                                        <div class="grid">
                                        <figure class="effect-layla">
                                            <img alt="image" class="img-responsive" src="/ypicloud/Public/Uploads/<?php echo ($vo["pic"]); ?>" style="width:100%;max-height:300px;">
                                            <figcaption>
                                            <h2><?php echo (msubstr(strip_tags($vo["title"]),0,20,'utf-8',false)); ?></h2>
                                            <p><?php echo (msubstr(strip_tags($vo["content"]),0,20,'utf-8',true)); ?></p>
                                            <a href="<?php echo U('Article/index',array('id'=>$vo['id']));?>">View more</a>
                                        </figcaption>
                                        </figure>
                                        </div>

                                        </div>
                                        <div class="ibox-content profile-content" style="padding:10px;">
                                            <a href="<?php echo U('Article/index',array('id'=>$vo['id']));?>"><center><h2><strong><?php echo ($vo["title"]); ?></strong></h2></center></a>
                                            <p><?php echo (msubstr(strip_tags($vo["content"]),0,100,'utf-8',true)); ?></p>
                                            <span class="label label-primary" style="font-size:12px;">作者：<?php echo ($vo["truename"]); ?></span>
                                            <span class="label label-info"   style="font-size:12px;">查看：<?php echo ($vo["view"]); ?></span>
                                            <span class="label label-warning"   style="font-size:12px;">时间：<?php echo (date( "Y-m-d",$vo["ctime"])); ?></span>
                                            <p>
                                            </p>
                                            <div class="user-button">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="<?php echo U('Article/index',array('id'=>$vo['id']));?>"><button type="button" class="btn btn-danger btn-sm btn-block"><i class="fa fa-envelope"></i>点击阅读</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><?php endforeach; endif; ?>

                    <?php elseif($fenleiInfo["type"] == 3): ?>
                    <link rel="stylesheet" type="text/css" href="/ypicloud/Public/licm/doudong/css/type2.css" />
                    <div class="row">

                        <?php if(is_array($articleList)): foreach($articleList as $key=>$vo): ?><div class="col-lg-4">
                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h4><?php echo (msubstr($vo["title"],0,10,'utf-8',false)); ?></h4>
                                    </div>
                                    <div class="ibox-content">

                                        <div class="grid">
                                        <figure class="effect-goliath">
                                            <a href="<?php echo U('Article/index',array('id'=>$vo['id']));?>"><img alt="member" src="/ypicloud/Public/Uploads/<?php echo ($vo["pic"]); ?>" width="100%"></a>
                                        <figcaption style="text-align:center;">
                    <p ><?php echo ($vo["biaoqian"]); ?></p>
                    <a href="<?php echo U('Article/index',array('id'=>$vo['id']));?>">View more</a>
                        </figcaption>
                                        </figure>
                                        </div>

                                        <center><h2><?php echo (msubstr($vo["title"],0,10,'utf-8',false)); ?></h2></center>
                                        <p>
                                            <?php echo (msubstr(strip_tags($vo["content"]),0,70,'utf-8',true)); ?>
                                        </p>
                                        <div>
                                            <span>个人对电影的评分:</span>
                                            <div class="stat-percent"><?php echo ($vo["pingfen"]); ?>分</div>
                                            <div class="progress progress-mini">
                                                <div style="width: <?php echo ($vo["pingfen"]); ?>%;" class="progress-bar"></div>
                                            </div>
                                        </div>
                                        <div class="row  m-t-sm">
                                            <div class="col-sm-12">
                                            <span class="label label-warning" style="font-size:12px;">作者：<?php echo ($vo["truename"]); ?></span>
                                            <span class="label label-success"  style="font-size:12px;">评论：<?php echo ($vo["comment"]); ?></span>
                                            <span class="label label-info"   style="font-size:12px;">查看：<?php echo ($vo["view"]); ?></span>
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="<?php echo U('Article/index',array('id'=>$vo['id']));?>"><button type="button" class="btn btn-danger btn-sm btn-block"><i class="fa fa-envelope"></i>点击阅读</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><?php endforeach; endif; ?>

                        <?php elseif($fenleiInfo["type"] == 4): ?>
                            <link rel="stylesheet" type="text/css" href="/ypicloud/Public/licm/doudong/css/tilteffect.css" />
                            <link rel="stylesheet" type="text/css" href="/ypicloud/Public/licm/doudong/css/demo.css" />



                        <div class="row">
                            <div class="col-lg-8">

                                <?php if(is_array($articleList)): foreach($articleList as $key=>$vo): ?><div class="row">
                                    <div class="col-lg-12">
                                            <div class="content">
                                            <ul class="grid grid--xray" style="padding-left:0px;">
                                            <li class="grid__item">
                        <div class="grid__img grid__img--border">
                            <img src="/ypicloud/Public/Uploads/<?php echo ($vo["pic"]); ?>" class="tilt-effect" data-tilt-options='{ "bgfixed" : false, "movement": { "perspective" : 1000, "translateX" : 30, "translateY" : 30, "translateZ" : -50, "rotateX" : 3, "rotateY" : 3, "rotateZ" : 10 } }' alt="grid01"  width="100%;" />
                        </div>
                    </li>
                    </ul>
                                            </div>
                                        </div>
                                        </div>
                                    <div class="row">
                                    <div class="col-lg-12">
                                    <div class="ibox-content profile-content" style="padding:10px;">
                                            <a href="<?php echo U('Article/index',array('id'=>$vo['id']));?>"><center><h2><strong><?php echo ($vo["title"]); ?></strong></h2></center></a>
                                            <p><?php echo (msubstr(strip_tags($vo["content"]),0,160,'utf-8',true)); ?></p>
                                            <span class="label label-primary" style="font-size:12px;">作者：<?php echo ($vo["truename"]); ?></span>
                                            <span class="label label-info"   style="font-size:12px;">查看：<?php echo ($vo["view"]); ?></span>
                                            <span class="label label-warning"   style="font-size:12px;">时间：<?php echo (date( "Y-m-d",$vo["ctime"])); ?></span>
                                            <p>
                                            </p>
                                            <div class="user-button">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="<?php echo U('Article/index',array('id'=>$vo['id']));?>"><button type="button" class="btn btn-danger btn-sm btn-block"><i class="fa fa-envelope"></i>点击阅读</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                        <hr><?php endforeach; endif; ?>
                            </div>
                            <div class="col-lg-4">
                                <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            心情栏目
                                        </div>
                                        <div class="panel-body">
                                            假<br>装<br>这<br>里<br>有<br>一<br>个<br>广<br>告
                                        </div>
                                    </div>
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">
                                            心情栏目
                                        </div>
                                        <div class="panel-body">
                                            假<br>装<br>这<br>里<br>有<br>一<br>个<br>广<br>告
                                        </div>
                                    </div>
                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            心情栏目
                                        </div>
                                        <div class="panel-body">
                                            假<br>装<br>这<br>里<br>有<br>一<br>个<br>广<br>告
                                        </div>
                                    </div>
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            心情栏目
                                        </div>
                                        <div class="panel-body">
                                            假<br>装<br>这<br>里<br>有<br>一<br>个<br>广<br>告
                                        </div>
                                    </div>
                            </div>
                            <script src="/ypicloud/Public/licm/doudong/js/tiltfx.js"></script><?php endif; ?>
                    </div>
                    <div class= "text-center"><?php echo ($page); ?></div>
                </div>
            </div>
        </div>
        </div>
        <!-- 正文结束 -->

  <script src="/ypicloud/Public/licm/js/jquery-2.1.1.js"></script>
    <script src="/ypicloud/Public/licm/js/jquery-ui-1.10.4.min.js"></script>
    <script src="/ypicloud/Public/licm/js/bootstrap.min.js"></script>
    <script src="/ypicloud/Public/licm/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/ypicloud/Public/licm/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/ypicloud/Public/licm/js/inspinia.js"></script>
    <script src="/ypicloud/Public/licm/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="/ypicloud/Public/licm/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Jvectormap -->
    <script src="/ypicloud/Public/licm/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/ypicloud/Public/licm/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Flot -->
    <script src="/ypicloud/Public/licm/js/plugins/flot/jquery.flot.js"></script>
    <script src="/ypicloud/Public/licm/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/ypicloud/Public/licm/js/plugins/flot/jquery.flot.resize.js"></script>



<!-- 调用脚部文件 -->




	<!--[if (gte IE 9)|!(IE)]><!-->
	<script type="text/javascript" src="/ypicloud/Public/js/jquerymin.js"></script>
	<!--<![endif]-->
	<script type="text/javascript" src="/ypicloud/Public/js/amazeuimin.js"></script>
	<script type="text/javascript" src="/ypicloud/Public/js/app.js"></script>
	
	
	
</body>
</html>