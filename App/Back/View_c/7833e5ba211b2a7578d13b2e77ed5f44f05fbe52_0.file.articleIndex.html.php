<?php
/* Smarty version 3.1.30, created on 2017-09-24 14:47:50
  from "E:\practice\Blog\App\back\View\article\articleIndex.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c75516ee24c4_65300164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7833e5ba211b2a7578d13b2e77ed5f44f05fbe52' => 
    array (
      0 => 'E:\\practice\\Blog\\App\\back\\View\\article\\articleIndex.html',
      1 => 1506235655,
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
function content_59c75516ee24c4_65300164 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\practice\\Blog\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
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
                    <div class="titlebar">	<h2>博文管理</h2>	<p>博文列表</p></div>

                    <div class="clear"></div>
                </div>
            </div>
            <!-- end page title -->

            <!-- START CONTENT -->
            <div class="content">
                <div class="simplebox grid740" style="z-index: 720;">
                    <div class="titleh" style="z-index: 710;">
                        <h3>搜索</h3>
                    </div>
                    <div class="body" style="z-index: 690;">

                        <form id="form2" name="form2" method="post" action="">
                            <div class="st-form-line" style="z-index: 680;">
                                <span class="st-labeltext">标题</span>
                                <input name="title" type="text" class="st-forminput" style="width:510px" value="">
                                <div class="clear" style="z-index: 670;"></div>
                            </div>
                            <div class="st-form-line" style="z-index: 640;">
                                <span class="st-labeltext">分类</span>
                                <select class="uniform" name="category_id">
                                    <option value="0">任意</option>
                                    <option value="1">科技1</option>
                                    <option value="5">----IT</option>
                                    <option value="6">----生物</option>
                                    <option value="7">--------鸟类</option>
                                    <option value="2">武侠</option>
                                    <option value="3">旅游</option>
                                    <option value="4">美食</option>
                                    <option value="8">----湘菜</option>
                                    <option value="11">--------跳跳蛙</option>
                                    <option value="12">--------口味虾</option>
                                    <option value="13">--------臭豆腐</option>
                                    <option value="9">----粤菜</option>
                                    <option value="14">--------白切鸡</option>
                                    <option value="15">--------隆江猪脚</option>
                                    <option value="10">----川菜</option>
                                </select>
                                <div class="clear"></div>
                            </div>
                            <div class="st-form-line">
                                <span class="st-labeltext">状态</span>
                                <select class="uniform" name="status">
                                    <option value="">任意</option>
                                    <option value="2">草稿</option>
                                    <option value="1">公开</option>
                                    <option value="3">隐藏</option>
                                </select>
                                <div class="clear"></div>
                            </div>
                            <div class="st-form-line" style="z-index: 620;">
                                <span class="st-labeltext">置顶</span>
                                <label class="margin-right10">
                                    <div class="radio">
                                        <span><input type="radio" name="toped" class="uniform" value="" checked></span>
                                    </div> 不限
                                </label>
                                <label class="margin-right10">
                                    <div class="radio">
                                        <span><input type="radio" name="toped" class="uniform" value="1"></span>
                                    </div> 置顶
                                </label>
                                <label class="margin-right10">
                                    <div class="radio">
                                        <span><input type="radio" name="toped" class="uniform" value="2"></span>
                                    </div> 不置顶
                                </label>

                                <div class="clear" style="z-index: 610;"></div>
                            </div>
                            <div class="button-box" style="z-index: 460;">
                                <input type="submit" name="button" id="button" value="提交" class="st-button">
                            </div>
                        </form>

                    </div>
                </div>

                <!-- START TABLE -->
                <div class="simplebox grid740">

                    <div class="titleh">
                        <h3>博文列表</h3>
                    </div>

                    <table id="myTable" class="tablesorter">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>作者</th>
                            <th>分类</th>
                            <th>标题</th>
                            <th>发布日期</th>
                            <th>评论数量</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['article']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
                            <td>张学友</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['article']->value['c_name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['article']->value['a_name'];?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['a_publishtime'],'%Y-%m-%d');?>
</td>
                            <td>12</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['article']->value['a_sort'];?>
</td>
                            <td>
                                <a href="index.php?p=back&m=article&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">编辑</a>
                                <a href="index.php?p=back&m=article&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" onclick="return confirm('是否确定删除文章：<?php echo $_smarty_tpl->tpl_vars['article']->value['a_name'];?>
？');">删除</a>
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
