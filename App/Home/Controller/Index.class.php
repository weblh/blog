<?php

//前台控制器

//命名空间
namespace Home\Controller;

//引入空间元素
use \Core\Controller;

class Index extends Controller{
	
	public function index(){

		//获取页码
		$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;

		//接受可能存在的分类ID（筛选条件）
		$c_id = isset($_REQUEST['c_id']) ? intval($_REQUEST['c_id']) : 0;

		//加载配置文件
		global $config;

		//获取所有分类及其下对应的文章数量
		$category = new \Model\Category();
		$categories = $category->getAllCategories();

		//获取所有博文
		$article = new \Model\Article();
		$articles = $article->getAllArticles($config['home_article_pagecount'],$page,$c_id);

		//获取文章的数量
		$counts = $article->getCounts($c_id);

		//获取最新的三条数据
		$three = $article->getLatestArticles();
		
		//调用分页类
		$pagestring = \Page::getPageString($counts,'index','index',PLAT,$config['home_article_pagecount'],$page,array('c_id'=>$c_id));	

		//显示首页视图
		$this->view->assign('three',$three);
		$this->view->assign('categories',$categories);
		$this->view->assign('articles',$articles);
		$this->view->assign('pagestring',$pagestring);
		$this->view->display('blogShowList.html');
	}
}