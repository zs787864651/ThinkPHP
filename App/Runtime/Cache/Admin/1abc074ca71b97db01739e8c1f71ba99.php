<?php if (!defined('THINK_PATH')) exit();?>
  <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>里程密-URL模式設置</title>
    <link href="/ypicloud/Public/licm/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ypicloud/Public/licm/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/ypicloud/Public/licm/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/ypicloud/Public/licm/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="/ypicloud/Public/licm/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="/ypicloud/Public/licm/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/ypicloud/Public/licm/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/ypicloud/Public/licm/css/animate.css" rel="stylesheet">
    <link href="/ypicloud/Public/licm/css/style.css" rel="stylesheet">

</head>
<style>
    th{
        text-align: center;
    }
    td{
        text-align: center;
    }
</style>
<body>
    <div id="wrapper">

        <!-- start left -->

      <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">扬工-云光</strong>
                             </span> <span class="text-muted text-xs block">超级管理员<b class="caret"></b> </a>
                        </div>
                    </li>
                    <li class="active">
                <a href="<?php echo U('Index/index');?>"><i class="fa fa-diamond"></i> <span class="nav-label">后台首页</span></a>
            </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">网站设置</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="<?php echo U('Site/index');?>">网站管理</a></li>
                            <li ><a href="<?php echo U('Email/index');?>">网站邮件设置</a></li>
                            <li ><a href="<?php echo U('Site/url');?>">URL模式设置</a></li>
                            <li ><a href="<?php echo U('Adminer/index');?>">管理员修改</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">网站分类管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Fenlei/index');?>">查看分类</a></li>
                            <li ><a href="<?php echo U('Fenlei/add');?>">添加分类</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">首页幻灯片管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Slides/index');?>">查看幻灯片</a></li>
                            <li ><a href="<?php echo U('Slides/add');?>">添加幻灯片</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">网站邀请码管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a  href="<?php echo U('Yaoqing/index');?>">查看邀请码</a></li>
                            <li ><a href="<?php echo U('Yaoqing/add');?>">添加邀请码</a></li>
                            <li ><a href="<?php echo U('Yaoqing/production');?>">生成邀请码</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">网站公告</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a  href="<?php echo U('Gonggao/index');?>">查看公告</a></li>
                            <li ><a href="<?php echo U('Gonggao/add');?>">添加公告</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">文章管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Article/index');?>">查看文章</a></li>
                            <li><a href="<?php echo U('Article/recovery');?>">文章回收站</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">会员管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('User/index');?>">会员查看</a></li>
                            <li><a href="<?php echo U('User/recovery');?>">会员回收站</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">留言管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Liuyan/index');?>">留言查看</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">网站维护</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Maintain/index');?>">缓存清理</a></li>
                            <li><a href="<?php echo U('Maintain/dataBackups');?>">备份还原数据库</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">友情链接</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Friendlink/index');?>">查看友链</a></li>
                            <li><a href="<?php echo U('Friendlink/add');?>">添加友链</a></li>
                        </ul>
                    </li>
                <li>
                    <a href="<?php echo U('Login/logout');?>">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>

         <!-- end left -->
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>URL模式設置</h2>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                   <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <!-- <h5>All form elements <small>With custom checbox and radion elements.</small></h5> -->
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                        <div class="hr-line-dashed"></div>
                            <form method="post" class="form-horizontal" action="<?php echo U('Site/dourl');?>" enctype="multipart/form-data">
                                <div class="form-group has-success"><label class="col-sm-4 control-label">当前URL模式</label>
                                    <div class="col-sm-3">
                                            <select name="type" class="form-control">
                                                <option value="0" <?php if($urlSite == '0'): ?>selected<?php endif; ?>>普通模式</option>
                                                <option value="1" <?php if($urlSite == '1'): ?>selected<?php endif; ?>>PATHINFO模式</option>
                                                <option value="2" <?php if($urlSite == '2'): ?>selected<?php endif; ?>>REWRITE模式</option>
                                                <option value="3" <?php if($urlSite == '3'): ?>selected<?php endif; ?>>兼容模式</option>
                                            </select>
                                    </div>
                                </div>
                                <center>
                                <div style= "color:red">修改方法：修改\Application\Common\Conf\config.php里面的URL_MODEL参数</div>
                                </center>
                                <br>
                                <div class="col-lg-3">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            普通模式
                                        </div>
                                        <div class="panel-body">
                                            <p>普通模式也就是传统的GET传参方式来指定当前访问的模块和操作，例如： http://localhost/?m=home&c=user&a=login&var=value</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            PATHINFO模式
                                        </div>
                                        <div class="panel-body">
                                            <p>PATHINFO模式是系统的默认URL模式，提供了最好的SEO支持，系统内部已经做了环境的兼容处理，所以能够支持大多数的主机环境。对应上面的URL模式，PATHINFO模式下面的URL访问地址是： http://localhost/index.php/home/user/login/var/value/</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            REWRITE模式
                                        </div>
                                        <div class="panel-body">
                                            <p>REWRITE模式是在PATHINFO模式的基础上添加了重写规则的支持，可以去掉URL地址里面的入口文件index.php，但是需要额外配置WEB服务器的重写规则。

