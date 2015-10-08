<?php /* Smarty version Smarty-3.1.21, created on 2015-10-08 11:37:01
         compiled from "/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/template/frontend/widget/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19843961705615cca62901f5-01607702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a174f7ad493e88316c5f52b2d913224332f0055' => 
    array (
      0 => '/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/template/frontend/widget/page.tpl',
      1 => 1444275420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19843961705615cca62901f5-01607702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5615cca62a42c9_99109631',
  'variables' => 
  array (
    'pages' => 0,
    'page' => 0,
    'pageUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5615cca62a42c9_99109631')) {function content_5615cca62a42c9_99109631($_smarty_tpl) {?><div class="page">
	<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['type']==1) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
page=<?php echo $_smarty_tpl->tpl_vars['page']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['value'];?>
</a>
		<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==2) {?>
			<b><?php echo $_smarty_tpl->tpl_vars['page']->value['value'];?>
</b>
		<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==3) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
page=<?php echo $_smarty_tpl->tpl_vars['page']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['value'];?>
</a>
		<?php }?>
	<?php } ?>
</div><?php }} ?>
