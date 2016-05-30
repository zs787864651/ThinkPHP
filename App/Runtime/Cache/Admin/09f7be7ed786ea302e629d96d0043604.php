<?php if (!defined('THINK_PATH')) exit();?>
  <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>里程密-网站配置</title>
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
                    <h2>网站配置</h2>
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
                            <form method="post" class="form-horizontal" action="<?php echo U('Site/doedit',array('id'=>$arr['id']));?>" enctype="multipart/form-data">
                                <div class="form-group has-success"><label class="col-sm-4 control-label">网站标题</label>

                                    <div class="col-sm-8"><input type="text" class="form-control" name="title" required value = "<?php echo ($arr["title"]); ?>"></div>
                                </div>
                                <div class="form-group has-success"><label class="col-sm-4 control-label">网站名称</label>

                                    <div class="col-sm-8"><input type="text" class="form-control" name="name" required value = "<?php echo ($arr["name"]); ?>"></div>
                                </div>
                                <div class="form-group has-success"><label class="col-sm-4 control-label">LOGO下方小标题</label>

                                    <div class="col-sm-8"><input type="text" class="form-control" name="set_content" required value = "<?php echo ($arr["set_content"]); ?>"></div>
                                </div>
                                <div class="form-group has-success"><label class="col-sm-4 control-label">管理员邮箱</label>

                                    <div class="col-sm-8"><input type="text" class="form-control" name="admin_email" required value = "<?php echo ($arr["admin_email"]); ?>"></div>
                                </div>
                                <div class="form-group has-success"><label class="col-sm-4 control-label">网站关键字</label>
                                    <div class="col-sm-8"><textarea name = "keywords" required class="form-control"><?php echo ($arr["keywords"]); ?></textarea></div>
                                </div>
                                <div class="form-group has-success"><label class="col-sm-4 control-label">网站描述</label>
                                    <div class="col-sm-8"><textarea name = "description" required class="form-control"><?php echo ($arr["description"]); ?></textarea></div>
                                </div>
                                <div class="form-group has-success"><label class="col-sm-4 control-label">网站统计代码</label>
                                    <div class="col-sm-8"><textarea name = "statistics" required class="form-control"><?php echo ($arr["statistics"]); ?></textarea></div>
                                </div>
                                <div class="form-group has-success"><label class="col-sm-4 control-label">邀请码说明</label>
                                    <div class="col-sm-8"><textarea name = "code" required class="form-control"><?php echo ($arr["code"]); ?></textarea></div>
                                </div>
                                <div class="form-group has-success"><label class="col-sm-4 control-label">友情链接说明</label>
                                    <div class="col-sm-8"><textarea name = "friend_link" required class="form-control"><?php echo ($arr["friend_link"]); ?></textarea></div>
                                </div>
                                <div class="form-group has-success"><label class="col-sm-4 control-label">网站LOGO</label>
                                    <div class="col-sm-3"><input type="file" name="logo"></div>
                                </div>
                                     <div class="hr-line-dashed"></div>
                                <div class="form-group has-success"><label class="col-sm-4 control-label">注册是否需要注册码</label>
                                    <div class="col-sm-3">
                                        <select name="userStatus">
                                            <option value="0" <?php if($arr["userstatus"] == 0): ?>selected<?php endif; ?>>不需要</option>
                                            <option value="1" <?php if($arr["userstatus"] == 1): ?>selected<?php endif; ?>>需要</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group has-success"><label class="col-sm-4 control-label">发表文章是否需要审核</label>
                                    <div class="col-sm-3">
                                        <select name="articleSatus">
                                            <option value="0" <?php if($arr["articlesatus"] == 0): ?>selected<?php endif; ?>>不需要</option>
                                            <option value="1" <?php if($arr["articlesatus"] == 1): ?>selected<?php endif; ?>>需要</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                               <div class="ibox-content">
                            <div class="text-center">
                            <input type="submit" value="保存" class="btn btn-primary" data-toggle="modal">
                            </div>

                    </div>
                            </form>
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