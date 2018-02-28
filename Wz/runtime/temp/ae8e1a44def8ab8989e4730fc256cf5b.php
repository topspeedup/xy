<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:25:"Tpl/Home/login\index.html";i:1516891055;}*/ ?>
<!--
 
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户登录 - 糯米淘客审核系统</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="/Fun/static/css/mdui.min.css" />
	<link rel="stylesheet" type="text/css" href="/Fun/static/css/login.css" />
</head>
<body>

<!-- 登录开始 -->

  <div class="login-container">
	<h2>用户登录</h2>
	<form class="layui-form">
		<div class="login-input">
			<input type="text" placeholder="用户名" name="user">
		</div>
		<div class="login-input">
			<input type="password" placeholder="密码" name="pass">
		</div>
		<button lay-submit="" lay-filter="checklogin">登录</button>
		<div style="position: relative; margin-top: 20px;">
			<a href="<?php echo url('/index/register'); ?>" style="float: left;">还没有账户，马上注册</a>
		</div>
	</form>
</div>

<!-- 登录结束 -->

<!-- 走马图开始 -->

<div id="supersized"></div>

<!-- 走马图结束 -->

<script type="text/javascript" src="/Fun/static/js/jquery.min.js"></script>
<script type="text/javascript" src="/Fun/static/js/supersized.js"></script>
<script type="text/javascript" src="/Fun/static/js/supersized.3.2.7.min.js"></script>
<script type="text/javascript" src="/Fun/static/layui/layui.js"></script>
<script>  
 layui.use('form',function(){
  var form = layui.form;
  var $ = layui.jquery;
  form.on('submit(checklogin)', function(data){
    $.post("<?php echo url('/index/login'); ?>",data.field,function(data){
      if(data.code == 1){
        layer.msg(data.msg, {time: 3000}, function(){
          location.href = '/index.html';
        });
      }else{
        layer.msg(data.msg, {time: 2000});
      }
    });
    return false;
  });
})
</script>  
</body>
</html>