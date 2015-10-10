{%extends file="common/page/frontLayout.tpl"%}
{%block name="head"%}
{%/block%}
{%block name="content"%}
<div class="ibody">
  {%widget
	 name="frontend:widget/header.tpl"
  %}
  <article>
  	<h2 class="about_h">您现在的位置是：<a href="/">首页</a>&gt;&nbsp;最新文章</h2>
    <div class="bloglist">
      {%foreach from=$articleInfo item=article%}
      <div class="blogs">
        <h3><a href="/article/info/?articleid={%$article.id%}">{%$article.title%}</a></h3>
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
        	<span><a href="/article/info/?articleid={%$article.id%}">浏览({%$article.read_times%})</a></span><span><a href="/article/info/?articleid={%$article.id%}#comment">评论({%$article.comment_times%})</a></span></p>
        <ul>
        	{%if $article.headimage%}
        		<figure><img src="{%$article.headimage%}"></figure>
        	{%/if%}
        	{%$article.headcontent%}
        	<a href="/article/info/?articleid={%$article.id%}" class="readmore">阅读全文</a>
        </ul>
        <p class="autor"></p>
      </div>
      {%/foreach%}
    </div>
    {%widget
	 	name="frontend:widget/page.tpl"
  	%}
  </article>
  <aside>
    {%widget
	 	name="frontend:widget/aside.tpl"
  	%}
  </aside>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
{%/block%}