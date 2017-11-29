<?php
/* Smarty version 3.1.30, created on 2017-09-24 14:22:54
  from "E:\practice\Blog\App\back\View\article\articleEdit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c74f3e80cc39_01667370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '906fa567333e9dda84ae2ce9b29604da0332e6eb' => 
    array (
      0 => 'E:\\practice\\Blog\\App\\back\\View\\article\\articleEdit.html',
      1 => 1506233070,
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
function content_59c74f3e80cc39_01667370 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\practice\\Blog\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
echo '<script'; ?>
 type="text/javascript" src="Vendor/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
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
                    <div class="titlebar">	<h2>博文管理</h2>	<p>编辑博文</p></div>

                    <div class="clear"></div>
                </div>
            </div>
            <!-- end page title -->

            <!-- START CONTENT -->
            <div class="content">
                <div class="simplebox grid740" style="z-index: 720;">
                    <div class="titleh" style="z-index: 710;">
                        <h3>编辑博文</h3>
                    </div>
                    <div class="body" style="z-index: 690;">

                        <form id="form2" name="form2" method="post" action="index.php">
                        <input type="hidden" name="p" value="back" />
                        <input type="hidden" name="m" value="article" />
                        <input type="hidden" name="a" value="update" />
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['edit_art']->value['id'];?>
" />
                            <div class="st-form-line" style="z-index: 680;">
                                <span class="st-labeltext">标题</span>
                                <input name="title" type="text" class="st-forminput" style="width:510px" value="<?php echo $_smarty_tpl->tpl_vars['edit_art']->value['a_name'];?>
">
                                <div class="clear" style="z-index: 670;"></div>
                            </div>
                            <div class="st-form-line">
                                <span class="st-labeltext">发布日期</span>
                                <!-- start default date picker -->
                                <?php echo '<script'; ?>
 type="text/javascript">
                                    $(function() {
                                        $("#datepicker").datepicker();
                                    });
                                <?php echo '</script'; ?>
>
                                <input type="text" id="datepicker" class="datepicker-input" style="width:180px;" name="publishtime" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['edit_art']->value['a_publishtime'],'%Y/%m/%d');?>
">
                                <!-- end default date picker -->
                                <div class="clear" style="z-index: 510;"></div>
                            </div>
                            <div class="st-form-line" style="z-index: 640;">
                                <span class="st-labeltext">分类</span>
                                <select class="uniform" name="category">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['edit_art']->value['c_id'] == ((string)$_smarty_tpl->tpl_vars['cat']->value['id'])) {?>selected="selected"<?php }?>><?php echo str_repeat('--',$_smarty_tpl->tpl_vars['cat']->value['level']);
echo $_smarty_tpl->tpl_vars['cat']->value['c_name'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </select>
                                <div class="clear"></div>
                            </div>
                            <div class="st-form-line">
                                <span class="st-labeltext">状态</span>
                                <select class="uniform" name="status">
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['edit_art']->value['a_status'] == '草稿') {?>selected="selected"<?php }?>>草稿</option>
                                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['edit_art']->value['a_status'] == '公开') {?>selected="selected"<?php }?>>公开</option>
                                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['edit_art']->value['a_status'] == '隐私') {?>selected="selected"<?php }?>>隐私</option>
                                </select>
                                <div class="clear"></div>
                            </div>
                            <div class="st-form-line" style="z-index: 620;">
                                <span class="st-labeltext">置顶</span>
                                <label class="margin-right10">
                                    <div class="radio">
                                        <span><input type="radio" name="toped" class="uniform" value="1"></span>
                                    </div> 置顶
                                </label>
                                <label class="margin-right10">
                                    <div class="radio">
                                        <span><input type="radio" name="toped" class="uniform" value="2" checked></span>
                                    </div> 不置顶
                                </label>

                                <div class="clear" style="z-index: 610;"></div>
                            </div>

                            <!-- START jWYSIWYG TEXT EDITOR -->
                            <div class="simplebox grid740">
                                <div class="titleh">
                                    <h3>内容</h3>
                                </div>
                                <div class="body">
                                    <textarea class="st-forminput ckeditor" rows="5" cols="47" style="width:96.5%;" name="content"></textarea>
                                    <?php echo '<script'; ?>
>CKEDITOR.replace('content')<?php echo '</script'; ?>
>
                                </div>

                            </div>
                            <!-- END jWYSIWYG TEXT EDITOR -->

                            <div class="button-box" style="z-index: 460;">
                                <input type="submit" name="button" id="button" value="提交" class="st-button">
                            </div>
                        </form>

                    </div>
                </div>
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
