<?php
/* Smarty version 3.1.30, created on 2017-10-08 15:51:49
  from "E:\practice\Blog\App\Back\View\Public\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d9d9159cf731_78789251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb9e15b8c3b3391f5a3566295edc464a5e1d55d3' => 
    array (
      0 => 'E:\\practice\\Blog\\App\\Back\\View\\Public\\header.html',
      1 => 1506349796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d9d9159cf731_78789251 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>博客后台</title>
    <link rel="stylesheet" type="text/css" href="Public/<?php echo @constant('PLAT');?>
/css/app.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="Public/<?php echo @constant('PLAT');?>
/js/app.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="wrapper">
    <div id="header">
    	<!-- logo -->
    	<div class="logo">	<a href="?"><span class="logo-text text-center font18">博客后台</span></a>	</div>

        <!-- notifications -->
        <div id="notifications">
          <div class="clear"></div>
        </div>

        <!-- quick menu -->
        <div id="quickmenu">
            <a href="index.php?p=back&m=article&a=add" class="qbutton-left tips" title="新增一篇博客"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/header/newpost.png" width="18" height="14" alt="new post" /></a>
            <a href="index.php" target="__blank" class="qbutton-right tips" title="直达前台"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/magnify.png" width="18" height="14" alt="new post" /></a>
            <div class="clear"></div>
        </div>

        <!-- profile box -->
        <div id="profilebox">
        	<a href="#" class="display">
            	<img src="Public/<?php echo @constant('PLAT');?>
/img/simple-profile-img.jpg" width="33" height="33" alt="profile"/> <span>管理员</span> <b>昵称：<?php echo $_SESSION['user']['a_username'];?>
</b>
            </a>

            <div class="profilemenu">
            	<ul>
                	<li><a href="#">退出</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div><?php }
}
