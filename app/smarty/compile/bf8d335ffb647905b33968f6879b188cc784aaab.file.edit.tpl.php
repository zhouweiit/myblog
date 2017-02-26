<?php /* Smarty version Smarty-3.1.21, created on 2017-02-26 16:39:51
         compiled from "/home/zhouwei/workspace/myblog/app/smarty/views/template/backend/page/article/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10620098285683cf7d264fe1-83015792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf8d335ffb647905b33968f6879b188cc784aaab' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/backend/page/article/edit.tpl',
      1 => 1488098368,
      2 => 'file',
    ),
    '9efcdd2efdffcf6946b52f19c93cf2ba09ea9128' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/common/page/backMainLayout.tpl',
      1 => 1488098368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10620098285683cf7d264fe1-83015792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5683cf7d35ebb1_11194358',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5683cf7d35ebb1_11194358')) {function content_5683cf7d35ebb1_11194358($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    
<div id="forms" class="mt10">
    <div class="box">
        <div class="box_border">
            <div class="box_top">
                <b class="pl15"><?php if ($_smarty_tpl->tpl_vars['type']->value=='edit') {?>文章编辑<?php } else { ?>文章发布<?php }?></b>
            </div>
            <div class="box_center">
                <form action="" class="jqtransform" id="articleform">
                    <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                        <?php if ($_smarty_tpl->tpl_vars['type']->value=='edit') {?>
                        <tr>
                            <td class="header" width="10%">ID：</td>
                            <td class=""><?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" id="id"/></td>
                        </tr>
                        <?php }?>
                        <tr>
                            <td class="header" width="10%">标题：</td>
                            <td class=""><input type="text" id="title" name="title" class="input-text lh30" size="40" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
"><label class="error"></label></td>
                        </tr>
                        <tr>
                            <td class="header" width="10%">阅读次数：</td>
                            <td class=""><input type="text" id="read_times" name="read_times" class="input-text lh30" size="10" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['read_times'];?>
"><label class="error"></label></td>
                        </tr>
                        <tr>
                            <td class="header" width="10%">评论次数：</td>
                            <td class=""><input type="text" id="comment_times" name="comment_times" class="input-text lh30" size="10" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['comment_times'];?>
"><label class="error"></label></td>
                        </tr>
                        <tr>
                            <td class="header" width="10%">发布时间：</td>
                            <td class=""><input type="text" name="release_datetime" id="release_datetime" class="input-text lh30" size="40" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['release_datetime'];?>
"><label class="error"></label></td>
                        </tr>
                        <tr>
                            <td class="header">分类：</td>
                            <td class="">
	                            <div class="select_border">
	                                <div class="select_containers ">
	                                    <select name="first_category" class="select" id="first_category">
			                                <option value="">请选择</option>
			                                <?php  $_smarty_tpl->tpl_vars['firstCategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['firstCategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['firstCategorys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['firstCategory']->key => $_smarty_tpl->tpl_vars['firstCategory']->value) {
$_smarty_tpl->tpl_vars['firstCategory']->_loop = true;
?>
			                                <option value="<?php echo $_smarty_tpl->tpl_vars['firstCategory']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['firstCategoryId']->value==$_smarty_tpl->tpl_vars['firstCategory']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['firstCategory']->value['name'];?>
</option>    
			                                <?php } ?>
			                            </select>
			                             <select name="second_category" class="select" id="second_category">
                                            <option value="">请选择</option>
                                            <?php  $_smarty_tpl->tpl_vars['secondCategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['secondCategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['secondCategorys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['secondCategory']->key => $_smarty_tpl->tpl_vars['secondCategory']->value) {
$_smarty_tpl->tpl_vars['secondCategory']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['secondCategory']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['secondCategoryId']->value==$_smarty_tpl->tpl_vars['secondCategory']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['secondCategory']->value['name'];?>
</option>    
                                            <?php } ?>
                                        </select><label class="error"></label>
	                                </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="header">标签：</td>
                            <td class="">
                                <div class="select_border">
                                    <div class="select_containers ">
                                        <select name="tag[]" class="select tag">
			                                <option value="">请选择</option>
			                                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
			                                <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['articletag']->value[0]['id']==$_smarty_tpl->tpl_vars['tag']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
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
" <?php if ($_smarty_tpl->tpl_vars['articletag']->value[1]['id']==$_smarty_tpl->tpl_vars['tag']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
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
" <?php if ($_smarty_tpl->tpl_vars['articletag']->value[2]['id']==$_smarty_tpl->tpl_vars['tag']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</option>    
			                                <?php } ?>
			                            </select><label class="error"></label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="header">SEO关键字：</td>
                            <td class="">
                                <div class="select_border">
                                    <div class="select_containers ">
                                        <input type="text" name="keywords" id="keywords" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['keywords'];?>
"  class="input-text lh30" size="40">
                                        <label style="margin-top:7px;padding-left:5px;float:right;">多个用","相隔</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="header">列表图片：</td>
                            <td class="">
                                <img id="headimage" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['headimage'];?>
" onerror="this.src='/static/backend/images/no_image.png'" style="width:200px;"/><br />
                                <div style="height:8px;"></div>
                                <input type="text" name="headimage" id="headimagesrc" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['headimage'];?>
"  class="input-text lh30" size="40">
                                <input type="button" id="chooseimage" class="ext_btn ext_btn_success" value="确定" ><label class="error"></label>
                            </td>
                        </tr>
                        <tr>
                            <td class="header">列表内容：</td>
                            <td class="">
                                <textarea name="headcontent" id="headcontent" rows="15" cols="120"><?php echo $_smarty_tpl->tpl_vars['article']->value['headcontent'];?>
</textarea>
                                <label class="error" style="display:block"></label>
                            </td>
                        </tr>
                        <tr>
                            <td class="header">文章内容：</td>
                            <td class="">
                                <textarea name="content" id="content" rows="10" cols="80"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</textarea>
								<label class="error" style="display:block"></label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='2' style="text-align:center;">
                                <input type="hidden" id="committype" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"/>
                                <input type="hidden" name="isprevew" value="true"/>
                                <input type="button" id="commit" class="ext_btn ext_btn_success" value="提交" >
                                &nbsp;&nbsp;&nbsp;
                                <input type="button" id="preview" class="ext_btn ext_btn_success" value="预览" >
                                 &nbsp;&nbsp;&nbsp;
                                <input type="button" onclick="javascript:document.location.reload();" class="ext_btn ext_btn_success" value="还原" >
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $fis_script_priority = 0;ob_start();?>
$(function(){
    
	$('#release_datetime').datetimepicker();
	contentck = CKEDITOR.replace( 'content');
	CKEDITOR.editorConfig = function( config ) {
	    config.toolbarGroups = [
	        { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
	        { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
	        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
	        { name: 'forms', groups: [ 'forms' ] },
	        '/',
	        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
	        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
	        { name: 'links', groups: [ 'links' ] },
	        { name: 'insert', groups: [ 'insert' ] },
	        '/',
	        { name: 'styles', groups: [ 'styles' ] },
	        { name: 'colors', groups: [ 'colors' ] },
	        { name: 'tools', groups: [ 'tools' ] },
	        { name: 'others', groups: [ 'others' ] },
	        { name: 'about', groups: [ 'about' ] }
	    ];
	};
	
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
            error: function (data, status, e)
            {
            }
        });
    });
    
//    $("#second_category").change(function(){
//        var categoryId = $(this).val();
//        $.ajax({
//            url: '/backend/dictionary/ajaxTagByCategoryId',
//            type: 'post',
//            dataType: 'json',
//            data:'category_id='+categoryId,
//            success: function( resp, status ) {
//                var html='<option value="">请选择</option>';
//                $(resp).each(function(i){
//                    html += '<option value="'+resp[i].id+'">'+resp[i].name+'</option>';
//                });
//                $("select.tag").html(html);
//            },
//            error: function (data, status, e)
//            {
//            }
//        });
//    });
    
    $("#chooseimage").click(function(){
        $("#headimage").attr('src',$("#headimagesrc").val());
    });
    
    $("#commit").click(function(){
        var committype = $("#committype").val();
        var id = $("#id");
        var title = $("#title");
        var read_times = $("#read_times");
        var comment_times = $("#comment_times");
        var release_datetime = $("#release_datetime");
        var first_category = $("#first_category");
        var second_category = $("#second_category");
        var tag = $("select.tag");
        var headimage = $("#headimagesrc");
        var headcontent = $("#headcontent");
        var content = $("#content");
        var keywords = $("#keywords");
        
        var checktitle = validata_title(title,title.val());
        var checkheadcontent = validata_headcontent(headcontent,headcontent.val());
        var checkcontent = validata_content(content,contentck.getData());
        var checkreadtimes = validata_read_times(read_times,read_times.val());
        var checkcommenttimes = validata_comment_times(comment_times,comment_times.val());
        var releasedatetime = validata_release_datetime(release_datetime,release_datetime.val()+":00");
        var checksecondcategory = validata_second_category(second_category,second_category.val());
        
        var tagval = "";
        tag.each(function(){
            var tagid = $(this).val();
            if (checkInteger(tagid) && parseInt(tagid) > 0){
                tagval += tagid+',';
            }  
        });
        var requestdata = {
            'id':id.val(),
            'title':title.val(),
            'read_times':read_times.val(),
            'comment_times':comment_times.val(),
            'release_datetime':release_datetime.val(),
            'first_category':first_category.val(),
            'second_category':second_category.val(),
            'tag':tagval,
            'headimage':headimage.val(),
            'headcontent':headcontent.val(),
            'content':contentck.getData(),
            'committype':committype,
            'keywords':keywords.val()
        };
        
        $.ajax({
            url: '/backend/article/ajaxSubmit',
            type: 'post',
            dataType: 'json',
            data:requestdata,
            success: function( resp, status ) {
                if (resp == true){
                    alert('操作成功!');
                    location.href="/backend/article/list";
                } else {
                    alert('操作失败!');
                }
            },
            error: function (data, status, e) {
            }
        });
        
    });
    
    $("#preview").click(function(){
        var form = $("#articleform");
        form.attr('action','/article/preview');
        form.attr('target', "_blank");
        form.attr('method', "post");
        form.submit();
    }); 
    
    function validata_title(obj,title){
        var title = trim(title);
        if (title.length <= 0){
            error_info(obj,'标题不能为空！');
            return false;
        }
        error_info(obj,'');
        return true;
    }
    
    function validata_headcontent(obj,headcontent){
        var headcontent = trim(headcontent);
        if (headcontent.length <= 0){
            error_info(obj,'列表内容不能为空！');
            return false;
        }
        error_info(obj,'');
        return true;
    }
    
    function validata_content(obj,content){
        var content = trim(content);
        if (content.length <= 0){
            error_info(obj,'内容不能为空！');
            return false;
        }
        error_info(obj,'');
        return true;
    }
    
    function validata_read_times(obj,times){
        var times = trim(times);
        if (!checkInteger(times) || parseInt(times) <= 0){
            error_info(obj,'阅读次数必须是正整数！');
            return false;
        }
        error_info(obj,'');
        return true;
    }
    
    function validata_comment_times(obj,times){
        var times = trim(times);
        if (!checkInteger(times) || parseInt(times) <= 0){
            error_info(obj,'评论次数必须是正整数！');
            return false;
        }
        error_info(obj,'');
        return true;
    }
    
    function validata_release_datetime(obj,datetime){
        var datetime = trim(datetime);
        if (!checkFullTime(datetime)){
            error_info(obj,'发布时间必须是日期类型，格式YYYY-MM-DD HH:MM！');
            return false;
        }
        error_info(obj,'');
        return true;
    }
    
    function validata_second_category(obj,category){
        var category = trim(category);
        if (category.length <= 0){
            error_info(obj,'分类不能为空！');
            return false;
        }
        error_info(obj,'');
        return true;
    }
    
});
<?php $script=ob_get_clean();if($script!==false){if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}if(FISResource::$cp) {if (!in_array(FISResource::$cp, FISResource::$arrEmbeded)){FISResource::addScriptPool($script, $fis_script_priority);FISResource::$arrEmbeded[] = FISResource::$cp;}} else {FISResource::addScriptPool($script, $fis_script_priority);}}FISResource::$cp = null;?>
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}FISResource::load('backend:page/article/edit.tpl',$_smarty_tpl->smarty, false);
if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}FISResource::load('backend:page/article/edit.tpl',$_smarty_tpl->smarty, false);?>
    </div>
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}FISResource::load('common:page/backMainLayout.tpl',$_smarty_tpl->smarty, false);?></body><?php if(class_exists('FISResource', false)){echo FISResource::jsHook();}?>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html><?php }} ?>
