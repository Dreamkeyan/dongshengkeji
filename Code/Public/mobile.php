<?php
/**
 * @copyright 	Copyright (c) 2014-2014 0871k.com All rights reserved.
 * @license 	http://www.0871k.com/helpcms/4.html 
 * @link        http://www.xyhcms.com
 * @author 		gosea <gosea199@gmail.com> 
 */  

if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define('BIND_MODULE', 'Mobile');
define('APP_DEBUG',true);
define('APP_PATH', "../App/");//项目路径
define('THINK_PATH', "../core/");
// 加载配置文件
define('ROOT_DIR', realpath(dirname(dirname(__FILE__))));
require ROOT_DIR . '../Conf/bootstrap.inc.php';
require THINK_PATH.'ThinkPHP.php';

?>