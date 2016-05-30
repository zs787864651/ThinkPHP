<?php if (!defined('THINK_PATH')) exit(); if($articleInfo['fid'] == 2): ?><!-- 调用头部文件 -->
<!DOCTYPE html>
<html>

<head lang="en">
<meta charset="UTF-8">
<title><?php echo ($articleInfo["title"]); ?>-<?php echo ($SiteInfo["title"]); ?></title>
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
					<li class="am-active"><a href="<?php echo U('Toutiao/index');?>">头条</a></li>
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



<?php elseif($articleInfo['fid'] == 3): ?> 
<!DOCTYPE html>
<html>

<head lang="en">
<meta charset="UTF-8">
<title><?php echo ($articleInfo["title"]); ?>-<?php echo ($SiteInfo["title"]); ?></title>
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
					<li class="am-active"zhaopin><a href="<?php echo U('Zhaopin/index');?>">招聘</a></li>
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



<?php elseif($articleInfo['fid'] == 4): ?> 
<!DOCTYPE html>
<html>

<head lang="en">
<meta charset="UTF-8">
<title><?php echo ($articleInfo["title"]); ?>-<?php echo ($SiteInfo["title"]); ?></title>
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
	</header><?php endif; ?>

    <link href="/ypicloud/Public/licm/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ypicloud/Public/licm/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/ypicloud/Public/licm/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/ypicloud/Public/licm/css/animate.css" rel="stylesheet">
    <link href="/ypicloud/Public/licm/css/style.css" rel="stylesheet">


<style>
    #beijing img{
        max-width: 100%;
    }
</style>

<input type="hidden" id = "id" value= "<?php echo ($articleInfo["id"]); ?>">
<input type="hidden" id = "userid" value= "<?php echo ($articleInfo["uid"]); ?>">

<!-- 正文开始 -->
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12" style="padding:0px;">
            <div class="col-lg-9">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="text-center article-title" style="margin:20px 0px 20px">
                            <span class="text-muted">
                                <h1>
                                    <?php echo ($articleInfo["title"]); ?>
                                </h1>
                            </div>
                            <div style="margin-bottom:50px;">
                                <?php switch($fenleiInfo["type"]): case "1": ?><img src="/ypicloud/Public/Uploads/<?php echo ($articleInfo["pic"]); ?>" alt="" style="width:100%"><?php break;?>
                                    <?php case "2": ?><!-- 音乐 -->
                                        <link rel="stylesheet" href="/ypicloud/Public/licm/music/css/lanrenzhijia.css" type="text/css" />
                                        <div class="music-player">
                                          <div class="info">
                                            <div class="left"> <a href="javascript:;" class="icon-shuffle"></a> <a href="javascript:;" class="icon-heart"></a> </div>
                                            <div class="center">
                                              <div class="jp-playlist">
                                                <ul>
                                                  <li></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="right"> <a href="javascript:;" class="icon-repeat"></a> <a href="javascript:;" class="icon-share"></a> </div>
                                      <div class="progress jp-seek-bar"> <span class="jp-play-bar" style="width: 0%"></span> </div>
                                  </div>
                                  <div class="controls">
                                    <div class="current jp-current-time">00:00</div>
                                    <div class="play-controls">
                                        <a href="javascript:;" class="icon-previous jp-previous" title="previous"></a>
                                        <a href="javascript:;" class="icon-play jp-play" title="play"></a>
                                        <a href="javascript:;" class="icon-pause jp-pause" title="pause"></a>
                                        <a href="javascript:;" class="icon-next jp-next" title="next"></a>
                                    </div>
                                    <div class="volume-level jp-volume-bar">
                                        <span class="jp-volume-bar-value" style="width: 0%"></span>
                                        <a href="javascript:;" class="icon-volume-up jp-volume-max" title="max volume"></a>
                                        <a href="javascript:;" class="icon-volume-down jp-mute" title="mute"></a>
                                    </div>
                                </div>
                                <div id="jquery_jplayer" class="jp-jplayer"></div>
                            </div>
                            <script src="/ypicloud/Public/licm/music/js/jquery.min.js"></script>
                            <script src='/ypicloud/Public/licm/music/js/jquery.jplayer.min.js'></script>
                            <script src='/ypicloud/Public/licm/music/js/jplayer.playlist.min.js'></script>
                            <script>
                                $(document).ready(function(){


                                  var playlist = [{
                                      title:"<?php echo ($articleInfo["title"]); ?>",
                                      artist:"<?php echo ($userInfo["truename"]); ?>",
                                      mp3:"/ypicloud/Public/Uploads/<?php echo ($articleInfo["mp3"]); ?>",
                                          //oga:"http://www.jplayer.org/audio/ogg/Miaow-02-Hidden.ogg",
                                          poster: "/ypicloud/Public/Uploads/<?php echo ($articleInfo["pic"]); ?>"
                                      }];

                                      var cssSelector = {
                                        jPlayer: "#jquery_jplayer",
                                        cssSelectorAncestor: ".music-player"
                                    };

                                    var options = {
                                        swfPath: "http://cdnjs.cloudflare.com/ajax/libs/jplayer/2.6.4/jquery.jplayer/Jplayer.swf",
                                        supplied: "ogv, m4v, oga, mp3"
                                    };

                                    var myPlaylist = new jPlayerPlaylist(cssSelector, playlist, options);

                                });
