<?php
	// [ 应用入口文件 ]	
	// if(!is_file(__DIR__ . '/config/database.php')){
 //        //$url = 'http://'. $_SERVER['SERVER_NAME'] . rtrim(rtrim(dirname(rtrim($_SERVER['SCRIPT_NAME'], '/')), '/'),'\\').'/install.php';       
 //        //header('Location:'.$url );exit();
 //        define('BIND_MODULE','install');
 //    }

    define('NOW_TIME',      $_SERVER['REQUEST_TIME']);      

	// 定义应用目录
	define('APP_PATH', __DIR__ . '/application/');

	//加载文件目录
	define('__PUBLIC__', __DIR__ . '/public/');
	
	// 定义配置文件目录和应用目录同级
	define('CONF_PATH', __DIR__.'/config/');

	// 加载框架引导文件
	require __DIR__ . '/thinkphp/start.php';
	
	//header("Location: http://". $_SERVER['SERVER_NAME'] . rtrim(dirname(rtrim($_SERVER['SCRIPT_NAME'], '/')), '/').'/public' );exit();
?>