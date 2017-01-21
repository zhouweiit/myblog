<?php /* Smarty version Smarty-3.1.21, created on 2017-01-21 22:56:28
         compiled from "/home/zhouwei/workspace/myblog/app/smarty/views/template/backend/page/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20965898695683ce3c625753-80863813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ee1bf9cfc59a5fd525dbb6353723557faa65e9f' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/backend/page/login/index.tpl',
      1 => 1482746678,
      2 => 'file',
    ),
    '9efcdd2efdffcf6946b52f19c93cf2ba09ea9128' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/common/page/backMainLayout.tpl',
      1 => 1482746678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20965898695683ce3c625753-80863813',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5683ce3c6a5d51_24047209',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5683ce3c6a5d51_24047209')) {function content_5683ce3c6a5d51_24047209($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}FISResource::setFramework(FISResource::getUri("common:static/js/mod.js", $_smarty_tpl->smarty)); ?><html lang="<?php echo "zh-CN";?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("backend:static/css/common.css",$_smarty_tpl->smarty);?>" rel="stylesheet"/>
<link href="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("backend:static/css/main.css",$_smarty_tpl->smarty);?>" rel="stylesheet"/>
<link href="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/styles/shCoreDefault.css",$_smarty_tpl->smarty);?>" rel="stylesheet"/>
<link href="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/timepicker/css/jquery-ui.css",$_smarty_tpl->smarty);?>" rel="stylesheet"/>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/js/jquery-1.7.2.min.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("backend:static/js/jquery.SuperSlide.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("backend:static/js/colResizable-1.3.min.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/ckeditor/ckeditor.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/scripts/shCore.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/scripts/shAutoloader.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/scripts/config.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/timepicker/js/jquery-ui.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/timepicker/js/jquery-ui-slide.min.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/timepicker/js/jquery-ui-timepicker-addon.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("backend:static/js/validata.js",$_smarty_tpl->smarty);?>"><?php echo '</script'; ?>
>

<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}FISResource::load("common:static/js/jsencrypt.min.js",$_smarty_tpl->smarty, false);?>

<?php echo '<script'; ?>
 type="text/javascript">
$(function(){  
    $(".list_table").colResizable({
        liveDrag:true,
        gripInnerHtml:"<div class='grip'></div>", 
        draggingClass:"dragging", 
        minWidth:30
    }); 
    
    SyntaxHighlighter.autoloader(
         ['js','jscript','javascript','<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::getUri("common:static/plugin/syntaxhighlighter/scripts/shBrushJScript.js",$_smarty_tpl->smarty);?>'],
         ['bash','shell','scripts/shBrushBash.js'],
         ['css','scripts/shBrushCss.js'],
         ['xml','html','scripts/shBrushXml.js'],
         ['sql','scripts/shBrushSql.js'],
         ['php','scripts/shBrushPhp.js'],
         ['java','scripts/shBrushJava.js'],
         ['c','scripts/shBrushCpp.js']
     ); 
     SyntaxHighlighter.all();
    
 }); 
<?php echo '</script'; ?>
>

<style>
.ui-timepicker-div .ui-widget-header { margin-bottom: 8px; } 
.ui-timepicker-div dl { text-align: left; } 
.ui-timepicker-div dl dt { height: 25px; margin-bottom: -25px; } 
.ui-timepicker-div dl dd { margin: 0 10px 10px 65px; } 
.ui-timepicker-div td { font-size: 90%; } 
.ui-tpicker-grid-label { background: none; border: none; margin: 0; padding: 0; } 
.ui_tpicker_hour_label,.ui_tpicker_minute_label,.ui_tpicker_second_label, 
.ui_tpicker_millisec_label,.ui_tpicker_time_label{padding-left:20px} 
</style>

<title>zwiter博客管理后台</title>
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}echo FISResource::cssHook();?></head>
<body>
    <div class="container">
    

<div style="height:800px;width:100%;">
	<div id="search_bar" class="mt10" style="width:280px;display:block;">
	    <div class="box">
	        <div class="box_border">
	            <div class="box_top">
	                <b class="pl15">登录博客管理系统</b>
	            </div>
	            <div class="box_center pt10 pb10">
	                <table class="form_table" border="0" cellpadding="0" cellspacing="0">
	                    <tr>
	                       <td>&nbsp;&nbsp;用户名</td>
	                       <td>&nbsp;&nbsp;<input type="text"  id="username" class="input-text lh25" size="30"></td>
	                    </tr>
	                    <tr>
	                       <td>&nbsp;&nbsp;密码</td>
                           <td>&nbsp;&nbsp;<input type="password" id="password" class="input-text lh25" size="30"></td>
	                    </tr>
	                    <tr>
	                       <td>&nbsp;&nbsp;验证码</td>
                           <td>
                                &nbsp;&nbsp;<input type="text" id="captcha" class="input-text lh25" size="10">
                                <img src="/backend/login/captcha" id="captcha_img"/>
                           </td>
	                    </tr>
	                    <tr>
                           <td colspan="2">
                                <input id="publickey"  type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['publickey']->value;?>
"/>
                                &nbsp;&nbsp;<input type="submit" id="submitButtom" value="登录" class="ext_btn ext_btn_submit">
                           </td>
                        </tr>
	                </table>
	             </div>
	        </div>
	    </div>
	</div>                 
</div>
<?php $fis_script_priority = 0;ob_start();?>
$(function(){
	$("#submitButtom").click(function(evt) {
	    var username = $.trim($("#username").val());
	    var password = $("#password").val();
	    var captcha = $.trim($("#captcha").val());
	
	    if(username == "" || password == "" || captcha == ""){
	        $("#captcha_img").click();
	        alert("用户名/密码/验证码不得为空");
	        return false;
	    }
	
	    var crypt = new JSEncrypt();
	
	    var publickey = $('#publickey').val();
	
	    crypt.setPublicKey(publickey);
	
	    var encryptPassword = crypt.encrypt($('#password').val());
	
	    var requestdata = {
	        'username':username,
	        'password':encryptPassword,
	        'captcha':captcha
	    };
	    $.ajax({
	        type: "POST",
	        url:"/backend/login/login",
	        data:requestdata,
	        async: true,
	        dataType:'json',
	        error: function(request) {
	           $("#captcha_img").click();
	        },
	        success: function(data) {
	            if(data.status==1){
	                window.location.href="/backend/index/index";
	                return;
	            } else if(data.status==2){
	                alert("您输入的用户名不存在");
	            } else if(data.status==3 || data.status==4){
	                alert("您输入的帐户名/密码/验证码不正确，请重新输入")
	            } else{
	                alert("未知错误。联系我们！")
	            }
	            $("#captcha_img").click();
	        }
	    });
	});
	
	$("#captcha_img").click(function(event) {
        $(this).attr('src','/backend/login/captcha?'+Math.random());
    });
});
<?php $script=ob_get_clean();if($script!==false){if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}if(FISResource::$cp) {if (!in_array(FISResource::$cp, FISResource::$arrEmbeded)){FISResource::addScriptPool($script, $fis_script_priority);FISResource::$arrEmbeded[] = FISResource::$cp;}} else {FISResource::addScriptPool($script, $fis_script_priority);}}FISResource::$cp = null;?>
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}FISResource::load('backend:page/login/index.tpl',$_smarty_tpl->smarty, false);?>
    </div>
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}FISResource::load('common:page/backMainLayout.tpl',$_smarty_tpl->smarty, false);?></body><?php if(class_exists('FISResource', false)){echo FISResource::jsHook();}?>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html><?php }} ?>
