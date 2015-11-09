<!doctype html>
{%html lang="zh-CN"%}
{%head%}
<meta charset="UTF-8"/>
<link href="{%uri name="backend:static/css/common.css"%}" rel="stylesheet"/>
<link href="{%uri name="backend:static/css/main.css"%}" rel="stylesheet"/>
<link href="{%uri name="common:static/plugin/syntaxhighlighter/styles/shCoreDefault.css"%}" rel="stylesheet"/>
<link href="{%uri name="common:static/plugin/timepicker/css/jquery-ui.css"%}" rel="stylesheet"/>
<script src="{%uri name="common:static/js/jquery-1.7.2.min.js"%}"></script>
<script src="{%uri name="backend:static/js/jquery.SuperSlide.js"%}"></script>
<script src="{%uri name="backend:static/js/colResizable-1.3.min.js"%}"></script>
<script src="{%uri name="common:static/plugin/ckeditor/ckeditor.js"%}"></script>
<script src="{%uri name="common:static/plugin/syntaxhighlighter/scripts/shCore.js"%}"></script>
<script src="{%uri name="common:static/plugin/syntaxhighlighter/scripts/shAutoloader.js"%}"></script>
<script src="{%uri name="common:static/plugin/syntaxhighlighter/scripts/config.js"%}"></script>
<script src="{%uri name="common:static/plugin/timepicker/js/jquery-ui.js"%}"></script>
<script src="{%uri name="common:static/plugin/timepicker/js/jquery-ui-slide.min.js"%}"></script>
<script src="{%uri name="common:static/plugin/timepicker/js/jquery-ui-timepicker-addon.js"%}"></script>

<script type="text/javascript">
$(function(){  
    $(".list_table").colResizable({
        liveDrag:true,
        gripInnerHtml:"<div class='grip'></div>", 
        draggingClass:"dragging", 
        minWidth:30
    }); 
    
    SyntaxHighlighter.autoloader(
         ['js','jscript','javascript','{%uri name="common:static/plugin/syntaxhighlighter/scripts/shBrushJScript.js"%}'],
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
</script>

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
{%/head%}
{%body%}
    <div class="container">
    {%block name="content"%}{%/block%}
    </div>
{%require name='common:page/backMainLayout.tpl'%}{%require name='common:page/backMainLayout.tpl'%}{%/body%}
{%/html%}