<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:28:"Tpl/Home/register\index.html";i:1516891055;}*/ ?>
<!--
 
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户注册 - 糯米淘客审核系统</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="/Fun/static/css/mdui.min.css" />
	<link rel="stylesheet" type="text/css" href="/Fun/static/css/login.css" />

</head>
<body>

<!-- 注册开始 -->

    <div class="login-container">
    	<?php if($InfoReg['in'] == 1): ?>
	<h2>用户注册</h2>
	<form class="layui-form">
		<div class="login-input">
			<input type="text" placeholder="用户名" name="user">
		</div>
		<div class="login-input">
			<input type="email" placeholder="真实姓名" name="name">
		</div>
		<div class="login-input">
			<input type="password" placeholder="密码" name="pass">
		</div>
		<div class="login-input">
			<input type="password" placeholder="确认密码" name="ispass">
		</div>
		<button lay-submit="" lay-filter="register">注册</button>
		<div style="position: relative; margin-top: 20px;">
			<a href="<?php echo url('/index/login'); ?>" style="float: left;">已有账户，马上登录</a>
		</div>
	</form>
	<?php else: ?>
	<h2>用户注册已关闭</h2>
	<?php endif; ?>
</div>

<!-- 注册结束 -->

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
  form.on('submit(register)', function(data){
    $.post("<?php echo url('/index/register'); ?>",data.field,function(data){
      if(data.code == 1){
        layer.msg(data.msg, {time: 3000}, function(){
          location.href = "<?php echo url('/index/login'); ?>";
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