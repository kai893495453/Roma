<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'roma', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'qingkai', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PARAMS' =>  array(), // 数据库连接参数
    'DB_PREFIX' => '', // 数据库表前缀 
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'URL_ROUTER_ON' => true,   // 是否开启URL路由
    'URL_ROUTE_RULES' => array(), // 默认路由规则 针对模块
    'LAYOUT_ON' =>  true, // 是否启用布局
    'TMPL_LAYOUT_ITEM' =>  '{__CONTENT__}', // 布局模板的内容替换标识
    'LAYOUT_NAME' => 'layout', // 当前布局名称 默认为layout
);