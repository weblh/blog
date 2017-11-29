<?php

//admin表对应的模型

//命名空间
namespace Model;

//引入空间元素
use \Core\Model;

class Admin extends Model{
	
	//属性：保存表名
	protected $table = 'admin';

	//验证用户名和密码：通过用户提交的用户名和密码来查询数据
	public function checkUser($username,$password){
		//密码加密处理
		$password = md5($password);
		//组织sql
		$sql = "select * from {$this->getTableName()} where a_username = '{$username}' and a_password = '{$password}'";
		return $this->dao->db_getOne($sql);
	}

	//通过用户名获取用户信息
	public function getUserByUsername($username){
		$username = addslashes($username);
		$sql = "select * from {$this->getTableName()} where a_username = '{$username}'";
		return $this->dao->db_getOne($sql);
	}
}