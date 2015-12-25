<?php /* Smarty version Smarty-3.1.21, created on 2015-12-25 22:36:27
         compiled from "/home/zhouwei/workspace/myblog/app/smarty/views/template/backend/page/index/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1307009376567d546b109174-33689431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b33816d6766deb005555df38a5420d14cb4d178' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/backend/page/index/main.tpl',
      1 => 1450927308,
      2 => 'file',
    ),
    '9efcdd2efdffcf6946b52f19c93cf2ba09ea9128' => 
    array (
      0 => '/home/zhouwei/workspace/myblog/app/smarty/views/template/common/page/backMainLayout.tpl',
      1 => 1450927308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1307009376567d546b109174-33689431',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_567d546b1d42e3_92814288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567d546b1d42e3_92814288')) {function content_567d546b1d42e3_92814288($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    
<div class="main_top">
    <div class="main_left fl span6">
        <div class="box pr5">
            <div class="box_border">
                <div class="box_top">
                    <div class="box_top_l fl">
                        <b class="pl15">数据统计</b>
                    </div>
                    <div class="box_top_r fr pr15">
                        <a href="#" class="color307fb1">更多</a>
                    </div>
                </div>
                <div class="box_center">center</div>
            </div>
        </div>
    </div>
    <div class="main_right fr span4">
        <div class="box pl5">
            <div class="box_border">
                <div class="box_top">top</div>
                <div class="box_center">center</div>
            </div>
        </div>
    </div>
    
    <div class="clear"></div>
</div>
<div class="main_center">
    <div class="span3 fl pt10">
        <div class="box pr5">
            <div class="box_border">
                <div class="box_top">top</div>
                <div class="box_center">center</div>
            </div>
        </div>
    </div>
    <div class="span4 fl pt10">
        <div class="box pl5 pr5">
            <div class="box_border">
                <div class="box_top">top</div>
                <div class="box_center">center</div>
            </div>
        </div>
    </div>
    <div class="span3 fl pt10">
        <div class="box pl5">
            <div class="box_border">
                <div class="box_top">top</div>
                <div class="box_center">center</div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div id="button" class="mt10">
    <input type="button" name="button" class="btn btn82 btn_add" value="新增">
    <input type="button" name="button" class="btn btn82 btn_del" value="删除">
    <input type="button" name="button" class="btn btn82 btn_config"
        value="配置"> <input type="button" name="button"
        class="btn btn82 btn_count" value="统计"> <input type="button"
        name="button" class="btn btn82 btn_checked" value="全选"> <input
        type="button" name="button" class="btn btn82 btn_nochecked" value="取消">
    <input type="button" name="button" class="btn btn82 btn_export"
        value="导出"> <input type="button" name="button"
        class="btn btn82 btn_recycle" value="回收站"> <input
        type="button" name="button" class="btn btn82 btn_search" value="查询">
</div>
<div id="search_bar" class="mt10">
    <div class="box">
        <div class="box_border">
            <div class="box_top">
                <b class="pl15">搜索</b>
            </div>
            <div class="box_center pt10 pb10">
                <table class="form_table" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>姓名</td>
                        <td><input type="text" name="name" class="input-text lh25"
                            size="10"></td>
                        <td>性别</td>
                        <td><span class="fl">
                                <div class="select_border">
                                    <div class="select_containers ">
                                        <select name="" class="select">
                                            <option>男</option>
                                            <option>女</option>
                                        </select>
                                    </div>
                                </div>
                        </span></td>
                        <td>姓名</td>
                        <td><input type="text" name="name" class="input-text lh25"
                            size="10"></td>
                        <td>性别</td>
                        <td><span class="fl">
                                <div class="select_border">
                                    <div class="select_containers ">
                                        <select name="" class="select">
                                            <option>男</option>
                                            <option>女</option>
                                        </select>
                                    </div>
                                </div>
                        </span></td>
                        <td>姓名</td>
                        <td><input type="text" name="name" class="input-text lh25"
                            size="10"></td>
                        <td>性别</td>
                        <td><span class="fl">
                                <div class="select_border">
                                    <div class="select_containers ">
                                        <select name="" class="select">
                                            <option>男</option>
                                            <option>女</option>
                                        </select>
                                    </div>
                                </div>
                        </span></td>
                    </tr>
                    <tr>
                        <td>姓名</td>
                        <td><input type="text" name="name" class="input-text lh25"
                            size="10"></td>
                        <td>性别</td>
                        <td><span class="fl">
                                <div class="select_border">
                                    <div class="select_containers ">
                                        <select name="" class="select">
                                            <option>男</option>
                                            <option>女</option>
                                        </select>
                                    </div>
                                </div>
                        </span></td>
                        <td>姓名</td>
                        <td><input type="text" name="name" class="input-text lh25"
                            size="10"></td>
                        <td>性别</td>
                        <td><span class="fl">
                                <div class="select_border">
                                    <div class="select_containers ">
                                        <select name="" class="select">
                                            <option>男</option>
                                            <option>女</option>
                                        </select>
                                    </div>
                                </div>
                        </span></td>
                        <td>姓名</td>
                        <td><input type="text" name="name" class="input-text lh25"
                            size="10"></td>
                        <td>性别</td>
                        <td><span class="fl">
                                <div class="select_border">
                                    <div class="select_containers ">
                                        <select name="" class="select">
                                            <option>男</option>
                                            <option>女</option>
                                        </select>
                                    </div>
                                </div>
                        </span></td>
                    </tr>
                </table>
            </div>
            <div class="box_bottom pb5 pt5 pr10"
                style="border-top: 1px solid #dadada;">
                <div class="search_bar_btn" style="text-align: right;">
                    <input type="submit" value="确定" class="ext_btn ext_btn_submit">
                    <input type="button" value="返回"
                        onclick="location.href='javascript:history.go(-1)'"
                        class="ext_btn"> <input type="button"
                        class="ext_btn ext_btn_success" value="成功"> <input
                        type="button" class="ext_btn ext_btn_error" value="错误"> <a
                        href="" class="ext_btn"><span class="add"></span>添加</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="table" class="mt10">
    <div class="box span10 oh">
        <table width="100%" border="0" cellpadding="0" cellspacing="0"
            class="list_table">
            <tr>
                <th width="30">#</th>
                <th width="100">标题</th>
                <th width="100">标题</th>
                <th>标题</th>
            </tr>
            <tr class="tr">
                <td class="td_center"><input type="checkbox"></td>
                <td>aad</td>
                <td>aad</td>
                <td>aad</td>

            </tr>
            <tr class="tr">
                <td class="td_center"><input type="checkbox"></td>
                <td>aad</td>
                <td>aad</td>
                <td>aad</td>

            </tr>
            <tr class="tr">
                <td class="td_center"><input type="checkbox"></td>
                <td>aad</td>
                <td>aad</td>
                <td>aad</td>

            </tr>
            <tr class="tr">
                <td class="td_center"><input type="checkbox"></td>
                <td>aad</td>
                <td>aad</td>
                <td>aad</td>

            </tr>
            <tr class="tr">
                <td class="td_center"><input type="checkbox"></td>
                <td>aad</td>
                <td>aad</td>
                <td>aad</td>

            </tr>
            <tr class="tr">
                <td class="td_center"><input type="checkbox"></td>
                <td>aad</td>
                <td>aad</td>
                <td>aad</td>

            </tr>
            <tr class="tr">
                <td class="td_center"><input type="checkbox"></td>
                <td>aad</td>
                <td>aad</td>
                <td>aad</td>

            </tr>
            <tr class="tr">
                <td class="td_center"><input type="checkbox"></td>
                <td>aad</td>
                <td>aad</td>
                <td>aad</td>

            </tr>
            <tr class="tr">
                <td class="td_center"><input type="checkbox"></td>
                <td>aad</td>
                <td>aad</td>
                <td>aad</td>

            </tr>

        </table>
        
        <div class="page mt10">
            <div class="pagination">
                <ul>
                    <li class="first-child"><a href="#">首页</a></li>
                    <li class="disabled"><span>上一页</span></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">下一页</a></li>
                    <li class="last-child"><a href="#">末页</a></li>
                </ul>
            </div>
        </div>
        
    </div>
</div>



<div id="forms" class="mt10">
    <div class="box">
        <div class="box_border">
            <div class="box_top">
                <b class="pl15">表单</b>
            </div>
            <div class="box_center">
                <form action="" class="jqtransform">
                    <table class="form_table pt15 pb15" width="100%" border="0"
                        cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="td_right">输入框：</td>
                            <td class=""><input type="text" name="name"
                                class="input-text lh30" size="40"></td>
                            <td class="td_right">输入框：</td>
                            <td><input type="text" name="name" class="input-text lh30"
                                size="40"></td>
                        </tr>
                        <tr>
                            <td class="td_right">下拉框：</td>
                            <td class=""><span class="fl">
                                    <div class="select_border">
                                        <div class="select_containers ">
                                            <select name="" class="select">
                                                <option>北京</option>
                                                <option>天津</option>
                                                <option>上海</option>
                                                <option>重庆</option>
                                            </select>
                                        </div>
                                    </div>
                            </span></td>
                        </tr>
                        <tr>
                            <td class="td_right">文本框：</td>
                            <td class=""><textarea name="" id="" cols="30" rows="10"
                                    class="textarea"></textarea></td>
                        </tr>
                        <tr>
                            <td class="td_right">单选：</td>
                            <td class=""><input type="radio" name="status"> 可用 <input
                                type="radio" name="status"> 不可用</td>
                        </tr>
                        <tr>
                            <td class="td_right">多选：</td>
                            <td class=""><input type="checkbox" name="check"> 1
                                <input type="checkbox" name="check"> 2 <input
                                type="checkbox" name="check"> 3</td>
                        </tr>
                        <tr>
                            <td class="td_right">文件：</td>
                            <td class=""><input type="file" name="file"
                                class="input-text lh30" size="10"></td>
                        </tr>
                        <tr>
                            <td class="td_right">&nbsp;</td>
                            <td class=""><input type="button" name="button"
                                class="btn btn82 btn_save2" value="保存"> <input
                                type="button" name="button" class="btn btn82 btn_res" value="重置">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<textarea name="editor1" id="editor1" rows="10" cols="80">
    This is my textarea to be replaced with CKEditor.
</textarea>


<?php echo '<script'; ?>
>
CKEDITOR.replace( 'editor1');
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
<?php echo '</script'; ?>
>

<pre class="brush: js;">
function helloSyntaxHighlighter()
{
    return "hi!";
}
</pre>
<?php if(!class_exists('FISResource', false)){require_once('/home/zhouwei/workspace/myblog/app/smarty/views/plugin/FISResource.class.php');}FISResource::load('backend:page/index/main.tpl',$_smarty_tpl->smarty, false);?>
    </div>
</body><?php if(class_exists('FISResource', false)){echo FISResource::jsHook();}?>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html><?php }} ?>
