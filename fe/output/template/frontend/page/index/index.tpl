{%extends file="common/page/frontLayout.tpl"%}
{%block name="head"%}
{%/block%}
{%block name="content"%}
<div class="ibody">
  {%widget
	 name="frontend:widget/header.tpl"
  %}
  <article>
  	<h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">模板分享</a>><a href="1/">个人博客模板</a></h2>
    <div class="bloglist">
      {%foreach from=$articleInfo item=article%}
      <div class="blogs">
        <h3><a href="/">{%$article.title%}</a></h3>
        <p class="title_meta">
        	<span>发布时间：{%$article.release_datetime%}</span>
        	{%if $article.tag%}
	        	<span>分类：
	        	{%foreach from=$article.tag item=tag%}
	        		{%if $tag.last%}
	        			<a href="/">{%$tag.name%}</a>
	        		{%else%}
	        			<a href="/">{%$tag.name%}、</a>
	        		{%/if%}
	        	{%/foreach%}
	        	</span>
        	{%/if%}
        	<span><a href="/">浏览({%$article.read_times%})</a></span><span><a href="/">评论({%$article.comment_times%})</a></span></p>
        <ul>
        	{%if $article.headimage%}
        		<figure><img src="{%$article.headimage%}"></figure>
        	{%/if%}
        	{%$article.headcontent%}
        	<a href="/" target="_blank" class="readmore">阅读全文</a>
        </ul>
        <p class="autor"></p>
      </div>
      {%/foreach%}
    </div>
    <div class="page"><a>&lt;&lt;</a><a>&lt;</a></a><b>1</b><a href="/">...</a><a href="/">3</a><a href="/">...</a><a href="/">5</a><a href="/">&gt;</a><a href="/">&gt;&gt;</a></div>
  </article>
  <aside>
    {%widget
	 	name="frontend:widget/aside.tpl"
  	%}
  </aside>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
{%require name='frontend:page/index/index.tpl'%}{%require name='frontend:page/index/index.tpl'%}{%/block%}