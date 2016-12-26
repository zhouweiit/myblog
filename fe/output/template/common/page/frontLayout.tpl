<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
{%html xmlns:wb="http://open.weibo.com/wb" framework="common:static/js/mod.js"%}
{%head%}
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{%if $TDK['title']%}{%$TDK['title']%} | {%/if%}未舟 - zwiter.com</title>
{%if !$TDK['description']%}
<meta name="description"  content="未舟的IT技术博客，常用语言PHP、C、JAVA。关注架构开发、底层开发、性能优化。真心希望大家阅读后能有所收获。www.zwiter.com" />
{%else%}
<meta name="description"  content="{%$TDK['description']%}" />
{%/if%}
{%if !$TDK['keywords']%}
<meta name="keywords"  content="排序,正则表达式,程序员,算法,软件开发,AJAX,Algorithm,Android,Bash,book,C++,Code Review,Coding,CSS,Database,Debug,ebook,Erlang,Game,Go,Google,HTML,IE,Java,Javascript,jQuery,Linus Torvalds,Linux,Mac,MySQL,Oracle,OS,Perl,PHP,Programmer,programming,language,Python,Ruby,SQL,Ubuntu,UI,Unix,vim,Web,Windows" />
{%else%}
<meta name="keywords"  content="{%$TDK['keywords']%},未舟"/>
{%/if%}
<link href="{%uri name="frontend:static/css/base.css"%}" rel="stylesheet">
<link href="{%uri name="frontend:static/css/index.css"%}" rel="stylesheet">
<link href="{%uri name="frontend:static/css/about.css"%}" rel="stylesheet">
<link href="{%uri name="frontend:static/css/style.css"%}" rel="stylesheet">
<script src="{%uri name="common:static/js/jquery-1.8.1.min.js"%}"></script>
<script src="{%uri name="common:static/js/jsencrypt.min.js"%}"></script>
<script src="{%uri name="common:static/js/modernizr.js"%}"></script>
<script src="{%uri name="common:static/js/silder.js"%}"></script>
<script src="{%uri name="common:static/js/jquery.tagcanvas.min.js"%}"></script>
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
{%block name="head"%}{%/block%}
<!--[if lt IE 9]>
<script src="{%uri name="common:static/js/modernizr.js"%}"></script>
<![endif]-->
{%/head%}
{%body id="type_page"%}
{%block name="content"%}{%/block%}
{%require name='common:page/frontLayout.tpl'%}{%/body%}
{%/html%}
