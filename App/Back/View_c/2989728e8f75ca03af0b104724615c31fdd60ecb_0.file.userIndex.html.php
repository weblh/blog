<?php
/* Smarty version 3.1.30, created on 2017-09-25 15:15:48
  from "E:\practice\Blog\App\back\View\user\userIndex.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c8ad24974694_63576582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2989728e8f75ca03af0b104724615c31fdd60ecb' => 
    array (
      0 => 'E:\\practice\\Blog\\App\\back\\View\\user\\userIndex.html',
      1 => 1506323744,
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
function content_59c8ad24974694_63576582 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\practice\\Blog\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:App/Back/View/Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                    <div class="titlebar">	<h2>用户管理</h2>	<p>用户列表</p></div>

                    <div class="clear"></div>
                </div>
            </div>
            <!-- end page title -->

            <!-- START CONTENT -->
            <div class="content">
                <!-- START TABLE -->
                <div class="simplebox grid740">

                    <div class="titleh">
                        <h3>用户列表</h3>
                    </div>

                    <table id="myTable" class="tablesorter">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>用户名</th>
                            <th>注册时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['user']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['u_username'];?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['u_logintime'],"%Y-%m-%d");?>
</td>
                            <td>
                                <a href="#">删除</a>
                                <a href="#">编辑</a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                    <ul class="pagination">
                        <?php echo $_smarty_tpl->tpl_vars['pagestring']->value;?>

                    </ul>
                </div>
                <!-- END TABLE -->
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
