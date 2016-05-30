<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>表单页面</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
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
</head>
<body>


<div class="header">
  <div class="am-g">
    <h1>查询中心</h1>
    <p>后期还会添加功能，例如查课表、考试时间等<br />期待小伙伴们多多提建议，联系邮箱：787864651@qq.com</p>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <form method="post" class="am-form">
      <label for="email">姓名:</label>
      <input type="email" name="" id="email" value="">
      <br>
      <label for="password">学号:</label>
      <input type="password" name="" id="password" value="">
      <br>
      
      <div class="am-u-sm-9 am-u-sm-push-5">
        <input type="submit" name="" value="登 录" class="am-btn am-btn-primary ">
        <!-- <input type="submit" name="" value="忘记密码 ^_^? " class="am-btn am-btn-default am-btn-sm am-fr"> -->
      </div>
    </form>
  </div>
</div>


</body>
</html>