</script>
<!-- 音乐 --><?php break;?>
<?php case "3": ?><img src="/ypicloud/Public/Uploads/<?php echo ($articleInfo["pic"]); ?>" alt="" style="width:100%"><?php break;?>
<?php default: ?>
<img src="/ypicloud/Public/Uploads/<?php echo ($articleInfo["pic"]); ?>" alt="" style="width:100%"><?php endswitch;?>

</div>

<div id = "beijing">
    <p style="font-size:14px;" class="text2" >
        <?php if($fenleiInfo["type"] == 4): echo (strip_tags($articleInfo["content"])); ?>
            <?php else: ?>
            <?php echo ($articleInfo["content"]); endif; ?>
    </p>
</div>
<hr>
<div class="row">

    <div class="col-md-12">
    
    <?php if($articleInfo['fid'] == 2): ?><h1>评论栏</h1>
<?php elseif($articleInfo['fid'] == 3): ?> 
<h1>擂台</h1>
<?php elseif($articleInfo['fid'] == 4): ?> 
 <h1>越辩越明</h1><?php endif; ?>
    
        
        <div id="pinglun">

        </div>
        <button class="btn btn-primary btn-block m" id = "show" onclick="replay()" style="margin:0px;"><i class="fa fa-arrow-down"></i>查看更多</button>
    </div>
    <hr>
</div>
<hr>
<div class="row" id = "huifus">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
            
             <?php if($articleInfo['fid'] == 2): ?><i class="fa fa-info-circle"></i>回复操作
<?php elseif($articleInfo['fid'] == 3): ?> 
<i class="fa fa-info-circle"></i>预报名
<?php elseif($articleInfo['fid'] == 4): ?> 
<i class="fa fa-info-circle"></i>发表观点<?php endif; ?>
            
            </div>
            <div class="panel-body">
                <form action="<?php echo U('Article/replay',array('id'=>$articleInfo['id']));?>" method="post">
                    <div class="form-group"><label class="col-sm-2 control-label">楼层</label>

                        <div class="col-sm-10" >
                            <input type="text" value = "顶楼" disabled="" class="form-control" id = "replay">
                        </div>
                    </div>
                    <input type="hidden" value = "" name = "replay" id = "huifuyincang">
                    <br><br>
                    <div class="form-group">
                    
                          <?php if($articleInfo['fid'] == 2): ?><label class="col-sm-2 control-label">昵称</label>
<div class="col-sm-10"><input class="form-control" type="text" placeholder = "请填写昵称" name = "name" required <?php if($_SESSION['mid']!= ''): ?>value ="<?php echo (session('muser')); ?>"<?php endif; ?>></div>

<?php elseif($articleInfo['fid'] == 3): ?> 
<label class="col-sm-2 control-label">姓名</label>
<div class="col-sm-10"><input class="form-control" type="text" placeholder = "请填写姓名" name = "name" required <?php if($_SESSION['mid']!= ''): ?>value ="<?php echo (session('muser')); ?>"<?php endif; ?>></div>
<?php elseif($articleInfo['fid'] == 4): ?> 
<label class="col-sm-2 control-label">笔名</label>
<div class="col-sm-10"><input class="form-control" type="text" placeholder = "请填写笔名" name = "name" required <?php if($_SESSION['mid']!= ''): ?>value ="<?php echo (session('muser')); ?>"<?php endif; ?>></div><?php endif; ?>                                        
                    
                        
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                    
               <?php if($articleInfo['fid'] == 2): ?><label class="col-sm-2 control-label" >邮箱</label>
