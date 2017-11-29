<?php

//后台首页控制器


//命名空间
namespace Back\Controller;

//引入空间元素
use \Core\Controller;

class Index extends Controller{
	public function index(){

		//获取所有用户数量
		$user = new \Model\User();
		$counts = $user->getCounts();

		//显示视图
		$this->view->assign('counts',$counts);
		$this->view->display('index.html');
	}
}