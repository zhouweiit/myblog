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
		<div class="tagcontainer">
			<a href="javascript:void(0)">Java</a><a href="javascript:void(0)" style="font-size:25px;">python</a><a href="javascript:void(0)">node.js</a><a href="javascript:void(0)">c++</a><a href="javascript:void(0)">HTML</a>
		</div>
		<div class="tagcontainer">
			<a href="javascript:void(0)" style="font-size:25px;">Java</a><a href="javascript:void(0)" style="font-size:10px;">Php</a><a href="javascript:void(0)" style="font-size:17px;">node.js</a><a href="javascript:void(0)" style="font-size:30px;">c++</a><a href="javascript:void(0)" href="javascript:void(0)">HTML</a>
		</div>
		<div class="tagcontainer">
			<a href="javascript:void(0)" style="font-size:10px;">Java</a><a href="javascript:void(0)" style="font-size:12px;">Php</a><a href="javascript:void(0)" style="font-size:20px;">node.js</a><a href="javascript:void(0)" style="font-size:16px;">c++</a><a href="javascript:void(0)" style="font-size:15px;">HTML</a>
		</div>
		<div class="tagcontainer">
			<a href="javascript:void(0)">Java</a><a href="javascript:void(0)">Php</a><a href="javascript:void(0)"  style="font-size:40px;">node.js</a><a href="javascript:void(0)">c++</a>
		</div class="tagcontainer">
		<div class="tagcontainer">
			<a href="javascript:void(0)" style="font-size:20px;">Java</a><a href="javascript:void(0)" style="font-size:20px;">Php</a><a href="javascript:void(0)">node.js</a><a href="javascript:void(0)">c++</a><a href="javascript:void(0)">HTML</a>
		</div>
		<div class="tagcontainer">
			<a href="javascript:void(0)">Java</a><a href="javascript:void(0)">Php</a><a href="javascript:void(0)">node.js</a><a href="javascript:void(0)" style="font-size:22px;">c++</a><a href="javascript:void(0)"  style="font-size:30px;">HTML</a>
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