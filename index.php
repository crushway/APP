<?php
define('THINK_PATH','./ThinkPHP/');
define('APP_PATH','./');
define('APP_NAME','APP');
define('APP_DEBUG',true);
// include ('./ThinkPHP/ThinkPHP.php');
//  define('SITE_URL','www.lalali.cn/APP/');//服务器端
define('SITE_URL','www.app.com/APP/');//本地

define('SHOP_PICTURE_URL',SITE_URL.'public/shop_picture/');
 function showbug($msg){
	echo "<pre style='color:green'>";
	var_dump($msg);
	echo "</pre>";
	
} 
header ( "Content-Type:text/HTML;charset=utf8" );
require './ThinkPHP/ThinkPHP.php';