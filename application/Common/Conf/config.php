<?php
return array(
	//'配置项'=>'配置值'
    'DEFAULT_MODULE' => 'Home',
   // 'URL_MODEL'             =>  2,
    // 自定义路径常量的配置项
    'TMPL_PARSE_STRING' => array(
        '__ADMIN__' => '/Public/Admin',
        '__ADMINCSS__' => '/Public/Admin/css',
        '__ADMINJS__' => '/Public/Admin/js',
        '__ADMINIMG__' => '/Public/Admin/images',
        '__COMMON__' => '/Public/Common',
        //'__PUBLIC1__'  =>'/Public/Upload'
    ),
	// 设置数据库访问配置
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'redefine',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  're_',    // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
);
