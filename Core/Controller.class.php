<?php 

//公共控制器

//命名空间
namespace Core;

class Controller{
	//实例化视图类
	protected $view;
	
	public function __construct(){

		//权限限定
		if (strtolower(PLAT)=='back'&&strtolower(MODULE)!='privilege'&&!isset($_SESSION['user'])) {
			//没有权限应该去登陆
			$this->error('没有登陆','p=Back&m=Privilege');
		}
		//视图初始化
		$this->view = new View();
	}

	//公共方法
	protected function success($msg, $url, $time = 1){
		//跳转提示功能
		header("refresh:{$time};url='index.php?{$url}'");
		echo $msg;

		//终止脚本
		exit();
	}

	protected function error($msg, $url, $time = 2){
		//跳转提示功能
		header("refresh:{$time};url='index.php?{$url}'");
		echo $msg;

		//终止脚本
		exit();
	}
}