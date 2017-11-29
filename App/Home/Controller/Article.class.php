<?php

//命名空间
namespace Home\Controller;

//引入空间元素
use \Core\Controller;

class Article extends Controller{
	public function index(){
		//接受ID
		$id = intval($_GET['id']);

		//调用模型获取数据
		$article = new \Model\Article();
		$art = $article->getArticleInfoById($id);//获取文章需要带分类的名子

		//获取所有的评论
		$comment = new \Model\Comment();
		$comments = $comment->getCommentById($id);
		//获得总记录数
		$counts = $comments ? count($comments) : 0;

		//分配显示
		$this->view->assign('counts',$counts);
		$this->view->assign('comments',$comments);
		$this->view->assign('art',$art);
		$this->view->display('blogShow.html');
	}

	//点赞
	public function zan(){
		//接受ID
		$id = intval($_GET['id']);

		//判断用户是否登陆
		if (!isset($_SESSION['u'])) {
			$this->error('必须登陆后才能点赞！','m=article&id='.$id);
		}
		
		//判断当前文章是否已经被点过赞
		if (isset($_SESSION['zan'])&&in_array($id, $_SESSION['zan'])) {
			//已经点过赞了
			$this->error('当前文章已经点过赞了！','m=article&id=' . $id);
		}

		//调用模型进行更新操作
		$article = new \Model\Article();
		if ($article->updatezan($id)) {
			$_SESSION['zan'][] = $id;//将当前点赞对应的文章加入到记录中
			$this->success('点赞成功！','m=article&id=' . $id);
		}else{
			$this->error('点赞失败！','m=article&id=' . $id);
		}
	}
}