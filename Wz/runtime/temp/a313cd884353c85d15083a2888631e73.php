<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:27:"Tpl/Home/attract\index.html";i:1516819577;s:52:"D:\wwwroot\zs_tlm45a\web\Tpl\Home\Common\header.html";i:1516822789;s:53:"D:\wwwroot\zs_tlm45a\web\Tpl\Home\Common\sidebar.html";i:1516883927;s:52:"D:\wwwroot\zs_tlm45a\web\Tpl\Home\Common\footer.html";i:1516887689;}*/ ?>
<!--
/**
 * @Statement: [ An Ordinary Person ]
 * @Author: Wz < 270988107@qq.com >
 * @Copyright: Wz 2017 All rights reserved.
 */
-->

<!-- 头部开始 -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>糯米淘客审核系统</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<link rel="stylesheet" type="text/css" href="/Fun/static/css/mdui.min.css" />
      	<link rel="stylesheet" type="text/css" href="/Fun/static/css/BaseWz.min.css" />
      	<link rel="stylesheet" type="text/css" href="/Fun/static/layui/css/layui.css" />
      <script type="text/javascript" src="/Fun/static/js/jquery.min.js"></script>
</head>
<body class="mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-accent-blue">

<!-- 导航开始 -->

<div class="mdui-appbar mdui-appbar-fixed wz-theme-nav">
  <div class="mdui-toolbar mdui-color-theme">
    <button class="mdui-btn mdui-btn-icon" mdui-drawer="{target: '#drawer'}"><i class="mdui-icon material-icons">menu</i></button>
    <a href="javascript:;" class="mdui-typo-headline mdui-ripple">糯米淘客审核系统</a>
    <div class="mdui-toolbar-spacer"></div>
    <div class="mdui-chip wz-nav-chip">
  <span class="mdui-chip-title wz-nav-user wz-user-left" style=""><?php echo session('admin.user'); ?></span>
</div>
 <a href="<?php echo url('index/login/logout'); ?>" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent">退出登录</a>
  </div>
</div>

<!-- 导航结束 -->



<!-- 头部结束 -->

<!-- 侧边栏开始 -->