<div class="col-sm-10"><input class="form-control" type="email" placeholder = "请填写邮箱" name = "email" required <?php if($_SESSION['mid']!= ''): ?>value ="<?php echo (session('memail')); ?>"<?php endif; ?>></div>
<?php elseif($articleInfo['fid'] == 3): ?> 
<label class="col-sm-2 control-label" >手机号</label>
<div class="col-sm-10"><input class="form-control" type="number" placeholder = "请填写手机号" name = "email" required <?php if($_SESSION['mid']!= ''): ?>value ="<?php echo (session('memail')); ?>"<?php endif; ?>></div>
<?php elseif($articleInfo['fid'] == 4): ?> 
<label class="col-sm-2 control-label" >邮箱</label>
<div class="col-sm-10"><input class="form-control" type="email" placeholder = "请填写邮箱" name = "email" required <?php if($_SESSION['mid']!= ''): ?>value ="<?php echo (session('memail')); ?>"<?php endif; ?>></div><?php endif; ?>                        

                        
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                    
            <?php if($articleInfo['fid'] == 2): ?><label class="col-sm-2 control-label" >内容</label>
<div class="col-sm-10">
                            <textarea name="content" id="" cols="30" rows="5" placeholder = "请填写内容" required style="width:100%;"></textarea>
                        </div>
<?php elseif($articleInfo['fid'] == 3): ?> 
<label class="col-sm-2 control-label" >个人简介</label>
<div class="col-sm-10">
                            <textarea name="content" id="" cols="30" rows="5" placeholder = "请填写个人简介" required style="width:100%;"></textarea>
                        </div>
<?php elseif($articleInfo['fid'] == 4): ?> 
<label class="col-sm-2 control-label" >心得体会</label>
<div class="col-sm-10">
                            <textarea name="content" id="" cols="30" rows="5" placeholder = "请填写心得体会" required style="width:100%;"></textarea>
                        </div><?php endif; ?>    
                    
                    

                        
                    </div>

                    <center>
                    
                    
                     <?php if($articleInfo['fid'] == 2): ?><button type="submit" class="btn btn-w-m btn-warning" style="margin-top:10px;">提交评论</button>
<?php elseif($articleInfo['fid'] == 3): ?> 
<button type="submit" class="btn btn-w-m btn-warning" style="margin-top:10px;">打擂台</button>
<?php elseif($articleInfo['fid'] == 4): ?> 
<button type="submit" class="btn btn-w-m btn-warning" style="margin-top:10px;">发表观点</button><?php endif; ?>
                    
                    
                    
                    
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="col-lg-3">
    <div class="widget-head-color-box navy-bg p-lg text-center" style="margin-top:0px;">
        <div class="m-b-md">
            <h2 class="font-bold no-margins">
                <?php echo ($userInfo["truename"]); ?>
            </h2>
            <!-- <small>注册会员</small> -->
        </div>
        <img src="/ypicloud/Public/Uploads/<?php echo ($userInfo["pic"]); ?>" class="img-circle circle-border m-b-md" alt="profile" height="150px;">
    </div>
    <div class="widget-text-box">
        <p><span class="label label-success"  style="font-size:12px;">发布时间：<?php echo (date('Y-m-d H:i:s',$articleInfo["ctime"])); ?></span></p>
        <p><span class="label label-success"  style="font-size:12px;">修改时间：<?php echo (date('Y-m-d H:i:s',$articleInfo["edittime"])); ?></span></p>
        <p><span class="label label-success"  style="font-size:12px;">查看次数：<?php echo ($articleInfo["view"]); ?></span></p>
        <p><span class="label label-success"  style="font-size:12px;">评论次数：<?php echo ($articleInfo["comment"]); ?></span></p>
    </div>
    <div class="widget lazur-bg p-xl">
        <h2>
         <?php echo ($userInfo["truename"]); ?>的文章总数
     </h2>
     <center> <h1><?php echo ($articleCount); ?></h1></center>
     <!-- <a href="<?php echo U('Blog/index',array('id'=>$userInfo['id']));?>" target="_blank"><center><button type="button" class="btn btn-w-m btn-danger">查看他的主页</button></center></a> -->
 </div>
 <div class="widget yellow-bg p-lg text-left" style="padding-left:5px;padding-right:5px;">
    <center><h2>TA的最新文章</h2></center>
    <ul class="todo-list m-t ui-sortable" style="color:#000;">
        <?php if(is_array($zuixin)): foreach($zuixin as $key=>$vo): ?><li>
                <span class="m-l-xs"><a href="<?php echo U('Article/index',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo["title"],0,10,'utf-8',true)); ?></a></span>
            </li><?php endforeach; endif; ?>
    </ul>
