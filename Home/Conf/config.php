<?php
return array(
	//'配置项'=>'配置值'
	
		
		/* 数据库设置 */
		'DB_TYPE'               =>  'mysql',     // 数据库类型
		
// 		服务器
// 		'DB_HOST'               =>  'qdm167598103.my3w.com', // 服务器地址
// 		'DB_NAME'               =>  'qdm167598103_db',          // 数据库名
// 		'DB_USER'               =>  'qdm167598103',      // 用户名
// 		'DB_PWD'                =>  '6124003110',          // 密码
// 		'DB_PREFIX'             =>  'APP_',    // 数据库表前缀
// 		'SHOW_PAGE_TRACE'=>false,
// 		________________________________________________________

// 		本地数据库
		'DB_HOST'               =>  'localhost', // 服务器地址
		'DB_NAME'               =>  'app',          // 数据库名
		'DB_USER'               =>  'root',      // 用户名
		'DB_PWD'                =>  '6124003',          // 密码
		'DB_PREFIX'             =>  'app_',    // 数据库表前缀
		'SHOW_PAGE_TRACE'=>true,
// 		________________________________________________________
		
		'DB_PORT'               =>  '3306',        // 端口
		'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
		'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
		'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
		
		
		'DEFAULT_MODULE'        =>  'Home',  // 默认模块
		'DEFAULT_ACTION'        =>  'index', // 默认操作名称
		'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
		'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
		// 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
		
);