<!doctype html>
<html>
{%head%}
<meta charset="utf-8">
<title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="{%uri name="
	frontend:static/css/base.css"%}" rel="stylesheet">
<link href="{%uri name="
	frontend:static/css/index.css"%}" rel="stylesheet">
<link href="{%uri name="
	frontend:static/css/about.css"%}" rel="stylesheet">
<link href="{%uri name="
	frontend:static/css/style.css"%}" rel="stylesheet">
<script src="{%uri name="common:static/js/jquery-1.8.1.min.js"%}"></script>
<script src="{%uri name="common:static/js/jsencrypt.min.js"%}"></script>
<script src="{%uri name="common:static/js/modernizr.js"%}"></script>
<script src="{%uri name="common:static/js/silder.js"%}"></script>
<meta name="viewport"
	content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
{%block name="head"%}{%/block%}
<!--[if lt IE 9]>
<script src="{%uri name="common:static/js/modernizr.js"%}"></script>
<![endif]-->
{%/head%} {%body id="type_page"%} {%block name="content"%}{%/block%}
{%require name='common:page/frontLayout.tpl'%}{%/body%}
</html>
