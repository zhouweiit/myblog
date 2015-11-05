<!doctype html>
{%html lang="zh-CN"%}
{%head%}
<meta charset="UTF-8">
<link href="{%uri name="backend:static/css/common.css"%}" rel="stylesheet">
<link href="{%uri name="backend:static/css/main.css"%}" rel="stylesheet">
<script src="{%uri name="common:static/js/jquery-1.8.1.min.js"%}"></script>
<script src="{%uri name="backend:static/js/colResizable-1.3.min.js"%}"></script>
<script src="{%uri name="backend:static/js/common.js"%}"></script>
<script type="text/javascript">
      $(function(){  
        $(".list_table").colResizable({
          liveDrag:true,
          gripInnerHtml:"<div class='grip'></div>", 
          draggingClass:"dragging", 
          minWidth:30
        }); 
      }); 
    </script>
<title>zwiter博客管理后台</title>
{%/head%}
{%body%}
	<div class="container">
	{%block name="content"%}{%/block%}
	</div>
{%/body%}
{%/html%}