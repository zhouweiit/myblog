<?php /* Smarty version Smarty-3.1.21, created on 2016-12-07 22:44:34
         compiled from "/home/zhouwei/workspace/myblog/app/smarty/views/template/frontend/widget/aside.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3807236155682b2ccbcfa18-23442581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f639a84393b471a92620da9a26c1e444fc16f1f9' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/frontend/widget/aside.tpl',
      1 => 1481118904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3807236155682b2ccbcfa18-23442581',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5682b2ccc1ea68_21120493',
  'variables' => 
  array (
    'aside' => 0,
    'article' => 0,
    'tag_id' => 0,
    'tag' => 0,
    'info' => 0,
    'date' => 0,
    'comment' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5682b2ccc1ea68_21120493')) {function content_5682b2ccc1ea68_21120493($_smarty_tpl) {?><br />
<div class="tj_news">
	<h2>
		<p class="tj_t1">最新文章</p>
	</h2>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aside']->value['newarticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
			<li><a href="/article/info?articleid=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['all_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['name'];?>
</a></li>
		<?php } ?>
	</ul> 
	<h2>
		<p class="tj_t1">全站热门</p>
	</h2>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aside']->value['hotArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
			<li><a href="/article/info?articleid=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['all_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['name'];?>
</a></li>
		<?php } ?>
	</ul> 
</div>	   
<div class="tj_news">
	<h2>
	  <p class="tj_t1">标签</p>
	</h2>
	<div class="tag">
		<div id="myCanvasContainer">
	      <canvas width="230" height="230" id="myCanvas">
	        <p>Anything in here will be replaced on browsers that support the canvas element</p>
	      </canvas>
	    </div>
	    <div id="tags">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_smarty_tpl->tpl_vars['tag_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aside']->value['archiveTags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag_id']->value = $_smarty_tpl->tpl_vars['tag']->key;
?>
			  		<li><a href="/index/index?tagid=<?php echo $_smarty_tpl->tpl_vars['tag_id']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name'];?>
</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>

<div class="tj_news">
	<h2>
	  <p class="tj_t1">归档</p>
	</h2>
	<div class="archive">
		<div class="archive_date">
			<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aside']->value['archiveInfo']['date']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['date']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
				<a href="/index/index?date=<?php echo $_smarty_tpl->tpl_vars['info']->value['date'];?>
"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
（<?php echo $_smarty_tpl->tpl_vars['info']->value['times'];?>
）</a>
			<?php } ?>
		</div>
		<div class="archive_category">
			<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aside']->value['archiveInfo']['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
				<a href="/index/index?categoryid=<?php echo $_smarty_tpl->tpl_vars['info']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['category_name'];?>
（<?php echo $_smarty_tpl->tpl_vars['info']->value['times'];?>
）</a>
			<?php } ?>
		</div>
		<div class="clear"></div>
	</div>
</div> 

<div class="ph_news">
	<h2>
	  <p class="tj_t1">最新评论</p>
	</h2>
	<ul class="pl_n">
		<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aside']->value['newComments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
		<dl>
		    <dd class="comment_name"><?php echo $_smarty_tpl->tpl_vars['comment']->value['name'];?>
</dd>
		    <dd><a href="/article/info?articleid=<?php echo $_smarty_tpl->tpl_vars['comment']->value['article_id'];?>
#comment"><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</a></dd>
		 </dl>
		<?php } ?>
	</ul>
</div>

<div class="links">
  <h2>
    <p class="tj_t1">友情链接</p>
  </h2>
  <ul>
  	 <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aside']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
  	 	<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value->getName();?>
</a></li>
  	 <?php } ?>
  </ul>
</div>

<div class="ph_news">
	<h2>
	  <p class="tj_t1">联系方式</p>
	</h2>
	<ul class="pl_n">
		<dl>
		    <dd><a href="mailto:zhouwei_work@163.com">邮箱：zhouwei_work@163.com</a></dd>
		    <dd><a href="https://github.com/zhouweiit">github：github.com/zhouweiit</a></dd>
		 </dl>
	</ul>
</div>

<div class="copyright">
  <ul>
    <p>Copyright © 2015 zwiter</p>
    <p>All Rights Reserved</p>
    <p>京ICP备15063372号-1</p>
  </ul>
</div>
<?php }} ?>
