<?php

//博文管理控制器

//命名空间
namespace Back\Controller;

//引入空间元素
use \Core\Controller;

class Article extends Controller{

	//显示所有文章
	public function index(){
		//获取页码
		$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;

		//引入配置文件
		global $config;
		
		//控制器调用模型
		$article = new \Model\Article();
		$articles = $article->getAllArticles($config['back_article_pagecount'],$page);

		//获取文章总数量
		$counts = $article->getCounts();

		//调用分页类
		$pagestring = \Page::getPageString($counts,'article','index','back',$config['back_article_pagecount'],$page);
		
		//分配数据显示数据
		$this->view->assign('pagestring',$pagestring);
		$this->view->assign('articles',$articles);
		$this->view->display('articleIndex.html');
	}

	//新增文章：拿到表单
	public function add(){

		//获取所有分类
		$category = new \Model\Category();
		$categories = $category->getAllCategories();
		
		//显示对应表单
		$this->view->assign('categories',$categories);
		$this->view->display('articleAdd.html');
	}

	//新增文章：数据入库
	public function insert(){
		//接受数据
		$data['a_name'] = trim($_POST['title']);
		$data['a_content'] = htmlspecialchars(trim($_POST['content']));
		$data['a_publishtime'] = strtotime($_POST['publishtime']);
		$data['c_id'] = intval($_POST['category']);
		$data['a_status'] = intval($_POST['status']);
		$data['a_sort'] = 100;

		//合法性验证
		if (empty($data['a_name'])||empty($data['a_content'])) {
			$this->error('文章标题和内容都不能为空！','p=back&m=article&a=add');
		}
		if (empty($data['a_publishtime'])) {
			$this->error('文章发布日期不能为空！','p=back&m=article&a=add');
		}

		//数据入库
		$article = new \Model\Article();
		$result = $article->insertArticle($data);
		if ($result!==false) {
			//成功
			$this->success('文章新增成功！','p=back&m=article');
		}else{
			//失败
			$this->error('文章新增失败！','p=back&m=article&a=add');
		}
	}

	//删除文章
	public function delete(){
		//接受文章ID
		$id = $_GET['id'];

		//调用模型操作
		$article = new \Model\Article();
		$result = $article->deleteArticle($id);
		if ($result!==false) {
			$this->success('文章删除成功！','p=back&m=article');
		}else{
			$this->error('文章删除失败！','p=back&m=article');
		}
	}

	//编辑文章：显示表单
	public function edit(){
		//接受数据
		$id = intval($_GET['id']);

		//调用模型获取数据：文章和分类
		$article = new \Model\Article();
		$edit_art = $article->getArticleById($id);

		$category = new \Model\Category();
		$categories = $category->getAllCategories();

		//分配显示
		$this->view->assign('edit_art',$edit_art);
		$this->view->assign('categories',$categories);
		$this->view->display('articleEdit.html');
	}

	//编辑文章：数据入库
	public function update(){
		//接受数据
		$id = intval($_REQUEST['id']);

		$data['a_name'] = trim($_POST['title']);
		$data['a_content'] = htmlspecialchars(trim($_POST['content']));
		$data['a_publishtime'] = strtotime($_POST['publishtime']);
		$data['c_id'] = intval($_POST['category']);
		$data['a_status'] = intval($_POST['status']);

		//合法性验证
		if (empty($data['a_name'])||empty($data['a_content'])) {
			$this->error('文章标题和内容都不能为空！','p=back&m=article&a=edit&id='.$id);
		}
		if (empty($data['a_publishtime'])) {
			$this->error('文章发布日期不能为空！','p=back&m=article&a=edit&id='.$id);
		}

		//调用模型跟新数据
		$article = new \Model\Article();
		$result = $article->updateArticle($id,$data);
		if ($result!==false) {
			//成功
			$this->success('文章更新成功！','p=back&m=article');
		}else{
			//失败
			$this->error('文章更新失败！','p=back&m=article&a=edit&id'.$id);
		}
	}
}

