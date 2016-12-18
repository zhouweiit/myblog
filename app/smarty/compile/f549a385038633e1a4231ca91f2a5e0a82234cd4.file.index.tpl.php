<?php /* Smarty version Smarty-3.1.21, created on 2016-12-18 17:30:34
         compiled from "/home/zhouwei/workspace/myblog/app/smarty/views/template/frontend/page/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12537298955682b2cca97ad1-85468592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f549a385038633e1a4231ca91f2a5e0a82234cd4' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/frontend/page/index/index.tpl',
      1 => 1482053433,
      2 => 'file',
    ),
    '7c6678bcb6c6c4af387b5ed998cb0f869a7b25b6' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/common/page/frontLayout.tpl',
      1 => 1482053433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12537298955682b2cca97ad1-85468592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5682b2ccb68ec8_39581560',
  'variables' => 
  array (
    'TDK' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5682b2ccb68ec8_39581560')) {function content_5682b2ccb68ec8_39581560($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}FISResource::setFramework(FISResource::getUri("common:static/js/mod.js", $_smarty_tpl->smarty)); ?><html xmlns:wb="<?php echo "http://open.weibo.com/wb";?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php if ($_smarty_tpl->tpl_vars['TDK']->value['title']) {
echo $_smarty_tpl->tpl_vars['TDK']->value['title'];?>
 | <?php }?>未舟 - zwiter.com</title>
<?php if (!$_smarty_tpl->tpl_vars['TDK']->value['description']) {?>
<meta name="description"  content="未舟的IT技术博客，常用语言PHP、C、JAVA。关注架构开发、底层开发、性能优化。真心希望大家阅读后能有所收获。www.zwiter.com" />
<?php } else { ?>
<meta name="description"  content="<?php echo $_smarty_tpl->tpl_vars['TDK']->value['description'];?>
" />
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['TDK']->value['keywords']) {?>
<meta name="keywords"  content="排序,正则表达式,程序员,算法,软件开发,AJAX,Algorithm,Android,Bash,book,C++,Code Review,Coding,CSS,Database,Debug,ebook,Erlang,Game,Go,Google,HTML,IE,Java,Javascript,jQuery,Linus Torvalds,Linux,Mac,MySQL,Oracle,OS,Perl,PHP,Programmer,programming,language,Python,Ruby,SQL,Ubuntu,UI,Unix,vim,Web,Windows" />
<?php } else { ?>
<meta name="keywords"  content="<?php echo $_smarty_tpl->tpl_vars['TDK']->value['keywords'];?>
,【未舟】"/>
<?php }?>
<link href="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("frontend:static/css/base.css",$_smarty_tpl->smarty);?>" rel="stylesheet">
<link href="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("frontend:static/css/index.css",$_smarty_tpl->smarty);?>" rel="stylesheet">
<link href="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("frontend:static/css/about.css",$_smarty_tpl->smarty);?>" rel="stylesheet">
<link href="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("frontend:static/css/style.css",$_smarty_tpl->smarty);?>" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/js/jquery-1.8.1.min.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/js/jsencrypt.min.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/js/modernizr.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/js/silder.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/js/jquery.tagcanvas.min.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">


<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/js/modernizr.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<![endif]-->
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::cssHook();?></head>
<body id="<?php echo "type_page";?>">

<div class="ibody">
  <?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("frontend:widget/header.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."frontend:widget/header.tpl".'"', E_USER_ERROR);}FISResource::load("frontend:widget/header.tpl", $_smarty_tpl->smarty);?>
  <article>
  	<?php echo $_smarty_tpl->tpl_vars['navigation']->value;?>

    <div class="bloglist">
      <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articleInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
      <div class="blogs">
        <h3><a class="infolist_article_title" href="/article/info?articleid=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
        <p class="title_meta">
        	<span>发布时间：<a href="/index/index?date=<?php echo $_smarty_tpl->tpl_vars['article']->value['release_datetime'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['release_datetime'];?>
</a></span>
        	<?php if ($_smarty_tpl->tpl_vars['article']->value['tag']) {?>
	        	<span>标签：
	        	<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
	        		<?php if ($_smarty_tpl->tpl_vars['tag']->value['last']) {?>
	        			<a href="/index/index?tagid=<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
	        		<?php } else { ?>
	        			<a href="/index/index?tagid=<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>、
	        		<?php }?>
	        	<?php } ?>
	        	</span>
        	<?php }?>
        	<span><a href="/article/info?articleid=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">浏览(<?php echo $_smarty_tpl->tpl_vars['article']->value['read_times'];?>
)</a></span><span><a href="/article/info?articleid=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
#comment">评论(<?php echo $_smarty_tpl->tpl_vars['article']->value['comment_times'];?>
)</a></span></p>
        <ul>
        	<?php if ($_smarty_tpl->tpl_vars['article']->value['headimage']) {?>
        		<figure><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['headimage'];?>
"></figure>
        	<?php }?>
        	<?php echo $_smarty_tpl->tpl_vars['article']->value['headcontent'];?>

        	<a href="/article/info?articleid=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" class="readmore">阅读全文</a>
        </ul>
        <p class="autor"></p>
      </div>
      <?php } ?>
    </div>
    <?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("frontend:widget/page.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."frontend:widget/page.tpl".'"', E_USER_ERROR);}FISResource::load("frontend:widget/page.tpl", $_smarty_tpl->smarty);?>
  </article>
  <aside>
    <?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("frontend:widget/aside.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."frontend:widget/aside.tpl".'"', E_USER_ERROR);}FISResource::load("frontend:widget/aside.tpl", $_smarty_tpl->smarty);?>
  </aside>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}FISResource::load('frontend:page/index/index.tpl',$_smarty_tpl->smarty, false);?>
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}FISResource::load('common:page/frontLayout.tpl',$_smarty_tpl->smarty, false);?></body><?php if(class_exists('FISResource', false)){echo FISResource::jsHook();}?>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html><?php }} ?>
