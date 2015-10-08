<?php /* Smarty version Smarty-3.1.21, created on 2015-10-08 09:54:47
         compiled from "/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/template/frontend/page/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17274891205615cca60fdac4-87869246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81b5e935cf0fbc008e4a3bc5d614be64c99ebd20' => 
    array (
      0 => '/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/template/frontend/page/index/index.tpl',
      1 => 1444269283,
      2 => 'file',
    ),
    '5d12b4e71256ba1733c93088e60139c47c643a92' => 
    array (
      0 => '/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/template/common/page/frontLayout.tpl',
      1 => 1444269206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17274891205615cca60fdac4-87869246',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5615cca6256a83_30163005',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5615cca6256a83_30163005')) {function content_5615cca6256a83_30163005($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="<?php if(!class_exists('FISResource', false)){require_once('/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("frontend:static/css/base.css",$_smarty_tpl->smarty);?>" rel="stylesheet">
<link href="<?php if(!class_exists('FISResource', false)){require_once('/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("frontend:static/css/index.css",$_smarty_tpl->smarty);?>" rel="stylesheet">
<link href="<?php if(!class_exists('FISResource', false)){require_once('/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("frontend:static/css/about.css",$_smarty_tpl->smarty);?>" rel="stylesheet">
<link href="<?php if(!class_exists('FISResource', false)){require_once('/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("frontend:static/css/style.css",$_smarty_tpl->smarty);?>" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/js/jquery-1.8.1.min.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/js/jsencrypt.min.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/js/modernizr.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/js/silder.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">


<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/js/modernizr.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<![endif]-->
<?php if(!class_exists('FISResource', false)){require_once('/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::cssHook();?></head>
<body id="<?php echo "type_page";?>">

<div class="ibody">
  <?php if(!class_exists('FISResource', false)){require_once('/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("frontend:widget/header.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."frontend:widget/header.tpl".'"', E_USER_ERROR);}FISResource::load("frontend:widget/header.tpl", $_smarty_tpl->smarty);?>
  <article>
  	<h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">模板分享</a>><a href="1/">个人博客模板</a></h2>
    <div class="bloglist">
      <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articleInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
      <div class="blogs">
        <h3><a href="/"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
        <p class="title_meta">
        	<span>发布时间：<?php echo $_smarty_tpl->tpl_vars['article']->value['release_datetime'];?>
</span>
        	<?php if ($_smarty_tpl->tpl_vars['article']->value['tag']) {?>
	        	<span>分类：
	        	<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
	        		<?php if ($_smarty_tpl->tpl_vars['tag']->value['last']) {?>
	        			<a href="/"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
	        		<?php } else { ?>
	        			<a href="/"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
、</a>
	        		<?php }?>
	        	<?php } ?>
	        	</span>
        	<?php }?>
        	<span><a href="/">浏览(<?php echo $_smarty_tpl->tpl_vars['article']->value['read_times'];?>
)</a></span><span><a href="/">评论(<?php echo $_smarty_tpl->tpl_vars['article']->value['comment_times'];?>
)</a></span></p>
        <ul>
        	<?php if ($_smarty_tpl->tpl_vars['article']->value['headimage']) {?>
        		<figure><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['headimage'];?>
"></figure>
        	<?php }?>
        	<?php echo $_smarty_tpl->tpl_vars['article']->value['headcontent'];?>

        	<a href="/" target="_blank" class="readmore">阅读全文</a>
        </ul>
        <p class="autor"></p>
      </div>
      <?php } ?>
    </div>
    <?php if(!class_exists('FISResource', false)){require_once('/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("frontend:widget/page.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."frontend:widget/page.tpl".'"', E_USER_ERROR);}FISResource::load("frontend:widget/page.tpl", $_smarty_tpl->smarty);?>
  </article>
  <aside>
    <?php if(!class_exists('FISResource', false)){require_once('/Users/baidu/Zend/workspaces/php_workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("frontend:widget/aside.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."frontend:widget/aside.tpl".'"', E_USER_ERROR);}FISResource::load("frontend:widget/aside.tpl", $_smarty_tpl->smarty);?>
  </aside>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>

</body><?php if(class_exists('FISResource', false)){echo FISResource::jsHook();}?>
</html> <?php }} ?>
