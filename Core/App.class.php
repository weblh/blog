<?php

//初始化文件

namespace core;
//权限判定
if (!defined("ACCESS")) header("location:../index.php");

//定义类
class App{

	//初始化字符集
	private static function initCharset(){
		header("content-type:text/html;charset=utf-8");
	}

	//增加目录常量
	private static function initDirConst(){
		//定义网站根目录
		define("ROOT_DIR", str_replace('Core','',str_replace('\\', '/', __DIR__)));
		define('CORE_DIR', ROOT_DIR.'Core/');
		define('APP_DIR', ROOT_DIR.'App/');
		define('PUBLIC_DIR', ROOT_DIR.'Public/');
		define('UPLOAD_DIR', ROOT_DIR.'Upload/');
		define('VENDOR_DIR', ROOT_DIR.'Vendor/');
		define('CONFIG_DIR', ROOT_DIR.'Config/');
		//echo CORE_DIR;
	}

	//初始化系统函数
	private static function initSystem(){
		@ini_set('error_reporting', E_ALL);
		@ini_set('display_error', 1);
	}

	//初始化配置文件
	private static function initConfig(){
		global $config;
		$config = include_once CONFIG_DIR.'config.php';
	}

	//初始化URL
	private static function initURL(){
		$plat = isset($_REQUEST['p']) ? $_REQUEST['p'] : 'Home';
		$module = isset($_REQUEST['m']) ? $_REQUEST['m'] : 'Index';
		$action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index';

		//用的较多，定义成常量
		define('PLAT', $plat);
		define('MODULE', $module);
		define('ACTION', $action);
	}

	//初始化自动加载
	private static function initAutoload(){
		spl_autoload_register(array(__CLASS__,'loadCore'));
		spl_autoload_register(array(__CLASS__,'loadController'));
		spl_autoload_register(array(__CLASS__,'loadModel'));
		spl_autoload_register(array(__CLASS__,'loadVendor'));
	}
	//增加多个方法加载不同文件下的类,加载类名时去除命名空间
	private static function loadCore($claname){
		//拼接路径
		$file = CORE_DIR . basename($claname) . '.class.php';
		//echo "$file";die;
		if (is_file($file)) {
			include_once $file;
		}
	}
	private static function loadVendor($claname){
		//拼接路径
		$file = VENDOR_DIR . basename($claname) . '.class.php';
		if (is_file($file)) {
			include_once $file;
		}
	}
	private static function loadController($claname){
		//拼接路径
		$file = APP_DIR . PLAT . '/Controller/' . basename($claname) . '.class.php';
		//echo "$file";die;
		if (is_file($file)) {
			include_once $file;
		}
	}
	private static function loadModel($claname){
		//拼接路径
		$file = APP_DIR . 'Model/' . basename($claname) . '.class.php';
		if (is_file($file)) {
			include_once $file;
		}
	}

	//分发控制器
	private static function initDispatch(){
		//找到控制器类，实例化调用方法
		$module = '\\' . PLAT . '\\Controller\\' . MODULE;
		$action = ACTION;
		$m = new $module;
		$m->$action();
	}

	//session入库
	private static function initSession(){
		$session = new Session();
	} 
	
	//定义run方法
	public static function run(){
		//依次执行初始化方法
		self::initCharset();
		self::initDirConst();
		self::initSystem();
		self::initConfig();
		self::initURL();
		self::initAutoload();
		//session入库
		self::initSession();
		//分发控制器
		self::initDispatch();
	}
}