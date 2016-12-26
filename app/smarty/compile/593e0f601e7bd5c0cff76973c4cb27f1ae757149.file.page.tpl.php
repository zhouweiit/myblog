<?php /* Smarty version Smarty-3.1.21, created on 2016-12-26 18:05:13
         compiled from "/home/zhouwei/workspace/myblog/app/smarty/views/template/frontend/widget/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1776817295682b2ccba49f6-92980249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '593e0f601e7bd5c0cff76973c4cb27f1ae757149' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/frontend/widget/page.tpl',
      1 => 1482746678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1776817295682b2ccba49f6-92980249',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5682b2ccbcc279_26476299',
  'variables' => 
  array (
    'pages' => 0,
    'page' => 0,
    'pageUrl' => 0,
    'pageUrlOther' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5682b2ccbcc279_26476299')) {function content_5682b2ccbcc279_26476299($_smarty_tpl) {?><div class="page">
	<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['type']==1) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
page=<?php echo $_smarty_tpl->tpl_vars['page']->value['value'];
echo $_smarty_tpl->tpl_vars['pageUrlOther']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['value'];?>
</a>
		<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==2) {?>
			<b><?php echo $_smarty_tpl->tpl_vars['page']->value['value'];?>
</b>
		<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==3) {?>
			<a><?php echo $_smarty_tpl->tpl_vars['page']->value['value'];?>
</a>
		<?php }?>
	<?php } ?>
</div><?php }} ?>
