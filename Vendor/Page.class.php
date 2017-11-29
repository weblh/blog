<?php

//分页工具类
class Page{
	/**
	 * 分页方法：通过数据产生一堆分页链接
	 * @param int $counts 总记录数
	 * @param string $controller 要访问的控制器
	 * @param string $action 方法
	 * @param string $plat 平台
	 * @param int $pagecount = 5 每页显示记录
	 * @param int $page = 1 当前页码
	 */
	public static function getPageString($counts,$controller,$action,$plat,$pagecount = 5,$page = 1,$search=array()){
		//计算数据
		$pages = ceil($counts/$pagecount);
		$url = 'index.php?p=' . $plat . '&m=' . $controller . '&a=' . $action;

		//拼凑用户检索数据
		$s = '';
		foreach ($search as $k => $v) {
			$s .= '&' . $k . '=' . $v;
		}
		$url .= $s;

		//计算上一页和下一页
		$prev = $page > 1 ? $page -1 : 1;
		$next = $page < $pages ? $page + 1 : $pages;


		//分页字符串
		$pagestring = '';

		//拼凑最左边
		if ($page > 1) $pagestring .= "<li><a href='{$url}&page={$prev}'>上一页</a></li>";

		//继续拼凑
		if ($pages <= 10) {
			for ($i=1; $i <= $pages; $i++) { 
				$pagestring .= "<li><a href='{$url}&page={$i}'>{$i}</a></li>";
			}
			//判断当前页码是否属于最后一个
			if ($page != $pages) $pagestring .= "<li><a href='{$url}&page={$next}'>下一页</a></li>";

			if($pages == 0) $pagestring = '';
			//返回数据
			return $pagestring;
		}

		//当前总页数一定大于10页
		if ($page > 6) {
			//后边最少有4页
			if ($page + 4 <= $pages) {
				for ($i = $page - 5; $i <= $page+4; $i++) { 
					$pagestring .= "<li><a href='{$url}&page={$i}'>{$i}</a></li>";
				}
			}else{
				//后边不够4页
				for ($i = $pages-9; $i <= $pages; $i++) { 
					$pagestring .= "<li><a href='{$url}&page={$i}'>{$i}</a></li>";
				}
			}
		}else{
			//总记录数大于10，但是当前显示的页码小于6：前面的所有都要
			for ($i=1; $i <= 10; $i++) { 
				$pagestring .= "<li><a href='{$url}&page={$i}'>{$i}</a></li>";
			}
		}
		//判断是否该有下一页
		if ($page!=$pages) $pagestring .= "<li><a href='{$url}&page={$next}'>下一页</a></li>";

		//返回字符串
		return $pagestring;
	}
}
