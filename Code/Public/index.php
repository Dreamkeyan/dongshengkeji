<?php
/**
 * @copyright 	Copyright (c) 2014-2014 0871k.com All rights reserved.
 * @license 	http://www.0871k.com/helpcms/4.html 
 * @link        http://www.xyhcms.com
 * @author 		gosea <gosea199@gmail.com> 
 */  

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define('BIND_MODULE', 'Home');
define('APP_DEBUG',true);//是否调试//部署阶段注释或者设为false
//define('PUBLIC', ".././");
define('APP_PATH', "../App/");//项目路径
define('THINK_PATH', "../core/");
define('ROOT_DIR', realpath(dirname(dirname(__FILE__))));
// 定义主模块标记
// 加载配置文件
require ROOT_DIR . '../Conf/bootstrap.inc.php';
// 根目录

//判断是否安装
//if(!file_exists('Conf/db.php'))
//{
  //  header('Location:Install/index.php');
  //  exit();
//}

require THINK_PATH.'ThinkPHP.php';//加载ThinkPHP框架


?>