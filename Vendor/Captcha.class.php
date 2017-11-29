<?php 

//验证码工具类

class Captcha{
	//属性：保存验证码图片基本数据
	private $width;
	private $height;
	private $length;
	private $font;	//字体
	private $dots;
	private $lines;

	public function __construct($arr = array()){
		$this->width = isset($arr['width']) ? $arr['width'] : 220;
		$this->height = isset($arr['height']) ? $arr['height'] : 30;
		$this->length = isset($arr['length']) ? $arr['length'] : 4;
		$this->font = isset($arr['font']) ? $arr['font'] : './Vendor/Fonts/impact.ttf';
		$this->dots = isset($arr['dots']) ? $arr['dots'] : 100;
		$this->lines = isset($arr['lines']) ? $arr['lines'] : 10;
	}
	//制作验证码
	public function generate(){
		//创建真彩画布
		$img = imagecreatetruecolor($this->width, $this->height);

		//填充背景颜色
		$bg_c = imagecolorallocate($img, mt_rand(200,255), mt_rand(200,255), mt_rand(200,255));
		imagefill($img, 0, 0, $bg_c);

		//添加干扰线
		for ($i=0; $i < $this->lines; $i++) { 
			$line_c = imagecolorallocate($img, mt_rand(100,150), mt_rand(100,150), mt_rand(100,150));
			imageline($img, mt_rand(0,$this->width), mt_rand(0,$this->height), mt_rand(0,$this->width), mt_rand(0,$this->height), $line_c);
		}
		//添加干扰点
		for ($i=1; $i < $this->dots; $i++) { 
			$dots_c = imagecolorallocate($img, mt_rand(100,180), mt_rand(100,180), mt_rand(100,180));
			imagestring($img, mt_rand(1,5), mt_rand(0,$this->width), mt_rand(0,$this->height), '*', $dots_c);
		}

		#生成随机字符串
		$string_arr = array_merge(range('a', 'z'),range('A', 'Z'),range('0', '9'));
		$captcha = '';
		for ($i=0; $i < $this->length; $i++) { 
			//打乱顺序
			shuffle($string_arr);
			//保存内容
			$captcha .= $string_arr[0];
			//写入
			$str_c = imagecolorallocate($img, mt_rand(0,100), mt_rand(0,100), mt_rand(0,100));
			$ceil = ceil($this->width/($this->length+1));
			imagettftext($img, mt_rand(15,20), mt_rand(-45,45), $ceil*($i+1), mt_rand(20,25), $str_c, $this->font, $string_arr[0]);

		}
		//将验证码存入session
		@session_start();
		$_SESSION['captcha'] = $captcha;

		//输出图片
		header("content-type:image/png");
		//ob_clean();
		imagepng($img);

		//销毁资源
		imagedestroy($img);
	}
	public static function checkCaptcha($captcha){
		//$captcha是用户提交的验证码数据，验证时不分大小写
		@session_start();
		return strtolower($captcha) === strtolower($_SESSION['captcha']);

	}

}
