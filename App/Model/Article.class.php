<?php

//文章模型对应article表

//命名空间
namespace Model;

//引入空间元素
use \Core\Model;

class Article extends Model{
	
	//属性
	protected $table = 'article';

	//获取所有文章
	//$c_id表示要获取的分类，0代表所有
	public function getAllArticles($pagecount,$page = 1,$c_id=0){
		//计算limit数据
		$offset = ($page-1)*$pagecount;

		//组织where条件
		$where = '';
		if ($c_id) $where = "where a.c_id={$c_id}";
		//echo $where;die;
		
		//组织sql
		$sql = "select a.id,c.c_name,a.a_name,a.a_publishtime,a.a_sort,a.a_content,m.m_number from {$this->getTableName()} as a left join bl_category as c on a.c_id=c.id left join (select count(*) as m_number,a_id from bl_comment group by a_id) as m on a.id=m.a_id {$where} limit {$offset},{$pagecount}";

		return $this->dao->db_getAll($sql);
	}

	//获取总记录数
	public function getCounts($c_id=0){

		//组织where条件
		$where = '';
		if ($c_id) $where = "where c_id={$c_id}";

		$sql = "select count(*) as c from {$this->getTableName()} {$where}";
		$res = $this->dao->db_getOne($sql);
		return $res ? $res['c'] : 0;
	}

	//数据入库
	public function insertArticle($data){
		//数组元素中所有的下标对应的都是数据表中字段名：字段名中包含不允许为空的字段
		
		//循环遍历构造字段列表和值列表
		$field = $values = '';
		foreach ($data as $k => $v) {
			$field .= $k . ',';
			$values .='"' . $v . '",';
		}
		//去除右边逗号
		$field = rtrim($field,',');
		$values = rtrim($values,',');

		//构造sql
		$sql = "insert into {$this->getTableName()} ({$field}) values({$values})";
		
		return $this->dao->db_exec($sql);
	}

	//删除文章
	public function deleteArticle($id){
		$sql = "delete from {$this->getTableName()} where id={$id}";

		return $this->dao->db_exec($sql);
	}

	//通过ID获取文章
	public function getArticleById($id){
		return $this->getDataById($id);
	}

	//更新数据
	public function updateArticle($id,$data){
		//数组元素中所有的下标对应的都是数据表中字段名：字段名中包含不允许为空的字段
		
		//循环遍历构造字段列表和值列表
		$update = '';
		foreach ($data as $k => $v) {
			$update .= $k . '="' . $v . '",';
		}
		//去除右边逗号
		$update = rtrim($update,',');

		//构造sql
		$sql = "update {$this->getTableName()} set {$update} where id={$id}";
		
		return $this->dao->db_exec($sql);
	}

	//获取文章及相关信息
	public function getArticleInfoById($id){
		$sql = "select a.*,c.c_name from {$this->getTableName()} as a left join bl_category as c on a.c_id=c.id where a.id={$id}";

		return $this->dao->db_getOne($sql);
	}

	//点赞功能
	public function updatezan($id){
		$sql = "update {$this->getTableName()} set a_zan=a_zan+1 where id={$id}";
		return $this->dao->db_exec($sql);
	}

	//获取最新的三条记录
	public function getLatestArticles(){
		$sql = "select a_name,id from {$this->getTableName()} order by a_publishtime desc limit 3";
		return $this->dao->db_getAll($sql);
	}
}