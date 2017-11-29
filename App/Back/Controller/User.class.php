<?php

//后台用户管理控制器

//命名空间
namespace Back\Controller;
use \Core\Controller;

class User extends Controller{
	
	public function index(){

		//获取数据
		$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
		
		global $config;

		//调用模型获取数据
		$user = new \Model\User();

		//获取所有记录数
		$counts = $user->getCounts();

		//分页功能
		$pagestring = \Page::getPageString($counts,'User','index','back',$config['back_user_pagecount'],$page);

		$users = $user->getAllUsers($config['back_user_pagecount'],$page);

		//分配显示
		$this->view->assign('pagestring',$pagestring);
		$this->view->assign('users',$users);
		$this->view->display('userIndex.html');
	}
}