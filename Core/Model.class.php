<?php

//公共模型

//命名空间
namespace Core;

//引入空间元素
// use \Core\MyPDO;

class Model {
	//属性：保存DAO对象
	protected $dao;

	//构造方法，数据库连接认证
	public function __construct(){
		//链接认证
		$this->dao = new MyPDO();
	}

	//构造表名
	protected function getTableName(){
		//获取表前缀
		global $config;
		$type = $config['type'];
		return $config[$type]['prefix'] . $this->table;
	}

	//通过id获取一条记录
	protected function getDataById($id){
		//组织sql
		$sql = "select * from {$this->getTableName()} where id = {$id}";
		//执行
		return $this->dao->db_getOne($sql);
	}
}