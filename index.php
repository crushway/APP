<?php
define('THINK_PATH','./ThinkPHP/');
define('APP_PATH','./');
define('APP_NAME','APP');
define('APP_DEBUG',false);
// include ('./ThinkPHP/ThinkPHP.php');

 function showbug($msg){
	echo "<pre style='color:green'>";
	var_dump($msg);
	echo "</pre>";
	
} 
require './ThinkPHP/ThinkPHP.php';