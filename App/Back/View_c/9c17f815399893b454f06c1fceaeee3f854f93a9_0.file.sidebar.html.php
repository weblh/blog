<?php
/* Smarty version 3.1.30, created on 2017-09-25 22:34:49
  from "E:\practice\Blog\App\Back\View\Public\sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c914092df3c3_23343573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c17f815399893b454f06c1fceaeee3f854f93a9' => 
    array (
      0 => 'E:\\practice\\Blog\\App\\Back\\View\\Public\\sidebar.html',
      1 => 1506350083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c914092df3c3_23343573 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="sidebar">
    <div id="searchbox" style="z-index: 880;">
        <div class="in" style="z-index: 870;">
            <p class="text-center font18 line-height35">此广告位常年招商</p>
        </div>
    </div>
    <!-- start sidemenu -->
    <div id="sidemenu">
    	<ul>
        	<li class="active"><a href="index.php?p=back"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/laptop.png" width="16" height="16" alt="icon"/>控制面板</a></li>
            <!-- 分类管理 -->
            <li class="subtitle">
                <a class="action tips-right" href="#" title="分类管理"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/key.png" width="16" height="16" alt="icon"/>分类管理<img src="Public/<?php echo @constant('PLAT');?>
/img/arrow-down.png" width="7" height="4" alt="arrow" class="arrow" /></a>
                <ul class="submenu display-block">
                    <li><a href="index.php?p=back&m=category"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/file.png" width="16" height="16" alt="icon"/>分类列表</a></li>
                    <li><a href="index.php?p=back&m=category&a=add"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/file_add.png" width="16" height="16" alt="icon"/>添加分类</a></li>
                </ul>
            </li>
            <!-- 分类管理 -->

            <!-- 博文管理 -->
            <li class="subtitle">
            	<a class="action tips-right" href="#" title="博文管理"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/mail.png" width="16" height="16" alt="icon"/>博文管理<img src="Public/<?php echo @constant('PLAT');?>
/img/arrow-down.png" width="7" height="4" alt="arrow" class="arrow" /></a>
            	<ul class="submenu display-block">
                <li><a href="index.php?p=back&m=article&a=add"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/file_add.png" width="16" height="16" alt="icon"/>添加博文</a></li>
                <li><a href="index.php?p=back&m=article"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/file.png" width="16" height="16" alt="icon"/>博文列表</a></li>
                </ul>
            </li>
            <!-- 博文管理 -->

            <!-- 用户管理 -->
            <li class="subtitle">
                <a class="action tips-right" href="#" title="用户管理"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/user.png" width="16" height="16" alt="icon"/>用户管理<img src="Public/<?php echo @constant('PLAT');?>
/img/arrow-down.png" width="7" height="4" alt="arrow" class="arrow" /></a>
                <ul class="submenu display-block">
                    <li><a href="userAdd.html"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/user_add.png" width="16" height="16" alt="icon"/>添加用户</a></li>
                    <li><a href="index.php?p=back&m=user"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/file.png" width="16" height="16" alt="icon"/>用户列表</a></li>
                </ul>
            </li>
            <!-- 用户管理 -->

            <!-- 评论管理 -->
            <li><a href="index.php?p=back&m=comment"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/file.png" width="16" height="16" alt="icon"/>评论列表</a></li>
            <!-- 评论管理 -->
        </ul>
    </div>
    <!-- end sidemenu -->
</div><?php }
}