<div class="mdui-drawer mdui-shadow-10" id="drawer">
  <ul class="mdui-list">
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('/'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe88a;</i>
      <div class="mdui-list-item-content">系统首页</div>
    </li>
    <?php if($AdminQuery['statu'] == 4): ?>
    <li class="mdui-subheader">招商专员</li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('attract/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe0ba;</i>
      <div class="mdui-list-item-content">招商录入</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('shoplist/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe85d;</i>
      <div class="mdui-list-item-content">商品管理</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('registration/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe916;</i>
      <div class="mdui-list-item-content">收款登记</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('financial/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe337;</i>
      <div class="mdui-list-item-content">收款核对</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('vendoruser/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe14f;</i>
      <div class="mdui-list-item-content">卖家信息管理</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('recycle/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe16c;</i>
      <div class="mdui-list-item-content">回收站</div>
    </li>
    <li class="mdui-subheader">上单专员</li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('singleshop/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe85d;</i>
      <div class="mdui-list-item-content">商品管理</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('recycle/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe16c;</i>
      <div class="mdui-list-item-content">回收站</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('statistics/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe85c;</i>
      <div class="mdui-list-item-content">绩效统计</div>
    </li>
    <li class="mdui-subheader">财务专员</li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('receicheck/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe916;</i>
      <div class="mdui-list-item-content">收款核对</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('statistics/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe85c;</i>
      <div class="mdui-list-item-content">绩效统计</div>
    </li>
    <li class="mdui-subheader">管理员菜单</li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('config/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe8b8;</i>
      <div class="mdui-list-item-content">系统设置</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('user/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe853;</i>
      <div class="mdui-list-item-content">用户管理</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('shopclass/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe06b;</i>
      <div class="mdui-list-item-content">类目管理</div>
    </li>

   <?php else: if($AdminQuery['statu'] == 1): ?>
    <li class="mdui-subheader">招商专员</li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('attract/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe0ba;</i>
      <div class="mdui-list-item-content">招商录入</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('shoplist/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe85d;</i>
      <div class="mdui-list-item-content">商品管理</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('registration/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe916;</i>
      <div class="mdui-list-item-content">收款登记</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('financial/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe337;</i>
      <div class="mdui-list-item-content">收款核对</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('vendoruser/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe14f;</i>
      <div class="mdui-list-item-content">卖家信息管理</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('recycle/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe16c;</i>
      <div class="mdui-list-item-content">回收站</div>
    </li>
    <?php endif; if($AdminQuery['statu'] == 2): ?>
    <li class="mdui-subheader">上单专员</li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('singleshop/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe85d;</i>
      <div class="mdui-list-item-content">商品管理</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('recycle/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe16c;</i>
      <div class="mdui-list-item-content">回收站</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('statistics/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe85c;</i>
      <div class="mdui-list-item-content">绩效统计</div>
    </li>
    <?php endif; if($AdminQuery['statu'] == 3): ?>
    <li class="mdui-subheader">财务专员</li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('receicheck/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe916;</i>
      <div class="mdui-list-item-content">收款核对</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('statistics/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe85c;</i>
      <div class="mdui-list-item-content">绩效统计</div>
    </li>
    <?php endif; if($AdminQuery['statu'] == 4): ?>
    <li class="mdui-subheader">管理员菜单</li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('config/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe8b8;</i>
      <div class="mdui-list-item-content">系统设置</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('user/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe853;</i>
      <div class="mdui-list-item-content">用户管理</div>
    </li>
    <li class="mdui-list-item mdui-ripple" onclick="window.location.href='<?php echo url('shopclass/index'); ?>'">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe06b;</i>
      <div class="mdui-list-item-content">类目管理</div>
    </li>
    <?php endif; endif; ?>
  </ul>
</div>

<!-- 侧边栏结束 -->
<div class="mdui-container-fluid wz-top-20 wz-left-10">
  <div class="wz-main">
    <div class="mdui-card wz-bottom-20">
    	<div class="wz-config">
    	      <form class="layui-form" method="post" id="form">
		<div class="layui-form-item">
		    <label class="layui-form-label">商品链接</label>
		    <div class="layui-input-block">
		      <input  name="url" id="input" class="layui-input" style="width: 90%;"><br>
		      <a id="url" class="layui-btn layui-btn-normal">查询宝贝</a>
		      <a id="d" class="layui-btn layui-btn-normal">打开链接</a>
		    </div>
		  </div>
		  <div id="noon" style="display: none;">
		<div class="layui-form-item">
		    <label class="layui-form-label">服务费单价</label>
		    <div class="layui-input-block">
		      <input  type="text" class="layui-input" name="fwf" style="width: 90%;" placeholder="请输入服务费 如：10">
		    </div>
		  </div>
		<div class="layui-form-item layui-form">
		    <label class="layui-form-label">商品类目</label>
		    <div class="layui-input-block" id="selTitleDiv" style="width: 59%;">
		      <select id="mySelect" name="class" style="display: none;">
		      <?php if(is_array($ShopClassList) || $ShopClassList instanceof \think\Collection || $ShopClassList instanceof \think\Paginator): $i = 0; $__LIST__ = $ShopClassList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$clas): $mod = ($i % 2 );++$i;?>
		        <option value="<?php echo $clas['name']; ?>"><?php echo $clas['name']; ?></option>
		        <?php endforeach; endif; else: echo "" ;endif; ?>
		      </select>
		    </div>
		  </div>
		<div class="layui-form-item">
		    <label class="layui-form-label">店铺名称</label>
		    <div class="layui-input-block">
		      <input  type="text" class="layui-input" name="shopname" id="shopname" style="width: 90%;">
		    </div>
		  </div>
		<div class="layui-form-item">
		    <label class="layui-form-label">联系QQ</label>
		    <div class="layui-input-block">
		      <input  type="text" class="layui-input" name="qq" id="shopname" style="width: 90%;" placeholder="请输入联系QQ">
		    </div>
		  </div>
		<div class="layui-form-item">
		    <label class="layui-form-label">商品标题</label>
		    <div class="layui-input-block">
		      <input  type="text" id="title" name="shoptitle" class="layui-input" style="width: 90%;" disabled>
		    </div>
		  </div>
		<div class="layui-form-item">
		    <label class="layui-form-label">商品短标题</label>
		    <div class="layui-input-block">
		      <input  type="text" name="shopmaxtitle" datatype='/.{5,16}/' placeholder="5-16字，输入精简优质的短标题" minlength="5" maxlength="16" class="layui-input" style="width: 90%;">
		    </div>
		  </div>
		  <div class="layui-form-item layui-form-text">
		    <label class="layui-form-label">推荐文案</label>
		    <div class="layui-input-block">
		      <textarea name="wenan" placeholder="20-150字文案，突出亮点，为什么值得买。不能有空格" minlength="20" maxlength="150" id="wenan" class="layui-textarea" style="width: 90%;"></textarea>
		    </div>
		  </div>
		<div class="layui-form-item">
		    <label class="layui-form-label">商品主图</label>
		    <div class="layui-input-block">
		      <input  type="text" name="shopimg"  id="img" class="layui-input" style="width: 90%;">
		    </div>
		  </div>
		<div class="layui-form-item">
		    <div class="layui-input-block">
		     <div id="div"></div>
		    </div>
		  </div>
		    <div class="layui-form-item layui-form-text">
		    <label class="layui-form-label">商品长图</label>
		    <a class="layui-btn layui-btn-normal" id="cimg" style="float: left;" width="100"><i class="layui-icon">&#xe67c;</i>上传长图</a>
		    <div class="layui-input-block" style="margin-left: 240px;">
		  <input type="text" name="changtu" value="" id="thu" placeholder="请上传商品长图" class="layui-input" style="position: absolute;left: -17px;top: 0;">
		  </div>
		  </div>
		<div class="layui-form-item">
		    <div class="layui-input-block">
		     <div id="cdiv"></div>
		    </div>
		  </div>
		<div class="layui-form-item">
		    <label class="layui-form-label">商品备注</label>
		    <div class="layui-input-block">
		      <input  type="text" class="layui-input" name="beizhu" style="width: 90%;" placeholder="请输入商品备注">
		    </div>
		  </div>
		  </div>
		  <div class="layui-form-item">
		    <label class="layui-form-label">优惠券链接</label>
		    <div class="layui-input-block">
		      <input type="text"  name="youhui" id="youhui" class="layui-input" style="width: 90%;" value=""><br>
		       <a id="yhj" class="layui-btn layui-btn-normal">查询优惠券</a>
		    </div>
		  </div>
		  <div id="yhjxs" style="display: none;">
		  <div class="layui-form-item">
		    <label class="layui-form-label">活动类型</label>
		    <div class="layui-input-block">
		      <input type="radio" name="huodong" value="普通活动" title="普通活动" checked>
		      <input type="radio" name="huodong" value="营销计划" title="营销计划">
		      <input type="radio" name="huodong" value="定向计划" title="定向计划">
		      <input type="radio" name="huodong" value="鹊桥活动" title="鹊桥活动">
		    </div>
		  </div>
		  <div class="layui-form-item">
		    <label class="layui-form-label">定向链接</label>
		    <div class="layui-input-block">
		      <input type="text"  name="dingxiang" id="youhui" placeholder="只有选定向计划才输入定向链接 如：http://pub.alimama.com/myunion.htm?xxxxxxxxxxxxx" class="layui-input txt" style="width: 90%;" value="">
		    </div>
		  </div>
		  <div class="layui-form-item">
		  <div class="layui-inline">
		    <label class="layui-form-label">佣金比率</label>
		    <div class="layui-input-inline" style="width: 100px;">
		      <input type="text" name="yongjin" id="bl" class="layui-input">
		    </div>
		    <div class="layui-form-mid">%</div>
		    <label class="layui-form-label">在售价 ￥</label>
		    <div class="layui-input-inline" style="width: 100px;">
		      <input type="text" name="shoujia" id="discountPrice" class="layui-input">
		    </div>
		    <div class="layui-form-mid">元</div>
		    <label class="layui-form-label">券后价 ￥</label>
		    <div class="layui-input-inline" style="width: 100px;">
		      <input type="text" name="houjia" id="coupons" class="layui-input">
		    </div>
		    <div class="layui-form-mid">元</div>
		    <label class="layui-form-label">券金额 ￥</label>
		    <div class="layui-input-inline" style="width: 100px;">
		      <input type="text" name="jine" id="amount" class="layui-input">
		    </div>
		    <div class="layui-form-mid">元</div>
		  </div>
		  </div>
		  <div class="layui-form-item">
		  <div class="layui-inline">
		    <label class="layui-form-label">满元可用</label>
		    <div class="layui-input-inline" style="width: 100px;">
		      <input type="text" name="many" id="fee" class="layui-input">
		    </div>
		    <div class="layui-form-mid">元</div>
		    <label class="layui-form-label">券总量</label>
		    <div class="layui-input-inline" style="width: 100px;">
		      <input type="text" name="zong"  id="zs" class="layui-input">
		    </div>
		    <div class="layui-form-mid">张</div>
		    <label class="layui-form-label">开始</label>
		    <div class="layui-input-inline" style="width: 150px;">
		      <input type="text" name="kstime" id="kstime" class="layui-input">
		    </div>
		    <label class="layui-form-label">结束</label>
		    <div class="layui-input-inline" style="width: 150px;">
		      <input type="text" name="jstime" id="jstime" class="layui-input">
		    </div>
		  </div>
		  </div>
		  </div>
		  <div class="layui-form-item">
		    <div class="layui-input-block">
		      <input type="hidden" name="userid" value="<?php echo session('admin.id'); ?>">
		      <input type="hidden" name="user" value="<?php echo session('admin.user'); ?>">
		      <input type="hidden" name="userstatu" value="<?php echo session('admin.statu'); ?>">
		      <input type="hidden" name='jjine' value="">
		      <input type="hidden" name='xiaoliang' value="">
		      <button class="layui-btn" lay-submit lay-filter="attract">立即发布</button>
		      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		  </div>
	     </form>
	</div>
    </div>

<!-- 底部开始 -->

<script type="text/javascript" src="/Fun/static/js/mdui.min.js"></script>
<script type="text/javascript" src="/Fun/static/layui/layui.js"></script> 
<script>
layui.use('laydate', function(){
  var laydate = layui.laydate;
  laydate.render({
    elem: '#time1'
    ,theme: 'molv'
    ,format: 'yyyy-MM-dd HH:mm:ss'
  });
  laydate.render({
    elem: '#time2'
    ,theme: 'molv'
    ,format: 'yyyy-MM-dd HH:mm:ss'
  });
  laydate.render({
    elem: '#time3'
    ,theme: 'molv'
    ,format: 'yyyy-MM-dd HH:mm:ss'
  });
  laydate.render({
    elem: '#time4'
    ,theme: 'molv'
    ,format: 'yyyy-MM-dd HH:mm:ss'
  });
  laydate.render({
    elem: '#time5'
    ,theme: 'molv'
    ,format: 'yyyy-MM-dd HH:mm:ss'
  });
      laydate.render({
    elem: '#time6'
    ,theme: 'molv'
    ,format: 'yyyy-MM-dd HH:mm:ss'
  });
});
</script>
<script type="text/javascript">
$(function(){
    $('.tdbj').click(function(){    
        if(!$(this).is('.input')){    
            $(this).addClass('input').html('<input type="text" class="layui-input" value="'+ $(this).text() +'" />').find('input').focus().blur(function(){    
                var thisid = $(this).parent().siblings("td:eq(0)").text();    
                var thisvalue=$(this).val();    
                var thisclass = $(this).parent().attr("class");      
                $.ajax({    
                  type: 'POST',    
                  url: '<?php echo url("notedatareception"); ?>',    
                  data: "thisid="+thisid+"&thisvalue="+thisvalue,
                  success: function(data)
                  {
                    layer.msg(data.msg, {time: 2000});
                  }
                });    
                $(this).parent().removeClass('input').html($(this).val() || 0);    
            });                        
        }    
    }).hover(function(){    
        $(this).addClass('hover');    
    },function(){    
        $(this).removeClass('hover');    
    });  
$('.wz').click(function(){   
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
$.ajax({    
      type: 'POST',    
      url: '<?php echo url("notedatareception"); ?>',    
      data: "id="+id,
      success: function(data)
      {
        layer.msg(data.msg, {time: 2000});
      }
    });      
 }); 
$('.reg').click(function(){   
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
$.ajax({    
      type: 'POST',    
      url: url,    
      data: "id="+id,
      success: function(data)
      {
        layer.msg(data.msg, {time: 3000}, function(){
          window.location.reload();
        });
      }
    });      
 }); 
$('.skbz').click(function(){    
        if(!$(this).is('.input')){    
            $(this).addClass('input').html('<input type="text" class="layui-input" value="'+ $(this).text() +'" />').find('input').focus().blur(function(){    
                var thisid = $(this).parent().siblings("td:eq(0)").text();    
                var thisvalue=$(this).val();    
                var thisclass = $(this).parent().attr("class");      
                $.ajax({    
                  type: 'POST',    
                  url: '<?php echo url("notedatareception"); ?>',    
                  data: "thisid="+thisid+"&thisvalue="+thisvalue,
                  success: function(data)
                  {
                    layer.msg(data.msg, {time: 2000});
                  }
                });    
                $(this).parent().removeClass('input').html($(this).val() || 0);    
            });                        
        }    
    }).hover(function(){    
        $(this).addClass('hover');    
    },function(){    
        $(this).removeClass('hover');    
    });  
$('.skbz').click(function(){    
        if(!$(this).is('.input')){    
            $(this).addClass('input').html('<input type="text" class="layui-input" value="'+ $(this).text() +'" />').find('input').focus().blur(function(){    
                var thisid = $(this).parent().siblings("td:eq(0)").text();    
                var thisvalue=$(this).val();    
                var thisclass = $(this).parent().attr("class");      
                $.ajax({    
                  type: 'POST',    
                  url: '<?php echo url("notedatareception"); ?>',    
                  data: "thisid="+thisid+"&thisvalue="+thisvalue,
                  success: function(data)
                  {
                    layer.msg(data.msg, {time: 2000});
                  }
                });    
                $(this).parent().removeClass('input').html($(this).val() || 0);    
            });                        
        }    
    }).hover(function(){    
        $(this).addClass('hover');    
    },function(){    
        $(this).removeClass('hover');    
    });  
$('.info').click(function(){    
        if(!$(this).is('.input')){    
            $(this).addClass('input').html('<input type="text" class="layui-input" value="'+ $(this).text() +'" />').find('input').focus().blur(function(){    
                var thisid = $(this).parent().siblings("td:eq(0)").text();    
                var thisvalue=$(this).val();    
                var thisclass = $(this).parent().attr("class");      
                $.ajax({    
                  type: 'POST',    
                  url: '<?php echo url("shopinfobeizhu"); ?>',    
                  data: "thisid="+thisid+"&thisvalue="+thisvalue,
                  success: function(data)
                  {
                    layer.msg(data.msg, {time: 2000});
                  }
                });    
                $(this).parent().removeClass('input').html($(this).val() || 0);    
            });                        
        }    
    }).hover(function(){    
        $(this).addClass('hover');    
    },function(){    
        $(this).removeClass('hover');    
    });  
}); 
$('.dj').click(function(){    
        if(!$(this).is('.input')){    
            $(this).addClass('input').html('<input type="text" class="layui-input" value="'+ $(this).text() +'" />').find('input').focus().blur(function(){    
                var thisid = $(this).parent().siblings("td:eq(0)").text();    
                var thisvalue=$(this).val();    
                var thisclass = $(this).parent().attr("class");      
                $.ajax({    
                  type: 'POST',    
                  url: '<?php echo url("shopusergrade"); ?>',    
                  data: "thisid="+thisid+"&thisvalue="+thisvalue,
                  success: function(data)
                  {
                    layer.msg(data.msg, {time: 2000});
                  }
                });    
                $(this).parent().removeClass('input').html($(this).val() || 0);    
            });                        
        }    
    }).hover(function(){    
        $(this).addClass('hover');    
    },function(){    
        $(this).removeClass('hover');    
    });  
$('.mjzf').click(function(){    
        if(!$(this).is('.input')){    
            $(this).addClass('input').html('<input type="text" class="layui-input" value="'+ $(this).text() +'" />').find('input').focus().blur(function(){    
                var thisid = $(this).parent().siblings("td:eq(0)").text();    
                var thisvalue=$(this).val();    
                var thisclass = $(this).parent().attr("class");      
                $.ajax({    
                  type: 'POST',    
                  url: '<?php echo url("receivablesmjzf"); ?>',    
                  data: "thisid="+thisid+"&thisvalue="+thisvalue,
                  success: function(data)
                  {
                    layer.msg(data.msg, {time: 2000});
                  }
                });    
                $(this).parent().removeClass('input').html($(this).val() || 0);    
            });                        
        }    
    }).hover(function(){    
        $(this).addClass('hover');    
    },function(){    
        $(this).removeClass('hover');    
    });  
</script>
<script>
  $("#d").click(function(){
window.open(document.getElementById("input").value);
});
</script>
<script>
//Demo
layui.use('form', function(){
  var form = layui.form;
form.on('submit(attract)', function(data){
    $.post("<?php echo url('submissionaudit'); ?>",data.field,function(data){
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
form.on('submit(submit)', function(data){
  var url = $(this).attr('data-url');
    $.post(url,data.field,function(data){
      if(data.code == 1){
        layer.msg(data.msg, {time: 3000}, function(){
          window.location.reload();
        });
      }else{
        layer.msg(data.msg, {time: 2000});
      }
    });
    return false;
  });
form.on('submit(editsubmit)', function(data){
    $.post("<?php echo url('edit'); ?>",data.field,function(data){
      if(data.code == 1){
        layer.msg(data.msg, {time: 3000}, function(){
          location.href = '/index/shoplist/index';
        });
      }else{
        layer.msg(data.msg, {time: 2000});
      }
    });
    return false;
  });
$("#url").click(function(){
        $.ajax({
          type: "post",
          url: "<?php echo url('index/api/goods'); ?>",
          data: {link:$('input[name="url"]').val()},
           success: function(data)
           {  
            var Json = JSON.parse(data);
            if (Json.code == 0) {
              layer.msg("商品已存在", {time: 2000});
            }
            var i= document.getElementById("input");
            if (i.value=="")
            {
             layer.msg("请输入商品宝贝链接", {time: 2000});
             return false;
            }
            // if (Json.data.commission_type_name == null) {
            //  layer.msg("请输入正确的商品宝贝链接", {time: 2000});
            //  return false;
            //  }
             var noon = document.getElementById("noon");
             noon.style.display="block";
             $('#title').val(''+ Json.data.goods_name +'');
             $("#wenan").val(''+ Json.data.quan_guid_content +'');
             $("#coupons").val(''+ Json.data.price_after_coupons +'');
             $("#zs").val(''+ Json.data.quan_zong +'');
             $("input[name='jjine']").val(''+ Json.data.price_coupons +'');
             $("input[name='xiaoliang']").val(''+ Json.data.sales +'');
             $("#bl").val(''+ Json.data.rate +'');
             $('#img').val(''+ Json.data.pic +'');
             var img = document.createElement("img");
             img.src=''+Json.data.pic + '';
             img.width="100";
             img.height="100";
             var div = document.getElementById('div');
             div.appendChild(img);
           }
    });
    });

      $("#yhj").click(function(){
        $.ajax({
          type: "post",
          url: "<?php echo url('index/api/coupon'); ?>",
          data: {"youhui":$('input[name="youhui"]').val(),"link":$('input[name="url"]').val()},
           success: function(data)
           {  
            var Json1 = JSON.parse(data);
            var youhui= document.getElementById("youhui");
            if (youhui.value=="")
            {
             layer.msg("请输入优惠券链接", {time: 2000});
             return false;
            }
            // if (Json1.result.startFee == null) {
            //  layer.msg("优惠券店铺名和宝贝店铺名不相符", {time: 2000});
            //  return false;
            // }
            if (noon.style.display == "none") {
             layer.msg("请先查询宝贝再查询优惠券", {time: 2000});
             return false;
             }
             var yhjxs = document.getElementById("yhjxs");
             yhjxs.style.display="block";
             $('#discountPrice').val(''+ Json1.result.item.discountPrice +'');
             $('#amount').val(''+ Json1.result.amount +'');
             $('#fee').val(''+ Json1.result.startFee +'');
             $('#shopname').val(''+ Json1.result.shopName +'');
             $('#kstime').val(''+ Json1.result.effectiveStartTime +'');
             $('#jstime').val(''+ Json1.result.effectiveEndTime +'');
           }
    });
    });
 $("#xud").click(function(){
        $.ajax({
          type: "post",
          url: "<?php echo url('index/api/coupon'); ?>",
          data: {"youhui":$('input[name="youhui"]').val(),"link":$('input[name="url"]').val()},
           success: function(data)
           {  
            var Json1 = JSON.parse(data);
            var youhui= document.getElementById("youhui");
            if (youhui.value=="")
            {
             layer.msg("请输入优惠券链接", {time: 2000});
             return false;
            }
            if (Json1.result.startFee == null) {
             layer.msg("优惠券店铺名和宝贝店铺名不相符", {time: 2000});
             return false;
            }
            if (noon.style.display == "none") {
             layer.msg("请先查询宝贝再查询优惠券", {time: 2000});
             return false;
             }

             $('#discountPrice').val(''+ Json1.result.item.discountPrice +'');
             $('#amount').val(''+ Json1.result.amount +'');
             $('#fee').val(''+ Json1.result.startFee +'');
             $('#shopname').val(''+ Json1.result.shopName +'');
             $('#kstime').val(''+ Json1.result.effectiveStartTime +'');
             $('#jstime').val(''+ Json1.result.effectiveEndTime +'');
           }
    });
    });
});
</script>
<script>
layui.use(['upload','jquery'],function(){
var $ = layui.jquery;
var upload = layui.upload;
var uploadInst = upload.render({ 
elem: '#cimg',
dataType: 'json',
url: '<?php echo url('upload'); ?>',
ext: 'jpg|png|bmp|jpeg',
before: function(obj){
obj.preview(function(index, file, result){
    $('#preview').attr('value',result);
});
},
done:function(res){
console.log(res);
if (res.code == 0){
      return layer.msg(res.message);
}
$('#thu').val(res.filepath);
var img = document.createElement("img");
img.src=''+res.filepath+ '';
img.width="100";
img.height="100";
var div = document.getElementById('cdiv');
div.appendChild(img);
}
});
});
</script>
</body>
</html>

<!-- 底部结束 -->