<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
{%html xmlns:wb="http://open.weibo.com/wb" framework="common:static/js/mod.js"%}
{%head%}
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{%if $TDK['title']%}{%$TDK['title']%} | {%/if%}未舟 - www.zwiter.com</title>
{%if !$TDK['description']%}
<meta name="description"  content="一个不严谨的技术博客，因为博客内容充满了技术与段子 | 未舟 - www.zwiter.com" />
{%else%}
<meta name="description"  content="{%$TDK['description']%}" />
{%/if%}
{%if !$TDK['keywords']%}
<meta name="keywords"  content="{%$aside['tagStr']%}" />
{%else%}
<meta name="keywords"  content="{%$TDK['keywords']%},未舟 - www.zwiter.com"/>
{%/if%}
<link href="{%uri name="frontend:static/css/base.css"%}" rel="stylesheet">
<link href="{%uri name="frontend:static/css/index.css"%}" rel="stylesheet">
<link href="{%uri name="frontend:static/css/about.css"%}" rel="stylesheet">
<link href="{%uri name="frontend:static/css/style.css"%}" rel="stylesheet">
<link href="{%uri name="common:static/plugin/syntaxhighlighter/styles/shCoreDefault.css"%}" rel="stylesheet"/>
<script src="{%uri name="common:static/js/jquery-1.8.1.min.js"%}"></script>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
{%block name="head"%}{%/block%}
<!--[if lt IE 9]>
<script src="{%uri name="common:static/js/modernizr.js"%}"></script>
<![endif]-->
{%/head%}
{%body id="type_page"%}
{%block name="content"%}{%/block%}
{%/body%}
<script type="text/javascript">
$(function(){  
	SyntaxHighlighter.autoloader(
		['js','jscript','javascript','{%uri name="common:static/plugin/syntaxhighlighter/scripts/shBrushJScript.js"%}'],
		['bash','shell','{%uri name="common:static/plugin/syntaxhighlighter/scripts/shBrushBash.js"%}'],
		['css','css','{%uri name="common:static/plugin/syntaxhighlighter/scripts/shBrushCss.js"%}'],
		['xml','html','{%uri name="common:static/plugin/syntaxhighlighter/scripts/shBrushXml.js"%}'],
		['sql','sq','{%uri name="common:static/plugin/syntaxhighlighter/scripts/shBrushSql.js"%}'],
		['php','php','{%uri name="common:static/plugin/syntaxhighlighter/scripts/shBrushPhp.js"%}'],
		['java','java','{%uri name="common:static/plugin/syntaxhighlighter/scripts/shBrushJava.js"%}'],
		['c','c','{%uri name="common:static/plugin/syntaxhighlighter/scripts/shBrushCpp.js"%}']
	); 
	SyntaxHighlighter.all();

}); 
</script>
<script src="{%uri name="common:static/js/jsencrypt.min.js"%}"></script>
<script src="{%uri name="common:static/js/modernizr.js"%}"></script>
<script src="{%uri name="common:static/js/silder.js"%}"></script>
<script src="{%uri name="common:static/js/jquery.tagcanvas.min.js"%}"></script>
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
<script src="{%uri name="common:static/plugin/syntaxhighlighter/scripts/shCore.js"%}"></script>
<script src="{%uri name="common:static/plugin/syntaxhighlighter/scripts/shAutoloader.js"%}"></script>
{%/html%}