</div>
<!-- 
<div class="widget red-bg p-lg text-center" style="padding:10px;margin-bottom:50px;">
    <div class="m-b-md" style="margin-bottom:15px;">
        <i class="fa fa-bell fa-4x"></i>
        <button type="button" class="btn btn-w-m btn-info" style="margin-top:15px;">给他私信（会员才可使用）</button>
    </div>
</div>
 -->

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
<script>
    function huifuss(a){
        $("#replay").val("回复"+a+"楼");
        $("#huifuyincang").val(a);
    }
    var num = 0;
    var id = $("#id").val();
    var userid = $("#userid").val();
    var now = 0;
    function replay(){
        $.ajax({
         type: "POST",
         url: "/ypicloud/Article/getReplay",
         data: "id="+id+"&num="+num,
         success: function(msg){
           if(msg == 5){
            $("#show").html('<i class="fa fa-arrow-down"></i>没有更多内容了');
        }else{
            msg = eval(msg);
            for (var i in msg)
            {
                now ++;
                if(msg[i].replay !=0){
                    msg[i].content = "<span class = 'label label-info' style = 'font-size:12px;'>回复"+msg[i].replay+"楼:</span><br/><br>"+msg[i].content;
                }
                if(msg[i].pic ==null){
                    var pic = '/ypicloud/Public/Uploads/default.png';
                }else{
                    var pic = "/ypicloud/Public/Uploads/"+msg[i].pic;
                }
                if(msg[i].uid == userid){
                    var shenfen = '<a class="btn btn-xs btn-white" href = "#huifus"onclick="huifuss('+now+')"><i class="fa fa-heart"></i> 回复 </a> <a class="btn btn-xs btn-danger"><i class="fa fa-pencil"></i> 楼主';
                }else if(msg[i].uid !=0 && msg[i].uid != userid){
                    var shenfen = '<a class="btn btn-xs btn-white" href = "#huifus" onclick="huifuss('+now+')"><i class="fa fa-heart"></i> 回复 </a> <a class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> 本站会员';
                }else{
                    var shenfen = '<a class="btn btn-xs btn-white" href = "#huifus" onclick="huifuss('+now+')"><i class="fa fa-heart"></i> 回复 </a> <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> 游客';
                }

                var tm = new Date(parseInt(msg[i].ctime) * 1000).toLocaleString().replace(/年|月/g, "-").replace(/日/g, " ");

                $("#pinglun").append('<div class="feed-element"><a href="#" class="pull-left"><img alt="image" class="img-circle" src="'+pic+'"></a><div class="media-body "><small class="pull-right" style ="font-size:12px;">'+now+'楼</small><strong style = "font-size:15px;">'+msg[i].name+'</strong><br><small class="text-muted">'+tm+'</small><div class="well" style = "font-size:14px;">'+msg[i].content+'</div><div class="pull-right">'+shenfen+'</a></div></div></div><hr />');
            }
            num = num+10;
        }
    }
});
}
replay();
</script>
<?php if($fenleiInfo["type"] == 4): ?><link href="/ypicloud/Public/licm/wenzixiaoguo/css/animate.css" rel="stylesheet">
    <script src="/ypicloud/Public/licm/wenzixiaoguo/js/jquery.lettering.js"></script>
    <script src="/ypicloud/Public/licm/wenzixiaoguo/js/jquery.textillate.js"></script>
    <script>
        $(function () {
            $('.text2').textillate({
                                            initialDelay: 1000,     //设置动画开始时间
                                            in: { effect: 'flipInX' //设置动画名称
                                        }
                                    });
        })
        $("#beijing").css("background","#242424");
        $("#beijing").css("color","#fff");
        $("#beijing").css("padding","10px");
    </script>
    <style type="text/css">
        .text1,.text2,.text3 {visibility:hidden;}
        .text2 {font-family:microsoft yahei;font-size:14px;line-height:24px;text-shadow:0.1em 0.1em 0.1em rgba(0, 0, 0, 0.8)}
    </style>
    <?php else: endif; ?>