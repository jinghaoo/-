<?php
// 1. 设置相应类型
header("Content-Type:text/html;charset=utf-8");

define('BIND_MODULE', 'Home');
// 2. 定义项目路径
define('APP_PATH', './application/');
// 3. 开启调试模式
define('APP_DEBUG', true);

// 4. 引入TP的核心文件
include_once 'ThinkPHP/ThinkPHP.php';
