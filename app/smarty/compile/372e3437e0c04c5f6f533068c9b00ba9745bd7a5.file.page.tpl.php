<?php /* Smarty version Smarty-3.1.21, created on 2017-02-26 16:39:49
         compiled from "/home/zhouwei/workspace/myblog/app/smarty/views/template/backend/widget/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12837440385683cf4851e346-36742124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '372e3437e0c04c5f6f533068c9b00ba9745bd7a5' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/backend/widget/page.tpl',
      1 => 1488098368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12837440385683cf4851e346-36742124',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5683cf48554d36_18157915',
  'variables' => 
  array (
    'pages' => 0,
    'pageUrl' => 0,
    'pageUrlOther' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5683cf48554d36_18157915')) {function content_5683cf48554d36_18157915($_smarty_tpl) {?><div class="pagination">
    <ul>
        <?php if ($_smarty_tpl->tpl_vars['pages']->value['lastnext']['last']==0) {?>
        <li class="disabled first-child"><span>上一页</span></li>
        <?php } else { ?>
        <li class="first-child"><a href="<?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
page=<?php echo $_smarty_tpl->tpl_vars['pages']->value['lastnext']['last'];
echo $_smarty_tpl->tpl_vars['pageUrlOther']->value;?>
">上一页</a></li>
        <?php }?>
        
	    <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
	        <?php if ($_smarty_tpl->tpl_vars['page']->value['type']==1) {?>
	            <li><a href="<?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
page=<?php echo $_smarty_tpl->tpl_vars['page']->value['value'];
echo $_smarty_tpl->tpl_vars['pageUrlOther']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['value'];?>
</a></li>
	        <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==2) {?>
	            <li class="disabled"><span><?php echo $_smarty_tpl->tpl_vars['page']->value['value'];?>
</span></li>
	        <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==3) {?>
	            <li class="disabled"><span><?php echo $_smarty_tpl->tpl_vars['page']->value['value'];?>
</span></li>
	        <?php }?>
	    <?php } ?>
        
        <?php if ($_smarty_tpl->tpl_vars['pages']->value['lastnext']['next']==0) {?>
        <li class="disabled"><span>下一页</span></li>
        <?php } else { ?>
        <li class="last-child"><a href="<?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
page=<?php echo $_smarty_tpl->tpl_vars['pages']->value['lastnext']['next'];
echo $_smarty_tpl->tpl_vars['pageUrlOther']->value;?>
">下一页</a></li>
        <?php }?>
    </ul>
</div><?php }} ?>
