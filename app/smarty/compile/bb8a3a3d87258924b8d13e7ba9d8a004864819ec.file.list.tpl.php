<?php /* Smarty version Smarty-3.1.21, created on 2015-12-29 23:47:43
         compiled from "/home/zhouwei/workspace/myblog/app/smarty/views/template/backend/page/comment/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1538437361567bf01af0dd06-68034286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb8a3a3d87258924b8d13e7ba9d8a004864819ec' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/backend/page/comment/list.tpl',
      1 => 1451403496,
      2 => 'file',
    ),
    '9efcdd2efdffcf6946b52f19c93cf2ba09ea9128' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/common/page/backMainLayout.tpl',
      1 => 1450927308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1538437361567bf01af0dd06-68034286',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_567bf01b069f31_75463629',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567bf01b069f31_75463629')) {function content_567bf01b069f31_75463629($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    

<div id="table" class="mt10">
    <div class="box span10 oh">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
            <tr>
                <th width="3%"></th>
                <th width="5%">ID</th>
                <th width="45%">评论</th>
                <th width="28%">关键字</th>
                <th width="20%">操作</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commentInfos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
            <tr class="tr">
                <td align='center'><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value->getId();?>
|<?php echo $_smarty_tpl->tpl_vars['comment']->value->getArticleId();?>
" class="commentid"/></td>
                <td align='center'><?php echo $_smarty_tpl->tpl_vars['comment']->value->getId();?>
</td>
                <td>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['comment']->value->getContent();?>
</td>
                <td>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['comment']->value->getKeywords();?>
</td>
                <td align="center">
                    <input type="submit"  commentid="<?php echo $_smarty_tpl->tpl_vars['comment']->value->getId();?>
" value="跳转" onclick='window.open("/article/info?articleid=<?php echo $_smarty_tpl->tpl_vars['comment']->value->getArticleId();?>
")' class="ext_btn ext_btn_submit">
                </td>
            </tr>
            <?php } ?>
            <tr>
                <td colspan="5" align="right">
                    <input type="submit" value="通过"  id="pass" class="ext_btn ext_btn_submit">
                    <input type="submit" value="不通过" id="nopass" class="ext_btn ext_btn_submit">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
            </tr>
        </table>
        
        <div class="page mt10">
           <?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("backend:widget/page.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."backend:widget/page.tpl".'"', E_USER_ERROR);}FISResource::load("backend:widget/page.tpl", $_smarty_tpl->smarty);?>
        </div>
    </div>
</div>
<?php $fis_script_priority = 0;ob_start();?>
$(function(){
    $("#pass").click(function(){
        var id='';
        $('input.commentid').each(function(){
            if ($(this).attr('checked') == 'checked'){
                id += "," + $(this).attr('value');
            }
        }); 
        if (id == '0'){
			alert("请选择内容");
            return;
        }
        $.ajax({
            url: '/backend/comment/ajaxCheck',
            type: 'post',
            dataType: 'json',
            data:'id='+id+"&check=1",
            success: function( resp, status ) {
               window.location.reload(); 
            },
            error: function (data, status, e){
            }
        });
    });
    
    $("#nopass").click(function(){
        var id='';
        $('input.commentid').each(function(){
            if ($(this).attr('checked') == 'checked'){
                id += "," + $(this).attr('value');
            }
        }); 
        if (id == '0'){
			alert("请选择内容");
            return;
        }
        $.ajax({
            url: '/backend/comment/ajaxCheck',
            type: 'post',
            dataType: 'json',
            data:'id='+id+"&check=0",
            success: function( resp, status ) {
               window.location.reload(); 
            },
            error: function (data, status, e){
            }
        });
    });
})
<?php $script=ob_get_clean();if($script!==false){if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}if(FISResource::$cp) {if (!in_array(FISResource::$cp, FISResource::$arrEmbeded)){FISResource::addScriptPool($script, $fis_script_priority);FISResource::$arrEmbeded[] = FISResource::$cp;}} else {FISResource::addScriptPool($script, $fis_script_priority);}}FISResource::$cp = null;?>

    </div>
</body><?php if(class_exists('FISResource', false)){echo FISResource::jsHook();}?>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html><?php }} ?>
