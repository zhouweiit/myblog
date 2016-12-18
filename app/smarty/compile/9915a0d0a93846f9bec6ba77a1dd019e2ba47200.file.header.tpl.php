<?php /* Smarty version Smarty-3.1.21, created on 2016-12-18 21:54:46
         compiled from "/home/zhouwei/workspace/myblog/app/smarty/views/template/frontend/widget/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20616164765682b2ccb82c01-19593121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9915a0d0a93846f9bec6ba77a1dd019e2ba47200' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/frontend/widget/header.tpl',
      1 => 1482069285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20616164765682b2ccb82c01-19593121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5682b2ccba1230_02621104',
  'variables' => 
  array (
    'index' => 0,
    'firstCategory' => 0,
    'category' => 0,
    'firstCategoryId' => 0,
    'leave' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5682b2ccba1230_02621104')) {function content_5682b2ccba1230_02621104($_smarty_tpl) {?><header>
	<div class="writeinfo" style="height:100px;">
		<div style="float:left;">
		   	<h1>未舟 - www.zwiter.com</h1>
		   	<h2>如果害怕不能一次成功，那就叫先它beta版吧...</h2>
	   	</div>
	   	<div style="float:right;padding-top:15px;font:16px '宋体', Arial, Helvetica, sans-serif;color:#bbbbbb;">
	   		<div style="float:left;">
	   			<img style="width:75px;" src="/static/frontend/images/bloghead.png"/>
	   		</div>
	   		<div style="float:left;width:180px;padding-left:3px;">
	   			<div class="info" style="height:30px;padding-top:8px;padding-left:10px;">
	   				<div><label style="color:#ffffff;font-size:23px;">未舟</label> <label style="font-size:12px;"></label></div>
	   			</div>
	   			<div class="links" style="height:34px;padding-left:10px;padding-top:7px;">
	   				<wb:follow-button uid="5706395113" type="red_1" width="67" height="24" ></wb:follow-button>
	   			</div>
	   		</div>
	   	</div>
   	</div>
   	<nav id="topnav">
		<a href="/index/index" <?php if ($_smarty_tpl->tpl_vars['index']->value) {?>id="topnav_current"<?php }?>>首页</a>
   		<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['firstCategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
       		<a href="/index/index?categoryid=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value['id']==$_smarty_tpl->tpl_vars['firstCategoryId']->value) {?>id="topnav_current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
       	<?php } ?>
   		<a href="/message/leave" <?php if ($_smarty_tpl->tpl_vars['leave']->value) {?>id="topnav_current"<?php }?>>留言小本</a>
   		
   		<form action="/index/index" method="post" style="float:right">
	   		<img class="imageserach" src="/static/frontend/images/search.png" onclick="javascript:submit()"/>
	   		<input class="inputblue" type="text" <?php if ($_smarty_tpl->tpl_vars['search']->value) {?>placeholder="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"<?php } else { ?>placeholder="全站搜索"<?php }?> name="search" style="float:right;padding-left:5px;"/>
   		</form>
   	</nav>
</header><?php }} ?>
