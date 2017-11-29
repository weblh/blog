<?php

//User表对应的模型

namespace Model;
use \Core\Model;

class User extends Model{
	
	//属性
	protected $table = 'user';

	//验证用户名是否存在
	public function checkUserByUsername($username){
		//组织sql执行
		$username = addslashes($username);
		$sql = "select id from {$this->getTableName()} where u_username='{$username}'";
		return $this->dao->db_getOne($sql);
	}

	//验证邮箱是否存在
	public function checkUserByEmail($email){
		$email = addslashes($email);
		$sql = "select id from {$this->getTableName()} where u_email='{$email}'";
		return $this->dao->db_getOne($sql);
	}

	//数据入库
	public function insertUser($username,$email,$password){
		$password = md5($password);
		$now = time();
		$sql = "insert into {$this->getTableName()} values(null,'{$username}','{$password}','{$email}',$now)";
		return $this->dao->db_exec($sql);
	}

	//获取用户信息
	public function getUserByUsername($username){
		//防止sql注入
		$username = addslashes($username);

		//组织sql
		$sql = "select * from {$this->getTableName()} where u_username='{$username}'";
		return $this->dao->db_getOne($sql);
	}

	//获取所有用户
	public function getAllUsers($pagecount,$page=1){
		$offset = ($page-1)*$pagecount;
		$sql = "select * from {$this->getTableName()} limit {$offset},{$pagecount}";
		return $this->dao->db_getAll($sql);
	}

	//获取总记录数
	public function getCounts(){
		$sql = "select count(*) as u from {$this->getTableName()}";
		$res = $this->dao->db_getOne($sql);
		return $res ? $res['u'] : 0;
	}
}