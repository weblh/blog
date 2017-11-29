<?php 

//视图类

//命名空间
namespace Core;

class View{
	
	//增加属性保存smarty对象
	private $smarty;

	//构造方法：实例化smarty
	public function __construct(){
		//引入smarty
		include_once VENDOR_DIR . 'Smarty/Smarty.class.php';
		$this->smarty = new \Smarty();

		//设置
		$this->smarty->setTemplateDir(APP_DIR . PLAT . '/View/' . MODULE . '/');
		$this->smarty->setCompileDir(APP_DIR . PLAT . '/View_c/');
	}

	//公开方法复制
	public function assign($name,$value){
		
		$this->smarty->assign($name,$value);
	}
	public function display($tpl){
		//用smarty代替
		$this->smarty->display($tpl);
	}
}