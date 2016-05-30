<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
  <link rel="stylesheet" type="text/css" href="/ypicloud/Public/css/amazeuimin.css" />
  <link rel="stylesheet" type="text/css" href="/ypicloud/Public/css/admin.css" />
</head>
<body>
asd
<!-- 
	<?php if(is_array($gradedata)): $i = 0; $__LIST__ = $gradedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data['course_name']); ?>-----<?php echo ($data['grade']); ?><br /><?php endforeach; endif; else: echo "" ;endif; ?>
	

  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-g">
      </div>
      <div class="am-g">
        <div class="am-u-md-6">
        
          <div class="am-panel am-panel-default">
            <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-1'}">文件上传<span class="am-icon-chevron-down am-fr" ></span></div>
            <div class="am-panel-bd am-collapse am-in" id="collapse-panel-1">
              <?php if(is_array($gradedata)): $i = 0; $__LIST__ = $gradedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data['course_name']); ?>-----<?php echo ($data['grade']); ?><br /><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
          </div>
          
          <div class="am-panel am-panel-default">
            <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-2'}">浏览器统计<span class="am-icon-chevron-down am-fr" ></span></div>
            <div id="collapse-panel-2" class="am-panel-bd am-collapse am-in">
              95
            </div>
          </div>
          
          <div class="am-panel am-panel-default">
            <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-4'}">任务 task<span class="am-icon-chevron-down am-fr" ></span></div>
            <div id="collapse-panel-4" class="am-panel-bd am-collapse am-in">
              94
            </div>
          </div>
        </div>
      </div>
    </div>

</div>




<script type="text/javascript" src="/ypicloud/Public/Js/jquerymin.js"></script>

<script type="text/javascript" src="/ypicloud/Public/Js/amazeuimin.js"></script>
<script type="text/javascript" src="/ypicloud/Public/Js/app.js"></script> -->
</body>
</html>