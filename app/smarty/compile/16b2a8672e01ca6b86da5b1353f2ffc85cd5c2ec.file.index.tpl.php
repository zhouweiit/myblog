<?php /* Smarty version Smarty-3.1.21, created on 2017-02-26 16:10:18
         compiled from "/home/zhouwei/workspace/myblog/app/smarty/views/template/backend/page/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9233262245682b2cb8d7d88-39408736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16b2a8672e01ca6b86da5b1353f2ffc85cd5c2ec' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/backend/page/index/index.tpl',
      1 => 1488096605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9233262245682b2cb8d7d88-39408736',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5682b2cb90dad0_78934768',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5682b2cb90dad0_78934768')) {function content_5682b2cb90dad0_78934768($_smarty_tpl) {?><!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <link href="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("backend:static/css/common.css",$_smarty_tpl->smarty);?>" rel="stylesheet">
  <link href="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("backend:static/css/style.css",$_smarty_tpl->smarty);?>" rel="stylesheet">
  <?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/js/jquery-1.8.1.min.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("backend:static/js/jquery.SuperSlide.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("backend:static/js/common.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">
  $(function(){
      $("#logout").click(function(){
          $.ajax({
              url: '/backend/login/logout',
              type: 'post',
              success: function( resp, status ) {
                  window.location = "/backend/login/index";
              },
              error: function (data, status, e)
              {
              }
          });
      });
  });
  <?php echo '</script'; ?>
>
	
  <title>zwiter博客管理后台</title>
</head>
<body>
    <div class="top">
      <div id="top_t">
        <div id="logo" class="fl">只有逆风的方向，才更适合飞翔</div>
        <div id="photo_info" class="fr">
          <div id="photo" class="fl">
          </div>
          <div id="base_info" class="fr">
            <div class="help_info">
            </div>
            <div class="info_center">
                <a href="javascript:void(0)" id="logout" style="color:white;">退出登录</a>
            </div>
          </div>
        </div>
      </div>
      <div id="side_here">
        <div id="side_here_l" class="fl"></div>
        <div id="side_here_r">欢迎您</div>
      </div>
    </div>
    <div class="side">
        <div class="sideMenu" style="margin:0 auto">
          <h3>文章管理</h3>
          <ul>
            <li href="/backend/article/list">文章列表</li>
            <li href="/backend/article/release">文章发布</li>
            <li href="/backend/comment/list">评论审核</li>
          </ul>
          <h3>文件管理</h3>
          <ul>
            <li href="/backend/file/list">文件列表</li>
            <li href="/backend/file/upload">文件上传</li>
          </ul>
          <h3>字典管理</h3>
          <ul>
            <li>分类管理</li>
            <li>标签管理</li>
            <li>友情链接管理</li>
          </ul>
          <h3>工具集</h3>
          <ul>
            <li href="/backend/index/main">html demo</li>
          </ul>
       </div>
    </div>
    <div class="main">
       <iframe name="right" id="rightMain" src="/backend/index/welcom" frameborder="no" scrolling="auto" width="100%" height="auto" allowtransparency="true"></iframe>
    </div>
    <div class="bottom">
      <div id="bottom_bg">zwiter博客管理后台</div>
    </div>
    <div class="scroll">
        <a href="javascript:;" class="per" title="使用鼠标滚轴滚动侧栏" onclick="menuScroll(1);"></a>
        <a href="javascript:;" class="next" title="使用鼠标滚轴滚动侧栏" onclick="menuScroll(2);"></a>
    </div>
</body>
</html><?php }} ?>
