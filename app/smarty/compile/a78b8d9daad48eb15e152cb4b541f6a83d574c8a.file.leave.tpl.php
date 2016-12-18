<?php /* Smarty version Smarty-3.1.21, created on 2016-12-15 10:56:32
         compiled from "/home/zhouwei/workspace/myblog/app/smarty/views/template/frontend/page/message/leave.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10508169195682f85ae27c37-02330835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a78b8d9daad48eb15e152cb4b541f6a83d574c8a' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/frontend/page/message/leave.tpl',
      1 => 1481118904,
      2 => 'file',
    ),
    '7c6678bcb6c6c4af387b5ed998cb0f869a7b25b6' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/common/page/frontLayout.tpl',
      1 => 1481643974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10508169195682f85ae27c37-02330835',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5682f85af0af07_76214636',
  'variables' => 
  array (
    'TDK' => 0,
    'aside' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5682f85af0af07_76214636')) {function content_5682f85af0af07_76214636($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}FISResource::setFramework(FISResource::getUri("common:static/js/mod.js", $_smarty_tpl->smarty)); ?><html xmlns:wb="<?php echo "http://open.weibo.com/wb";?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php if ($_smarty_tpl->tpl_vars['TDK']->value['title']) {
echo $_smarty_tpl->tpl_vars['TDK']->value['title'];?>
 | <?php }?>未舟 - www.zwiter.com</title>
<?php if (!$_smarty_tpl->tpl_vars['TDK']->value['description']) {?>
<meta name="description"  content="一个不严谨的技术博客，因为博客内容充满了技术与段子 | 未舟 - www.zwiter.com" />
<?php } else { ?>
<meta name="description"  content="<?php echo $_smarty_tpl->tpl_vars['TDK']->value['description'];?>
" />
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['TDK']->value['keywords']) {?>
<meta name="keywords"  content="<?php echo $_smarty_tpl->tpl_vars['aside']->value['tagStr'];?>
" />
<?php } else { ?>
<meta name="keywords"  content="<?php echo $_smarty_tpl->tpl_vars['TDK']->value['keywords'];?>
,未舟 - www.zwiter.com"/>
<?php }?>
<link href="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("frontend:static/css/base.css",$_smarty_tpl->smarty);?>" rel="stylesheet">
<link href="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("frontend:static/css/index.css",$_smarty_tpl->smarty);?>" rel="stylesheet">
<link href="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("frontend:static/css/about.css",$_smarty_tpl->smarty);?>" rel="stylesheet">
<link href="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("frontend:static/css/style.css",$_smarty_tpl->smarty);?>" rel="stylesheet">
<link href="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/styles/shCoreDefault.css",$_smarty_tpl->smarty);?>" rel="stylesheet"/>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/js/jquery-1.8.1.min.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("backend:static/js/validata.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>

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
  	<h2 class="about_h">您现在的位置是：<a href="/">留言小本</a>&gt;&nbsp;最新留言</h2>
    <div class="index_about">
      <ul class="infos" style="margin-bottom:5px;">
        <p style="font-size:15px;font-weight:bold;">欢迎您给我留言！同时，您还可以关注我的微博、微信、github</p>
      </ul>
      
      <div class="comment" id="comment">
        <h2 style="background: url(/static/frontend/images/comment.png) 10px center no-repeat; ">网友留言</h2>
        
        <?php $_smarty_tpl->tpl_vars["floor"] = new Smarty_variable(1, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['commentInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['commentInfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['commentInfo']->key => $_smarty_tpl->tpl_vars['commentInfo']->value) {
$_smarty_tpl->tpl_vars['commentInfo']->_loop = true;
?>
       	<div class="comment_info" id="floor-<?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
">
       		<div class="comment_user">
        		<img src="/static/frontend/images/people.png" style="width:70px;">
        		<div  class="comment_user_name" style="word-wrap:break-word;width:70px;">
        			<?php echo $_smarty_tpl->tpl_vars['commentInfo']->value['comment']->getName();?>

        		</div>
        		<div class="clear"></div>
        	</div>
        	<div style="float:left;padding-left:23px;font-weight:normal;">
	        	<label style="float:left;width:200px;"><?php echo $_smarty_tpl->tpl_vars['commentInfo']->value['date'];?>
 &nbsp;&nbsp;|&nbsp; <a href="#floor-<?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
" class="floor">#<?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
</a></label>
	        	<label style="float:right;margin-left:275px;"><a class='replay replaybutton' name="<?php echo $_smarty_tpl->tpl_vars['commentInfo']->value['comment']->getName();?>
" href='#form_comment'>回复</a> | <a class='replay quotebutton' pid="<?php echo $_smarty_tpl->tpl_vars['commentInfo']->value['comment']->getId();?>
" pidnum="<?php echo $_smarty_tpl->tpl_vars['commentInfo']->value['comment']->getId();?>
,<?php echo $_smarty_tpl->tpl_vars['commentInfo']->value['comment']->getPid();?>
" href='#form_comment'>盖楼</a></label>
	        	<div class="clear"></div>
        	</div>
        	
        	<div class="comment_content">
        		<div style="width:565px;">
        			
        			<?php  $_smarty_tpl->tpl_vars['fatherComment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fatherComment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commentInfo']->value['father']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fatherComment']->key => $_smarty_tpl->tpl_vars['fatherComment']->value) {
$_smarty_tpl->tpl_vars['fatherComment']->_loop = true;
?>
       					<?php $_smarty_tpl->tpl_vars["px"] = new Smarty_variable((500-($_smarty_tpl->tpl_vars['fatherComment']->value['count']-1)*50), null, 0);?>
       				<div class='comment_quote' style="width:<?php echo $_smarty_tpl->tpl_vars['px']->value;?>
px;">
        				<?php if ($_smarty_tpl->tpl_vars['fatherComment']->value['count']<10) {?>
        					<div style="font-weight:bold;">
        						<?php echo $_smarty_tpl->tpl_vars['fatherComment']->value['comment']->getName();?>
：
        					</div>
        				<?php }?>
        			<?php } ?>
        			
        			
        			<?php  $_smarty_tpl->tpl_vars['fatherComment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fatherComment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commentInfo']->value['fatherDesc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fatherComment']->key => $_smarty_tpl->tpl_vars['fatherComment']->value) {
$_smarty_tpl->tpl_vars['fatherComment']->_loop = true;
?>
       					<div class="comment_content_info">
        				<?php if ($_smarty_tpl->tpl_vars['fatherComment']->value['count']<10) {?>
			        			<?php echo $_smarty_tpl->tpl_vars['fatherComment']->value['comment']->getContent();?>

			        	<?php } else { ?>
			        			......
			        	<?php }?>	
			        	</div>
        			</div>
        			<?php } ?>
        			
        			<div class="comment_content_info">
        				<?php echo $_smarty_tpl->tpl_vars['commentInfo']->value['comment']->getContent();?>

        			</div>
        			
        		</div>
        		<div class="clear"></div>
        	</div>
        	<div class="clear"></div>
        </div>
        <?php $_smarty_tpl->tpl_vars["floor"] = new Smarty_variable($_smarty_tpl->tpl_vars['floor']->value+1, null, 0);?>
        <?php } ?>
        <?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("frontend:widget/page.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."frontend:widget/page.tpl".'"', E_USER_ERROR);}FISResource::load("frontend:widget/page.tpl", $_smarty_tpl->smarty);?>
        <div style="float:block;height:0px;"></div>
        
        <form id="form_comment" style="border-top:#dcdcdc 1px dashed;font-size:12px;color:#756f71;" method="post" action="/article/commitComment">
        	<input class="inputblue" name="name" id="comment_name" type="text" style="color:#756f71;width:200px;padding-left:5px;padding-right:5px;" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
"/> 昵称 (必填)<br />
        	<input class="inputblue" name="email" id="comment_email" type="text" style="color:#756f71;width:200px;padding-left:5px;padding-right:5px;" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['useremail'];?>
"/> 电子邮箱 (我们会为您保密)<br />
        	<textarea class="inputblue" name="content" id="comment_content" style="color:#756f71;width:550px;height:150px;padding:5px;font-size:12px;"></textarea><br />
        	<input type="hidden" id="form_comment_pid" name="pid" value=""/>
        	<input type="hidden" name="articleid" value="0"/>
        	<input type="hidden" name="comment_floor" value="<?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
"/>
        	<div class="commentsubmit" id="comment_submit">提交评论</div>
        </form>
        
      </div>
    </div>
  </article>
  <aside>
    <?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("frontend:widget/aside.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."frontend:widget/aside.tpl".'"', E_USER_ERROR);}FISResource::load("frontend:widget/aside.tpl", $_smarty_tpl->smarty);?>
  </aside>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>


</body><?php if(class_exists('FISResource', false)){echo FISResource::jsHook();}?>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){  
	SyntaxHighlighter.autoloader(
		['js','jscript','javascript','<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/scripts/shBrushJScript.js",$_smarty_tpl->smarty);?>'],
		['bash','shell','<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/scripts/shBrushBash.js",$_smarty_tpl->smarty);?>'],
		['css','css','<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/scripts/shBrushCss.js",$_smarty_tpl->smarty);?>'],
		['xml','html','<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/scripts/shBrushXml.js",$_smarty_tpl->smarty);?>'],
		['sql','sq','<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/scripts/shBrushSql.js",$_smarty_tpl->smarty);?>'],
		['php','php','<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/scripts/shBrushPhp.js",$_smarty_tpl->smarty);?>'],
		['java','java','<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/scripts/shBrushJava.js",$_smarty_tpl->smarty);?>'],
		['c','c','<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/scripts/shBrushCpp.js",$_smarty_tpl->smarty);?>']
	); 
	SyntaxHighlighter.all();

}); 
<?php echo '</script'; ?>
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
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/scripts/shCore.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/scripts/shAutoloader.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html>
<?php }} ?>
