<?php /* Smarty version Smarty-3.1.21, created on 2015-12-24 21:44:10
         compiled from "/home/zhouwei/workspace/myblog/app/smarty/views/template/backend/page/article/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:626698862567bf01a060095-59060113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cd9c06e2e54955740e4c33ab46e7f1b15e827f5' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/backend/page/article/list.tpl',
      1 => 1450964648,
      2 => 'file',
    ),
    '9efcdd2efdffcf6946b52f19c93cf2ba09ea9128' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/common/page/backMainLayout.tpl',
      1 => 1450927308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '626698862567bf01a060095-59060113',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_567bf01a191c76_53529177',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567bf01a191c76_53529177')) {function content_567bf01a191c76_53529177($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    
<form method="post" action="/backend/article/list" id="searchform">
<div id="search_bar" class="mt10">
    <div class="box">
        <div class="box_border">
            <div class="box_top">
                <b class="pl15">搜索</b>
            </div>
            <div class="box_center pt10 pb10">
                <table class="form_table" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="header">文章ID</td>
                        <td><input type="text" name="article_id" class="input-text lh25" size="30" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['article_id'];?>
"></td>
                        <td class="header">阅读次数</td>
                        <td><div style="width:165px;"><input type="text" name="read_times_start" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['read_times_start'];?>
" class="input-text lh25" size="5"> ~ <input type="text" name="read_times_end" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['read_times_end'];?>
" class="input-text lh25" size="5"></div></td>
                        <td class="header">一级分类</td>
                        <td>
                            <select name="first_category" class="select" id="first_category">
                                <option value="">请选择</option>
                                <?php  $_smarty_tpl->tpl_vars['firstCategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['firstCategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['firstCategorys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['firstCategory']->key => $_smarty_tpl->tpl_vars['firstCategory']->value) {
$_smarty_tpl->tpl_vars['firstCategory']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['firstCategory']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['request']->value['first_category']==$_smarty_tpl->tpl_vars['firstCategory']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['firstCategory']->value['name'];?>
</option>    
                                <?php } ?>
                            </select>
                       <td class="header">二级分类</td>
                       <td>     
                            <select name="second_category" class="select" id="second_category">
                                <option value="">请选择</option>
                                <?php  $_smarty_tpl->tpl_vars['secondCategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['secondCategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['secondCategorys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['secondCategory']->key => $_smarty_tpl->tpl_vars['secondCategory']->value) {
$_smarty_tpl->tpl_vars['secondCategory']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['secondCategory']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['request']->value['second_category']==$_smarty_tpl->tpl_vars['secondCategory']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['secondCategory']->value['name'];?>
</option>    
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>    
                        <td class="header">文章名称</td>
                        <td><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['title'];?>
" class="input-text lh25" size="30"></td>
                        <td class="header">评论次数</td>
                        <td><div style="width:165px;"><input type="text" name="comment_times_start" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['comment_times_start'];?>
" class="input-text lh25" size="5"> ~ <input type="text" name="comment_times_end" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['comment_times_end'];?>
" class="input-text lh25" size="5"></div></td>
                        <td class="header">标签多选</td>
                        <td colspan='3'>
                            <select name="tag[]" class="select tag">
                                <option value="">请选择</option>
                                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['request']->value['tag'][0]==$_smarty_tpl->tpl_vars['tag']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</option>    
                                <?php } ?>
                            </select>
                            <select name="tag[]" class="select tag">
                                <option value="">请选择</option>
                                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['request']->value['tag'][1]==$_smarty_tpl->tpl_vars['tag']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</option>    
                                <?php } ?>
                            </select>
                            <select name="tag[]" class="select tag">
                                <option value="">请选择</option>
                                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['request']->value['tag'][2]==$_smarty_tpl->tpl_vars['tag']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</option>    
                                <?php } ?>
                            </select>
                            <select name="tag[]" class="select tag">
                                <option value="">请选择</option>
                                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['request']->value['tag'][3]==$_smarty_tpl->tpl_vars['tag']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</option>    
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="header">发布开始时间</td>
                        <td><input type="text" name="release_time_start" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['release_time_start'];?>
"  id="release_time_start" class="input-text lh25" size="30"></td>
                        <td class="header">发布结束时间</td>
                        <td><input type="text" name="release_time_end" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['release_time_end'];?>
"  id="release_time_end" class="input-text lh25" size="30"></td>
                        <td></td>
                        <td>
                            <input type="button" id="search" class="ext_btn ext_btn_success" value="搜索" >
                        </td>
                    </tr>    
                </table>
            </div>
        </div>
    </div>
</div>
</form>

<div id="table" class="mt10">
    <div class="box span10 oh">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
            <tr>
                <th width="3%">ID</th>
                <th width="22%">标题</th>
                <th width="16%">分类</th>
                <th width="20%">标签</th>
                <th width="6%">阅读次数</th>
                <th width="6%">评论次数</th>
                <th width="12%">发布时间</th>
                <th width="15%">操作</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articleInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
            <tr class="tr">
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
</td>
                <td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</td>
                <td>&nbsp;
                    <?php if ($_smarty_tpl->tpl_vars['article']->value['category']) {?>
                        <?php echo $_smarty_tpl->tpl_vars['article']->value['category']['frist']['name'];?>
 >> <?php echo $_smarty_tpl->tpl_vars['article']->value['category']['second']['name'];?>

                    <?php }?>
                </td>
                <td>&nbsp;
                    <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['tag']->value['last']) {?>
                        <?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>

                        <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
、
                        <?php }?>
                    <?php } ?>
                </td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['article']->value['read_times'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['article']->value['comment_times'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['article']->value['release_datetime'];?>
</td>
                <td align="center">
                    <input type="submit"  articleid="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" value="编辑" class="ext_btn ext_btn_submit edit">
                    <input type="submit"  articleid="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" value="跳转" onclick='window.open("/article/info?articleid=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
")' class="ext_btn ext_btn_submit">
                    <input type="submit"  articleid="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" value="删除" class="ext_btn ext_btn_submit delete">
                </td>
            </tr>
            <?php } ?>
        </table>
        
        <div class="page mt10">
           <?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}$_tpl_path=FISResource::getUri("backend:widget/page.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."backend:widget/page.tpl".'"', E_USER_ERROR);}FISResource::load("backend:widget/page.tpl", $_smarty_tpl->smarty);?>
        </div>
    </div>
</div>
<?php $fis_script_priority = 0;ob_start();?>
$(function(){
    $('#release_time_start').datetimepicker();
    
    $('#release_time_end').datetimepicker();
    
    $('#search').click(function(){
        $("#searchform").submit();
    });
    
    $("input.edit").click(function(){
        var articleid = $(this).attr('articleid');
        location.href="/backend/article/edit?articleid="+articleid;
    });
    
    $("input.delete").click(function(){
        var articleid = $(this).attr('articleid');
        if(confirm("确定要删除吗?")){
	        $.ajax({
	            url: '/backend/article/ajaxDelete',
	            type: 'post',
	            dataType: 'json',
	            data:'id='+articleid,
	            success: function( resp, status ) {
	                if (resp == true){
	                    alert('删除成功!');
	                    location.href="/backend/article/list";
	                } else {
	                    alert('删除失败!');
	                }
	            },
	            error: function (data, status, e) {
	            }
	        });
        } 
    });
    
    $("#first_category").change(function(){
        var categoryId = $(this).val();
        $.ajax({
            url: '/backend/dictionary/ajaxChildCategory',
            type: 'post',
            dataType: 'json',
            data:'category_id='+categoryId,
            success: function( resp, status ) {
                var html='<option value="">请选择</option>';
                $(resp).each(function(i){
                    html += '<option value="'+resp[i].id+'">'+resp[i].name+'</option>';
                });
                $("#second_category").html(html);
            },
            error: function (data, status, e) {
            }
        });
    });
    
    $("#second_category").change(function(){
        var categoryId = $(this).val();
        $.ajax({
            url: '/backend/dictionary/ajaxTagByCategoryId',
            type: 'post',
            dataType: 'json',
            data:'category_id='+categoryId,
            success: function( resp, status ) {
                var html='<option value="">请选择</option>';
                $(resp).each(function(i){
                    html += '<option value="'+resp[i].id+'">'+resp[i].name+'</option>';
                });
                $("select.tag").html(html);
            },
            error: function (data, status, e)
            {
            }
        });
    });
    
});
<?php $script=ob_get_clean();if($script!==false){if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}if(FISResource::$cp) {if (!in_array(FISResource::$cp, FISResource::$arrEmbeded)){FISResource::addScriptPool($script, $fis_script_priority);FISResource::$arrEmbeded[] = FISResource::$cp;}} else {FISResource::addScriptPool($script, $fis_script_priority);}}FISResource::$cp = null;?>
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}FISResource::load('backend:page/article/list.tpl',$_smarty_tpl->smarty, false);?>
    </div>
</body><?php if(class_exists('FISResource', false)){echo FISResource::jsHook();}?>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html><?php }} ?>
