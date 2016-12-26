<?php /* Smarty version Smarty-3.1.21, created on 2016-12-26 18:05:13
         compiled from "/home/zhouwei/workspace/myblog/app/smarty/views/template/frontend/page/article/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8571675435682f85a2bf0f7-28588794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f3d2e08a2877cc91eb4b8723a792a87c0757191' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/frontend/page/article/info.tpl',
      1 => 1482746678,
      2 => 'file',
    ),
    '7c6678bcb6c6c4af387b5ed998cb0f869a7b25b6' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/common/page/frontLayout.tpl',
      1 => 1482746678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8571675435682f85a2bf0f7-28588794',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5682f85a3f7df6_34351278',
  'variables' => 
  array (
    'TDK' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5682f85a3f7df6_34351278')) {function content_5682f85a3f7df6_34351278($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
,未舟"/>
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
  	<?php echo $_smarty_tpl->tpl_vars['navigation']->value;?>

    <div class="index_about">
      <h2 class="c_titile infolist_article_title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2>
      <p class="box_c">
      	<span class="d_time">发布时间：<a href="/index/index?date=<?php echo $_smarty_tpl->tpl_vars['article']->value['release_datetime'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['release_datetime'];?>
</a></span>
      	<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
        	<span>标签：
        	<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
      </p>
      
      <ul class="infos">
        <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

      </ul>
      
      <div class="bdsharebuttonbox">
      	<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
      	<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
      	<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
      	<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
      	<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
      	<a href="#" class="bds_fbook" data-cmd="fbook" title="分享到Facebook"></a>
      	<a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a>
      	<a href="#" class="bds_more" data-cmd="more"></a>
      </div>
	  <?php echo '<script'; ?>
>
	  	window._bd_share_config={
  			"common":{
  				"bdText":"<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
 | www.zwiter.com",
  				"bdDesc":"<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
",
  				"bdUrl":"http://www.zwiter.com/article/info?articleid=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
",
  				<?php if ($_smarty_tpl->tpl_vars['article']->value['headimage']) {?>
  				"bdPic":"<?php echo $_smarty_tpl->tpl_vars['article']->value['headimage'];?>
",
  				<?php }?>
  				"bdMini":"2",
  				"bdMiniList":false,
  				"bdStyle":"1",
  				"bdSize":"16"
  			},
  			"share":{},
  			"image":{
  				"viewList":["weixin","tsina","tqq","qzone","renren","fbook","douban"],
  				"viewText":"分享到：",
  				"viewSize":"16"
  			},
 			"selectShare":{
 				"bdContainerClass":null,
 				"bdSelectMiniList":["weixin","tsina","tqq","qzone","renren","fbook","douban"]
 			}
	  	};
	  	with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
	  	
	  <?php echo '</script'; ?>
>
     
      
      
      <?php if ($_smarty_tpl->tpl_vars['relateArticle']->value) {?>
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
	        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relateArticle']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
				<li><a href="/article/info?articleid=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></li>
			<?php } ?>
        </ul>
      </div>
      <?php }?>
      
      <div class="comment" id="comment">
        <h2 style="background: url(/static/frontend/images/comment.png) 10px center no-repeat; ">热点评论</h2>
        
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
" quotefloor="#floor-<?php echo $_smarty_tpl->tpl_vars['floor']->value;?>
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
        	<input type="hidden" name="articleid" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"/>
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
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}FISResource::load('frontend:page/article/info.tpl',$_smarty_tpl->smarty, false);?>
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}FISResource::load('common:page/frontLayout.tpl',$_smarty_tpl->smarty, false);?></body><?php if(class_exists('FISResource', false)){echo FISResource::jsHook();}?>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html>
<?php }} ?>
