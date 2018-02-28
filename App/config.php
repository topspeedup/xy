<?php
 

return [
    // +----------------------------------------------------------------------
    // | 应用设置
    // +----------------------------------------------------------------------

    // 应用命名空间
    'app_namespace'          => 'app',
    // 应用调试模式
    'app_debug'              => true,
    // 应用Trace
    'app_trace' => false,
    // 是否开启路由
    'url_route_on'      => true,
    // 是否自动转换URL中的控制器和操作名
    'url_convert'            => true,
    'template'               => [
        'view_path'    => 'Tpl',
        // 模板后缀
    ],
    'index' => [
        // 默认首页模板文件名称
        'default_template' => 'Home',       // 这里可以切换模块下的默认模板名称
    ],

    //分页配置
    'paginate'               => [
        'type'      => 'Layui',
        'var_page'  => 'page',
        'list_rows' => 15,
        'newstyle'  => true,
    ],
];
