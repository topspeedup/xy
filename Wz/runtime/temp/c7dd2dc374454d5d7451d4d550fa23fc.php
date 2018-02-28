<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:28:"Tpl/Home/shoplist\index.html";i:1516820438;s:52:"D:\wwwroot\zs_tlm45a\web\Tpl\Home\Common\header.html";i:1516822789;s:53:"D:\wwwroot\zs_tlm45a\web\Tpl\Home\Common\sidebar.html";i:1516883927;s:52:"D:\wwwroot\zs_tlm45a\web\Tpl\Home\Common\footer.html";i:1516887689;}*/ ?>
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
    	<div class="wz-config" style="padding: 0 20px;">

    	<!-- 商品管理列表开始 -->
    	<form class="layui-form" action="" method="post">
	<div class="layui-form-item">
	  <div class="layui-inline">
	    <div class="layui-form-mid" style="padding: 0px 0!important;margin-left: 0;"><input type="text" name="dp" placeholder="请输入店铺信息" autocomplete="off" class="layui-input"></div>
	    <div class="layui-input-inline" style="width: 100px;">
	      <button class="layui-btn layui-btn-normal" style="margin-left: -10px;">搜索店铺信息</button>
	    </div>
	    <div class="layui-input-inline" style="width: 450px;margin-left: 20px;">
	      <input type="text" name="url" placeholder="链接形式为：http://item.taobao.com/item.htm?id=xxxxxxxxxxx" autocomplete="off" class="layui-input">
	    </div>
	    <div class="layui-form-mid" style="padding: 0px 0!important;margin-left: -10px;"><button class="layui-btn layui-btn-normal">搜索宝贝</button></div>
	  </div>
	</div>
	</form>
	<table class="layui-table">
	  <colgroup>
	    <col width="70">
	    <col width="150">
	    <col width="120">
	    <col width="80">
	    <col width="120">
	    <col width="100">
	    <col width="120">
	    <col width="160">
	    <col width="100">
	    <col width="120">
	    <col width="200">
	    <col width="100">
	  </colgroup>
	  <thead>
	    <tr>
	      <th>ID</th>
	      <th>商品</th>
	      <th>商品信息</th>
	      <th>服务费</th>
	      <th>券后价/原价</th>
	      <th>佣金</th>
	      <th>优惠券</th>
	      <th>文案</th>
	      <th>时间</th>
	       <th>商品备注</th>
	      <th>上单状态</th>
	      <th>操作</th>
	    </tr> 
	  </thead>
	  <tbody>
	  <?php if(is_array($ShopUserList) || $ShopUserList instanceof \think\Collection || $ShopUserList instanceof \think\Paginator): $i = 0; $__LIST__ = $ShopUserList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	    <tr>
	      <td><?php echo $vo['id']; ?></td>
	      <td><span style="color: #ff6e40;">ID:<?php echo getQuerystr($vo['url'],'id'); ?></span><br><img src="<?php echo $vo['shopimg']; ?>" width="60" height="60" style="margin-left: 30px;"><br><span mdui-tooltip="{content: '<?php echo $vo['shoptitle']; ?>',position: 'top'}"><a href="<?php echo $vo['url']; ?>" target="_blank"><?php echo $vo['shoptitle']; ?></a></span></td>
	      <td ><img src="http://gtms01.alicdn.com/tps/i1/TB1aJazGXXXXXXzXXXXEDhGGXXX-32-32.png" width="18" height="18"> <label style="font-size: 16px;">店铺名称</label><br><span class="layui-badge" style="background-color: #18bc9c!important;width: 100%;"><?php echo $vo['shopname']; ?></span></td>
	      <td class="mdui-text-truncate" style="max-width: 100px;color: #00cc99;">￥<?php echo $vo['fwf']; ?> 元</td>
	      <td style="color: red;">￥<?php echo $vo['houjia']; ?> / <span style=" text-decoration: line-through;font-weight: normal;color: #999;">￥<?php echo $vo['shoujia']; ?></span><br><span style="color: #000;">月销量：<?php echo $vo['xiaoliang']; ?></span></td>
	      <td><span style="color: #ff4081;"><?php echo $vo['yongjin']; ?>%</span><br><span class="layui-badge" style="background-color: #18bc9c!important;"><?php echo $vo['huodong']; ?></span></td>
	      <td style="color: #00cc99;">￥<?php echo $vo['jjine']; ?> 元</td>
	      <td mdui-tooltip="{content: '<?php echo $vo['wenan']; ?>',position: 'top'}"><?php echo $vo['wenan']; ?></td>
	      <td>开始时间：<br><span style="color: #ff6e40;"><?php echo date("Y-m-d",strtotime($vo['kstime'])); ?></span><br>结束时间：<br><span style="color: #ff6e40;"><?php echo date("Y-m-d",strtotime($vo['jstime'])); ?></span></td>
	      <td class="tdbj"><?php echo $vo['beizhu']; ?></td>
	      <td><?php if($vo['da']): ?><span class="layui-badge " style="background-color: #18bc9c!important;">大发布：<?php echo $vo['da']; if($vo['datime']== 0000-00-00): else: ?><?php echo $vo['datime']; endif; ?></span><?php endif; if($vo['hao']): ?><span class="layui-badge" style="background-color: #18bc9c!important;">好发布：<?php echo $vo['hao']; if($vo['haotime']== 0000-00-00): else: ?><?php echo $vo['haotime']; endif; ?></span><?php endif; if($vo['zhu']): ?><span class="layui-badge" style="background-color: #18bc9c!important;">猪发布：<?php echo $vo['zhu']; if($vo['zhutime']== 0000-00-00): else: ?><?php echo $vo['zhutime']; endif; ?></span><?php endif; if($vo['qt']): ?><span class="layui-badge" style="background-color: #18bc9c!important;">其他发布：<?php echo $vo['qt']; if($vo['qttime'] == 0000-00-00): else: ?><?php echo $vo['qttime']; endif; ?></span><?php endif; ?>
	      </td>
	      <td><div class="layui-btn-group">
	      	<a href="<?php echo url('edit',['id'=>$vo['id']]); ?>"  class="layui-btn layui-btn-sm layui-btn-normal"><i class="layui-icon">&#xe642;</i></a>
	      	<a href="<?php echo url('del',['id'=>$vo['id']]); ?>"  class="layui-btn layui-btn-sm layui-btn-danger"><i class="layui-icon">&#xe640;</i></a>
		</div>
	    </td>
	    </tr>
	    <?php endforeach; endif; else: echo "" ;endif; ?>
	  </tbody>
	</table>

	<!-- 商品管理列表结束 -->

	<!-- 分页开始 -->

	<div class="layui-box layui-laypage layui-laypage-default">
	<?php echo $ShopUserList->render(); ?>
	</div>

	<!-- 分页结束 -->

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