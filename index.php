<?php
define('THINK_PATH','./ThinkPHP/');
define('APP_PATH','./');
define('APP_NAME','APP');
define('APP_DEBUG',true);
// include ('./ThinkPHP/ThinkPHP.php');
 define('SITE_URL','www.lalali.cn/APP/');//服务器端
// define('SITE_URL','www.app.com/APP/');//本地

define('PICTURE_URL',SITE_URL.'public/picture/');
 function showbug($msg){
	echo "<pre style='color:green'>";
	var_dump($msg);
	echo "</pre>";
	
} 
require './ThinkPHP/ThinkPHP.php';