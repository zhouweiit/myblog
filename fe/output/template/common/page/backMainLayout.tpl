<!doctype html>
{%html lang="zh-CN"%}
{%head%}
<meta charset="UTF-8"/>
<link href="{%uri name="backend:static/css/common.css"%}" rel="stylesheet"/>
<link href="{%uri name="backend:static/css/main.css"%}" rel="stylesheet"/>
<link href="{%uri name="common:static/plugin/syntaxhighlighter/styles/shCoreDefault.css"%}" rel="stylesheet"/>
<script src="{%uri name="common:static/js/jquery-1.8.1.min.js"%}"></script>
<script src="{%uri name="backend:static/js/jquery.SuperSlide.js"%}"></script>
<script src="{%uri name="backend:static/js/colResizable-1.3.min.js"%}"></script>
<script src="{%uri name="common:static/plugin/ckeditor/ckeditor.js"%}"></script>
<script src="{%uri name="common:static/plugin/syntaxhighlighter/scripts/shCore.js"%}"></script>
<script src="{%uri name="common:static/plugin/syntaxhighlighter/scripts/shAutoloader.js"%}"></script>
<script src="{%uri name="common:static/plugin/syntaxhighlighter/scripts/config.js"%}"></script>
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
<title>zwiter博客管理后台</title>
{%/head%}
{%body%}
    <div class="container">
    {%block name="content"%}{%/block%}
    </div>
{%require name='common:page/backMainLayout.tpl'%}{%/body%}
{%/html%}