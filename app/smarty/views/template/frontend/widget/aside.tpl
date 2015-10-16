<br />
<div class="tj_news">
	<h2>
		<p class="tj_t1">最新文章</p>
	</h2>
	<ul>
		{%foreach from=$aside.newarticles item=article%}
			<li><a href="/article/info?articleid={%$article.id%}">{%$article.name%}</a></li>
		{%/foreach%}
	</ul> 
	<h2>
		<p class="tj_t1">全站热门</p>
	</h2>
	<ul>
		{%foreach from=$aside.hotArticles item=article%}
			<li><a href="/article/info?articleid={%$article.id%}">{%$article.name%}</a></li>
		{%/foreach%}
	</ul> 
</div>	   
<div class="tj_news">
	<h2>
	  <p class="tj_t1">标签</p>
	</h2>
	<div class="tag">
		<div id="myCanvasContainer">
	      <canvas width="250" height="250" id="myCanvas">
	        <p>Anything in here will be replaced on browsers that support the canvas element</p>
	      </canvas>
	    </div>
	    <div id="tags">
			<ul>
				{%foreach from=$aside.archiveTags item=tag key=tag_id%}
			  		<li><a href="/index/index?tagid={%$tag_id%}" target="_blank">{%$tag.tag_name%}</a></li>
				{%/foreach%}
			</ul>
		</div>
	</div>
</div>

<div class="tj_news">
	<h2>
	  <p class="tj_t1">归档</p>
	</h2>
	<div class="archive">
		<div class="archive_date">
			{%foreach from=$aside.archiveInfo.date item=info key=date%}
				<a href="/index/index?date={%$info.date%}">{%$date%}（{%$info.times%}）</a>
			{%/foreach%}
		</div>
		<div class="archive_category">
			{%foreach from=$aside.archiveInfo.category item=info%}
				<a href="/index/index?categoryid={%$info.category_id%}">{%$info.category_name%}（{%$info.times%}）</a>
			{%/foreach%}
		</div>
		<div class="clear"></div>
	</div>
</div> 

<div class="ph_news">
	<h2>
	  <p class="tj_t1">最新评论</p>
	</h2>
	<ul class="pl_n">
		{%foreach from=$aside.newComments item=comment%}
		<dl>
		    <dd class="comment_name">{%$comment.name%}</dd>
		    <dd><a href="/">{%$comment.content%}</a></dd>
		 </dl>
		{%/foreach%}
	</ul>
</div>

<div class="links">
  <h2>
    <p class="tj_t1">友情链接</p>
  </h2>
  <ul>
    <li><a href="/">周周个人博客</a></li>
    <li><a href="/">百度技术论坛</a></li>
  </ul>
</div>
<div class="copyright">
  <ul>
    <p> Design by zhouwei</p>
    <p>京ICP备11002373号-1</p>
  </ul>
</div>