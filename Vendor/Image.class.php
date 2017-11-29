<?php

//图片处理工具类
class Image{
	//图片资源类型
	private static $type = array(1=>'gif',2=>'jpeg',3=>'png');
	public static $error = '';

	/**
	 * 制作缩略图
	 * @param string $file 源文件资源
	 * @param string $path 存储路径
	 * @param int $width = 80 宽度
	 * @param int $height = 100 高度
	 */
	public static function thumbImage($file,$path,$width=80,$height=100){
		//判断文件是否有效
		if (!file_exists($file)) {
			self::$error = '源文件不存在！';
			return false;
		}

		//判断文件适合做缩略图
		list($src_width,$src_height,$src_type) = getimagesize($file);
		if ($src_type!=1 && $src_type!=2 && $src_type!=3) {
			self::$error = '当前文件类型不能制作缩略图！';
			return false;
		}

		//拼凑打开以及保存的函数类型
		$open = 'imagecreatefrom' . self::$type[$src_type];
		$save = 'image' . self::$type[$src_type];

		//打开原图资源
		$image_src = $open($file);
		//创建缩略图资源
		$image_dst = imagecreatetruecolor($width, $height);

		//采样复制
		if (!imagecopyresampled($image_dst, $image_src, 0, 0, 0, 0, $width, $height, $src_width, $src_height)) {
			//失败
			self::$error = '采样复制出错！';
			return false;
		}

		//生成缩略图名字
		$thumb_name = 'thumb_' . basename($file);
		if (!$save($image_dst,$path . '/' . $thumb_name)) {
			self::$error = '缩略图保存失败！';
			return false;
		}

		//销毁资源
		imagedestroy($image_src);
		imagedestroy($image_dst);

		//返回资源
		return $thumb_name;

	}
}