如果是Apache则需要在入口文件的同级添加.htaccess文件，内容如下：

    <IfModule mod_rewrite.c>
     RewriteEngine on
     RewriteCond %{REQUEST_FILENAME} !-d
     RewriteCond %{REQUEST_FILENAME} !-f
     RewriteRule ^(.*)$ index.php/$1 [QSA,PT,L]
    </IfModule>

接下来，就可以用下面的URL地址访问了： http://localhost/home/user/login/var/value</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">
                                            兼容模式
                                        </div>
                                        <div class="panel-body">
                                            <p>兼容模式是用于不支持PATHINFO的特殊环境，URL地址是： http://localhost/?s=/home/user/login/var/value</p>
                                        </div>
                                    </div>
                                </div>
                               <div class="ibox-content">
                            <div class="text-center">
                            </div>

                    </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <!-- start footer -->
                    
<div class="footer">
    <div class="pull-right">
        <a href="http://localhost/ypicloud/index.php">扬工云-云校园系统</a>
    </div>
    <div>
        <strong>请谨慎操作</strong>有任何问题，请反馈：787864651@qq.com &copy; 2016
    </div>
</div>
</div>
<script type="text/javascript">
    function shifou(){
        if(confirm("年轻人，你真的想好了吗？")){
            return true;
        }else{
            return false;
        }
    }
</script>
</body>
</html>
           <!-- Mainly scripts -->
    <script src="/ypicloud/Public/licm/js/jquery-2.1.1.js"></script>
    <script src="/ypicloud/Public/licm/js/inspinia.js"></script>
    <script src="/ypicloud/Public/licm/js/bootstrap.min.js"></script>
    <script src="/ypicloud/Public/licm/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/ypicloud/Public/licm/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/ypicloud/Public/licm/js/plugins/flot/jquery.flot.js"></script>
    <script src="/ypicloud/Public/licm/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/ypicloud/Public/licm/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/ypicloud/Public/licm/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/ypicloud/Public/licm/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="/ypicloud/Public/licm/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/ypicloud/Public/licm/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->

    <script src="/ypicloud/Public/licm/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/ypicloud/Public/licm/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="/ypicloud/Public/licm/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="/ypicloud/Public/licm/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="/ypicloud/Public/licm/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="/ypicloud/Public/licm/js/plugins/chartJs/Chart.min.js"></script>
<script>
        var s_url=window.location.pathname;
        var now_url = '';
        for(var i = 0;i<$("#side-menu li").length;i++){
            now_url=$("#side-menu li a").eq(i).attr("href");
            if(now_url == s_url){
                $("#side-menu a").eq(i).parent().addClass("active");
                $("#side-menu a").eq(i).parent().parent().parent().addClass("active");
                $("#side-menu a").eq(i).parent().parent().addClass("in");
            }else{
                $("#side-menu a").eq(i).parent().removeClass("active");
            }
        }
        </script>
    <!-- Toastr -->

            <!-- end footer -->
        </div>