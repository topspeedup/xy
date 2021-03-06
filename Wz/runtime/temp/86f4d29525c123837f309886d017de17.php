<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:25:"Tpl/Home/index\index.html";i:1516540351;s:52:"D:\wwwroot\zs_tlm45a\web\Tpl\Home\Common\header.html";i:1516822789;s:53:"D:\wwwroot\zs_tlm45a\web\Tpl\Home\Common\sidebar.html";i:1516883927;s:52:"D:\wwwroot\zs_tlm45a\web\Tpl\Home\Common\footer.html";i:1516887689;}*/ ?>
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
    	   211
	</div>
    </div>
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