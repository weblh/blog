<?php

//项目单一入口文件

//定义入口安全口令
define("ACCESS", TRUE);

//加载项目初始化文件
include_once 'Core/App.class.php';

//触发初始化文件工作（一般初始化文件都是静态文件）
\Core\App::run();
