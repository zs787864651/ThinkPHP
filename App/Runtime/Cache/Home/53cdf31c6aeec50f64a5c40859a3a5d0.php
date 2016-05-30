<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>查询结果</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" type="text/css" href="/ypicloud/Public/css/amazeuimin.css" />
<link rel="stylesheet" type="text/css" href="/ypicloud/Public/css/admin.css" />
</head>
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
<body am-scrollable-vertical>

<div class="header">
  <div class="am-g">
    <h1>查询结果</h1>
    <hr />
  </div>
</div>

	<div class="admin-content">
		<div class="admin-content-body">
			<div class="am-g">
				<div class="am-u-md-6 am-u-md-8 am-u-sm-centered">
					<div class="am-panel am-panel-default">
						<div class="am-panel-hd am-cf"
							data-am-collapse="{target: '#collapse-panel-1'}">
							期末成绩<span class="am-icon-chevron-down am-fr"></span>
						</div>
						<div class="am-panel-bd am-collapse am-in" id="collapse-panel-1">
						
						
						
						



						
						
						
							<!-- 表格开始 -->
							<div class="am-g">
								<div class="am-u-sm-12 am-u-lg-10 am-u-md-12 am-u-sm-centered">
									<form class="am-form">
										<table
											class="am-table am-table-striped am-table-hover table-main">

											<thead>
												<tr>
													<th class="table-title am-hide-sm-only">院系</th>
													<th class="table-title am-hide-sm-only">班级</th>
													<th class="table-title am-hide-sm-only">姓名</th>
													<th class="table-title">课程名</th>
													<th class="table-id">分数</th>
												</tr>
											</thead>

											<tbody>
												<?php if(is_array($gradedata)): $i = 0; $__LIST__ = $gradedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
												
												<?php if($data['grade'] > 89): ?><td class="am-hide-sm-only am-text-success"><?php echo ($data['ypi_code']); ?></td>
													<td class="am-hide-sm-only am-text-success"><?php echo ($data['class']); ?></td>
													<td class="am-hide-sm-only am-text-success"><?php echo ($data['name']); ?></td>
													<td class="am-text-success"><?php echo ($data['course_name']); ?></td>
													<td class="am-text-success"><?php echo ($data['grade']); ?></td>
													
													<?php elseif($data['grade'] > 69): ?> 
													
													<td class="am-hide-sm-only am-text-secondary"><?php echo ($data['ypi_code']); ?></td>
													<td class="am-hide-sm-only am-text-secondary"><?php echo ($data['class']); ?></td>
													<td class="am-hide-sm-only am-text-secondary"><?php echo ($data['name']); ?></td>
													<td class="am-text-secondary"><?php echo ($data['course_name']); ?></td>
													<td class="am-text-secondary"><?php echo ($data['grade']); ?></td>
													
													<?php else: ?>
													
													<td class="am-hide-sm-only am-text-danger"><?php echo ($data['ypi_code']); ?></td>
													<td class="am-hide-sm-only am-text-danger"><?php echo ($data['class']); ?></td>
													<td class="am-hide-sm-only am-text-danger"><?php echo ($data['name']); ?></td>
													<td class="am-text-danger"><?php echo ($data['course_name']); ?></td>
													<td class="am-text-danger"><?php echo ($data['grade']); ?></td><?php endif; ?>
												
												
												</tr><?php endforeach; endif; else: echo "" ;endif; ?>
											</tbody>
										</table>
									</form>
								</div>
							</div>
							<!-- 表格结束 -->
							
							
							
							






							  
							  
						</div>
					</div>


					<!-- 
          <div class="am-panel am-panel-default">
            <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-2'}">课程表<span class="am-icon-chevron-down am-fr" ></span></div>
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
      -->
				</div>
			</div>
		</div>
	</div>




	<script type="text/javascript" src="/ypicloud/Public/js/jquerymin.js"></script>
	<script type="text/javascript" src="/ypicloud/Public/js/amazeuimin.js"></script>
	<script type="text/javascript" src="/ypicloud/Public/js/app.js"></script>
</body>
</html>