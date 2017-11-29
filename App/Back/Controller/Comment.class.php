<?php

//后台评论管理

//命名空间
namespace Back\Controller;
use \Core\Controller;

class Comment extends Controller{
	
	public function index(){
		//获取所有页码
		$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
		//引入配置文件
		global $config;

		//获取所有评论
		$comment = new \Model\Comment();
		//获取总记录数
		$counts = $comment->getCounts();
		//调用分类页
		$pagestring = \Page::getPageString($counts,'comment','index','back',$config['back_comment_pagecount'],$page);
		$comments = $comment->getAllComments($config['back_comment_pagecount'],$page);

		//分配显示
		$this->view->assign('pagestring',$pagestring);
		$this->view->assign('comments',$comments);
		$this->view->display('commentIndex.html');
	}
}