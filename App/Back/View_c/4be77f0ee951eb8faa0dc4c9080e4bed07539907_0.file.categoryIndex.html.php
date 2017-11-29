<?php
/* Smarty version 3.1.30, created on 2017-09-25 20:46:01
  from "E:\practice\Blog\App\back\View\category\categoryIndex.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c8fa89e4d264_83331813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4be77f0ee951eb8faa0dc4c9080e4bed07539907' => 
    array (
      0 => 'E:\\practice\\Blog\\App\\back\\View\\category\\categoryIndex.html',
      1 => 1506343556,
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
function content_59c8fa89e4d264_83331813 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <div class="titlebar">	<h2>分类管理</h2>	<p>分类列表</p></div>

                    <div class="clear"></div>
                </div>
            </div>
            <!-- end page title -->

            <!-- START CONTENT -->
            <div class="content">
                <!-- START TABLE -->
                <div class="simplebox grid740">

                    <div class="titleh">
                        <h3>分类列表</h3>
                    </div>

                    <table id="myTable" class="tablesorter">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>名称</th>
                            <th>下属博文数量</th>
                            <th>排序</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['cat']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                            <td><?php echo str_repeat('----',$_smarty_tpl->tpl_vars['cat']->value['level']);
echo $_smarty_tpl->tpl_vars['cat']->value['c_name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['cat']->value['a_number'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['cat']->value['c_sort'];?>
</td>
                            <td>
                                <a href="index.php?p=back&m=category&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
">编辑</a>
                                <a href="index.php?p=back&m=category&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
" onclick="return confirm('确定要删除当前分类：<?php echo $_smarty_tpl->tpl_vars['cat']->value['c_name'];?>
?');">删除</a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
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
