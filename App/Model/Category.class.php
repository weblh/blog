<?php

//category表模型

namespace Model;

//引入空间元素
use \Core\Model;

class Category extends Model{
	//属性
	protected $table = 'category';

	//获取所有分类
	public function getAllCategories($stop_id=0){

		//组织sql
		$sql = "select c.*,a.a_number from {$this->getTableName()} as c left join (select count(*) as a_number,c_id from bl_article group by c_id) as a on c.id=a.c_id";

		//调用无限极分类
		$categories = $this->dao->db_getAll($sql);
		//执行
		return $this->noLimitCategories($categories,$stop_id);
	}

	/**
	 * 无限极分类
	 * @param  array  $categories 要分类的数据
	 * @param  integer $stop_id    不要获取的分类的id
	 * @param  integer $parent_id  要寻找的父分类id
	 * @param  integer $level      当前分类所属的级别
	 * @return array   $list  已经分类好的数据
	 */
	public function noLimitCategories($categories,$stop_id=0,$parent_id=0,$level=0){
		//定义数组保存分类后数据
		static $list = array();

		foreach ($categories as $cat) {
			if ($cat['c_parent_id']==$parent_id) {
				//判断当前得到的分类是否不需要
				if ($stop_id==$cat['id']) continue;

				//加入数据分类级别
				$cat['level'] = $level;
				//将数据存入数组
				$list[] = $cat;
				//调用自己遍历自己的子分类
				$this->noLimitCategories($categories,$stop_id,$cat['id'],$level+1);
			}
		}

		return $list;
	}

	//通过父分类ID和名字查询分类
	public function checkCategoryName($parent_id,$name){
		//防止sql注入
		$parent_id = addslashes($parent_id);
		$name = addslashes($name);

		//组织sql执行
		$sql = "select id from {$this->getTableName()} where c_parent_id = {$parent_id} and c_name = '{$name}'";

		return $this->dao->db_getOne($sql);
	}

	//新增分类入库
	public function insertCategory($name,$parent_id,$sort){
		$sql = "insert into {$this->getTableName()} values(null,'{$name}',$parent_id,$sort)";
		return $this->dao->db_exec($sql);
	}

	//检查指定分类是否存在子分类
	public function checkLefe($id){
		//组织sql
		$sql = "select id from {$this->getTableName()} where c_parent_id={$id} limit 1";
		return $this->dao->db_getOne($sql);
	}

	//删除分类
	public function deleteCategory($id){
		$sql = "delete from {$this->getTableName()} where id={$id}";
		return $this->dao->db_exec($sql);
	}

	//通过ID获取分类
	public function getCategoryById($id){
		//调用父类的公共方法
		return $this->getDataById($id);
	}

	//更新数据到数据库
	public function updateCategory($id,$name,$parent_id,$sort){
		//组织sql
		$name = addslashes($name);
		$sort = addslashes($sort);

		$sql = "update {$this->getTableName()} set c_name='{$name}',c_parent_id={$parent_id},c_sort={$sort} where id={$id}";
		$result = $this->dao->db_exec($sql);

		return $result!==0 ? $result : 1;
	}
}