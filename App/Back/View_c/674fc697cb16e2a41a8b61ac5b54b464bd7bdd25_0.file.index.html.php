<?php
/* Smarty version 3.1.30, created on 2017-09-25 22:33:55
  from "E:\practice\Blog\App\back\View\Index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c913d3499a58_92476109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '674fc697cb16e2a41a8b61ac5b54b464bd7bdd25' => 
    array (
      0 => 'E:\\practice\\Blog\\App\\back\\View\\Index\\index.html',
      1 => 1506350013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:App/Back/View/Public/header.html' => 1,
    'file:App/Back/View/Public/sidebar.html' => 1,
    'file:App/Back/View/Public/footer.html' => 1,
  ),
),false)) {
function content_59c913d3499a58_92476109 (Smarty_Internal_Template $_smarty_tpl) {
?>

	<!-- START HEADER -->
    <?php $_smarty_tpl->_subTemplateRender("file:App/Back/View/Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- END HEADER -->
    
    <!-- START MAIN -->
    <div id="main">
        <!-- START SIDEBAR -->
        <?php $_smarty_tpl->_subTemplateRender("file:App/Back/View/Public/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- END SIDEBAR -->

        <!-- START PAGE -->
        <div id="page">
            <!-- start page title -->
            <div class="page-title">
                <div class="in">
                    <div class="titlebar">
                        <h2>控制面板</h2>
                        <p>小标题</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- end page title -->
            <!-- START CONTENT -->
            <div class="content">
                <!-- start simple tips -->
                <div class="simple-tips">
                    <h2>提示</h2>
                    <ul>
                        <li>1. 使用左侧的导航菜单进入功能</li>
                        <li>2. 使用右上角的退出按钮退出管理后台</li>
                    </ul>
                    <a href="#" class="close tips" title="关闭">关闭</a>
                </div>
                <div class="simple-tips">
                    <h2>提示</h2>
                    <ul>
                        <li>1. 您当前使用的ip: 127.0.0.1</li>
                        <li>2. PHP版本: 5.3.16</li>
                        <li>3. 浏览器: Chrome</li>
                    </ul>
                    <a href="#" class="close tips" title="关闭">关闭</a>
                </div>

                <!-- start dashbutton -->
                <div class="grid740">
                    <span class="dashbutton">	<img src="Public/<?php echo @constant('PLAT');?>
/img/icons/dashbutton/users.png" width="44" height="32" alt="icon" />	<b>用户数</b>	<?php echo $_smarty_tpl->tpl_vars['counts']->value;?>
</span>
                    <div class="clear"></div>
                </div>

                <div class="clear"></div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END PAGE -->
    <div class="clear"></div>
    </div>
    <!-- END MAIN -->

    <!-- START FOOTER -->
    <?php $_smarty_tpl->_subTemplateRender("file:App/Back/View/Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- END FOOTER -->
</div>
</body>
</html><?php }
}
