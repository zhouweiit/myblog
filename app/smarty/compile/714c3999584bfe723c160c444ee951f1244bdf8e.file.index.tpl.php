<?php /* Smarty version Smarty-3.1.21, created on 2016-01-03 17:23:30
         compiled from "/home/zhouwei/workspace/myblog/app/smarty/views/template/frontend/page/demo/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21245840725688e892c78fe3-23766486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '714c3999584bfe723c160c444ee951f1244bdf8e' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/frontend/page/demo/index.tpl',
      1 => 1450927308,
      2 => 'file',
    ),
    '7c6678bcb6c6c4af387b5ed998cb0f869a7b25b6' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/common/page/frontLayout.tpl',
      1 => 1451807868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21245840725688e892c78fe3-23766486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TDK' => 0,
    'aside' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5688e892d2bca2_79581907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5688e892d2bca2_79581907')) {function content_5688e892d2bca2_79581907($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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


<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/js/modernizr.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<![endif]-->
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::cssHook();?></head>
<body id="<?php echo "type_page";?>">

<div class="ibody">
  <?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("frontend:widget/headerdemo.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."frontend:widget/headerdemo.tpl".'"', E_USER_ERROR);}FISResource::load("frontend:widget/headerdemo.tpl", $_smarty_tpl->smarty);?>
  <article>
  	<h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">模板分享</a>><a href="1/">个人博客模板</a></h2>
    <div class="bloglist">
      <div class="blogs">
        <h3><a href="/">黑色Html5个人博客模板主题《如影随形》</a></h3>
        <p class="title_meta"><span>发布时间：2014-04-08</span><span>分类：<a href="/">java</a>、<a href="/">优化</a>、<a href="/">技术</a></span><span><a href="/">浏览(459)</a></span><span><a href="/">评论(30)</a></span></p>
        <ul>
          <figure><img src="/static/frontend/images/01.jpg"/></figure>
          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>
          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>
          <p>看到昔日好友发了一篇日志《咎由自取》他说他是一个悲观者，感觉社会抛弃了他，脾气、性格在6年的时间里变化很大，很难适应这个社会。人生其实就是不断犯错的过程，在这个过程中不断的犯错，不断的吸取教训，不断的成长。也许日子里的惊涛骇浪，不过是人生中的水花摇晃，别用显微镜放大你的悲伤。</p>
          <a href="/" target="_blank" class="readmore">阅读全文</a>
        </ul>
        <p class="autor"></p>
      </div>
      <div class="blogs">
        <h3><a href="/">个人博客模板（2014草根寻梦）</a></h3>
        <p class="title_meta"><span>发布时间：2014-04-08</span><span>分类：<a href="/">java</a>、<a href="/">优化</a>、<a href="/">技术</a></span><span><a href="/">浏览(459)</a></span><span><a href="/">评论(30)</a></span></p>
        <ul>
          <figure><img src="/static/frontend/images/02.jpg" ></figure>
          <p>2014第一版《草根寻梦》个人博客模板简单、优雅、稳重、大气、低调。专为年轻有志向却又低调的草根站长设计。模板采用html5+css3设计，nav导航实现鼠标悬停渐变显示英文标题的效果。banner部分，选择大图作为背景，利用css3中animation属性结合文字图片实现文字从左到右的渐变效果</p>
          <p>2014第一版《草根寻梦》个人博客模板简单、优雅、稳重、大气、低调。专为年轻有志向却又低调的草根站长设计。模板采用html5+css3设计，nav导航实现鼠标悬停渐变显示英文标题的效果。banner部分，选择大图作为背景，利用css3中animation属性结合文字图片实现文字从左到右的渐变效果</p>
          <p>2014第一版《草根寻梦》个人博客模板简单、优雅、稳重、大气、低调。专为年轻有志向却又低调的草根站长设计。模板采用html5+css3设计，nav导航实现鼠标悬停渐变显示英文标题的效果。banner部分，选择大图作为背景，利用css3中animation属性结合文字图片实现文字从左到右的渐变效果</p>
          <p>2014第一版《草根寻梦》个人博客模板简单、优雅、稳重、大气、低调。专为年轻有志向却又低调的草根站长设计。模板采用html5+css3设计，nav导航实现鼠标悬停渐变显示英文标题的效果。banner部分，选择大图作为背景，利用css3中animation属性结合文字图片实现文字从左到右的渐变效果</p>
          <a href="/" target="_blank" class="readmore">阅读全文</a>
        </ul>
        <p class="autor"></p>
      </div>
      <div class="blogs">
        <h3><a href="/">我的个人博客之——阿里云空间选择</a></h3>
        <p class="title_meta"><span>发布时间：2014-04-08</span><span>分类：<a href="/">java</a>、<a href="/">优化</a>、<a href="/">技术</a></span><span><a href="/">浏览(459)</a></span><span><a href="/">评论(30)</a></span></p>
        <ul>
          <figure><img src="/static/frontend/images/03.png" ></figure>
          <p>之前服务器放在电信机房， 联通用户访问速度很不稳定，经常出现访问速度慢的问题，换到阿里云解决了之前的问题。很多人都问我的博客选得什么空间，一年的费用得多少钱，今天我列个表出来，供大家参考。</p>
          <a href="/" target="_blank" class="readmore">阅读全文</a>
        </ul>
        <p class="autor"></p>
      </div>
      <div class="blogs">
        <h3><a href="/">从摄影作品中获取网页颜色搭配技巧</a></h3>
        <p class="title_meta"><span>发布时间：2014-04-08</span><span>分类：<a href="/">java</a>、<a href="/">优化</a>、<a href="/">技术</a></span><span><a href="/">浏览(459)</a></span><span><a href="/">评论(30)</a></span></p>
        <ul>
          <figure><img src="/static/frontend/images/04.jpg" ></figure>
          <p>作为一个优秀、专业的网页设计师，首先要了解各种颜色的象征，以及不同类型网站常用的色彩搭配。色彩搭配看似复杂,但并不神秘。一般来说,网页的背景色应该柔和一些、素一些、淡一些,再配上深色的文字,使人看起来自然、舒畅。色彩是人的视觉最敏感的东西。主页的色彩处理得好，可以锦上添花，达到事半功倍的效果。</p>
          <p>作为一个优秀、专业的网页设计师，首先要了解各种颜色的象征，以及不同类型网站常用的色彩搭配。色彩搭配看似复杂,但并不神秘。一般来说,网页的背景色应该柔和一些、素一些、淡一些,再配上深色的文字,使人看起来自然、舒畅。色彩是人的视觉最敏感的东西。主页的色彩处理得好，可以锦上添花，达到事半功倍的效果。</p>
          <p>作为一个优秀、专业的网页设计师，首先要了解各种颜色的象征，以及不同类型网站常用的色彩搭配。色彩搭配看似复杂,但并不神秘。一般来说,网页的背景色应该柔和一些、素一些、淡一些,再配上深色的文字,使人看起来自然、舒畅。色彩是人的视觉最敏感的东西。主页的色彩处理得好，可以锦上添花，达到事半功倍的效果。</p>
          <p>作为一个优秀、专业的网页设计师，首先要了解各种颜色的象征，以及不同类型网站常用的色彩搭配。色彩搭配看似复杂,但并不神秘。一般来说,网页的背景色应该柔和一些、素一些、淡一些,再配上深色的文字,使人看起来自然、舒畅。色彩是人的视觉最敏感的东西。主页的色彩处理得好，可以锦上添花，达到事半功倍的效果。</p>
          <a href="/" target="_blank" class="readmore">阅读全文</a>
        </ul>
        <p class="autor"></p>
      </div>
      <div class="blogs">
        <h3><a href="/">css3制作的一个魔方</a></h3>
        <p class="title_meta"><span>发布时间：2014-04-08</span><span>分类：<a href="/">java</a>、<a href="/">优化</a>、<a href="/">技术</a></span><span><a href="/">浏览(459)</a></span><span><a href="/">评论(30)</a></span></p>
        <ul>
          <figure><img src="/static/frontend/images/04.png" ></figure>
          <p>
          本应用由CSS3代码实现，无图片和flash，请使用Chrome等webkit内核浏览器或Firefox打开。破解攻略和大家分享下：首先，破解魔方，我们就要先了解它的结构，魔方共6色6面，每面又分为中央块（最中间的块6个）、角块（4角的块8个）和边块（4条边中间的块12个）...
          </p>
          <a href="/" target="_blank" class="readmore">阅读全文</a>
        </ul>
        <p class="autor"></p>
      </div>
      <div class="blogs">
        <h3><a href="/">css3制作的一个魔方</a></h3>
        <p class="title_meta"><span>发布时间：2014-04-08</span><span>分类：<a href="/">java</a>、<a href="/">优化</a>、<a href="/">技术</a></span><span><a href="/">浏览(459)</a></span><span><a href="/">评论(30)</a></span></p>
        <ul>
           	<figure><img src="/static/frontend/images/04.png" ></figure>
        	<p>本应用由CSS3代码实现，无图片和flash，请使用Chrome等webkit内核浏览器或Firefox打开。破解攻略和大家分享下：首先，破解魔方，我们就要先了解它的结构，魔方共6色6面，每面又分为中央块（最中间的块6个）、角块（4角的块8个）和边块（4条边中间的块12个）...</p>
        	<p>本应用由CSS3代码实现，无图片和flash，请使用Chrome等webkit内核浏览器或Firefox打开。破解攻略和大家分享下：首先，破解魔方，我们就要先了解它的结构，魔方共6色6面，每面又分为中央块（最中间的块6个）、角块（4角的块8个）和边块（4条边中间的块12个）...首先，破解魔方，我们就要先了解它的结构，魔方共6色6面，每面又分为中央块（最中间的块6个）、角块（4角的块8个）和边块（4条边中间的块12个）...</p>
        	<a href="/" target="_blank" class="readmore">阅读全文</a>
        </ul>
        <p class="autor"></p>
      </div>
      <div class="blogs">
        <h3><a href="/">css3制作的一个魔方</a></h3>
        <p class="title_meta"><span>发布时间：2014-04-08</span><span>分类：<a href="/">java</a>、<a href="/">优化</a>、<a href="/">技术</a></span><span><a href="/">浏览(459)</a></span><span><a href="/">评论(30)</a></span></p>
        <ul>
        	<p>本应用由CSS3代码实现，无图片和flash，请使用Chrome等webkit内核浏览器或Firefox打开。破解攻略和大家分享下：首先，破解魔方，我们就要先了解它的结构，魔方共6色6面，每面又分为中央块（最中间的块6个）、角块（4角的块8个）和边块（4条边中间的块12个）...</p>
        	<p>本应用由CSS3代码实现，无图片和flash，请使用Chrome等webkit内核浏览器或Firefox打开。破解攻略和大家分享下：首先，破解魔方，我们就要先了解它的结构，魔方共6色6面，每面又分为中央块（最中间的块6个）、角块（4角的块8个）和边块（4条边中间的块12个）...首先，破解魔方，我们就要先了解它的结构，魔方共6色6面，每面又分为中央块（最中间的块6个）、角块（4角的块8个）和边块（4条边中间的块12个）...</p>
        	<a href="/" target="_blank" class="readmore">阅读全文</a>
        </ul>
        <p class="autor"></p>
      </div>
    </div>
    <div class="page"><a>&lt;&lt;</a><a>&lt;</a></a><b>1</b><a href="/">2</a><a href="/">3</a><a href="/">4</a><a href="/">5</a><a href="/">&gt;</a><a href="/">&gt;&gt;</a></div>
  </article>
  <aside>
    <?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("frontend:widget/asidedemo.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."frontend:widget/asidedemo.tpl".'"', E_USER_ERROR);}FISResource::load("frontend:widget/asidedemo.tpl", $_smarty_tpl->smarty);?>
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
