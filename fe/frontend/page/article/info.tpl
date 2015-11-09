{%extends file="common/page/frontLayout.tpl"%}
{%block name="head"%}
{%/block%}
{%block name="content"%}
<div class="ibody">
  {%widget
	 name="frontend:widget/header.tpl"
  %}
  <article>
  	{%$navigation%}
    <div class="index_about">
      <h2 class="c_titile">{%$article.title%}</h2>
      <p class="box_c">
      	<span class="d_time">发布时间：<a href="/index/index?date={%$article.release_datetime%}">{%$article.release_datetime%}</a></span>
      	{%if $tags%}
        	<span>标签：
        	{%foreach from=$tags item=tag%}
        		{%if $tag.last%}
        			<a href="/index/index?tagid={%$tag.id%}">{%$tag.name%}</a>
        		{%else%}
        			<a href="/index/index?tagid={%$tag.id%}">{%$tag.name%}</a>、
        		{%/if%}
        	{%/foreach%}
        	</span>
       	{%/if%}
      	<span><a href="/article/info?articleid={%$article.id%}">浏览({%$article.read_times%})</a></span><span><a href="/article/info?articleid={%$article.id%}#comment">评论({%$article.comment_times%})</a></span></p>
      </p>
      
      <ul class="infos">
        {%$article.content%}
      </ul>
      
      <div class="bdsharebuttonbox">
      	<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
      	<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
      	<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
      	<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
      	<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
      	<a href="#" class="bds_fbook" data-cmd="fbook" title="分享到Facebook"></a>
      	<a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a>
      	<a href="#" class="bds_more" data-cmd="more"></a>
      </div>
	  <script>
	  	window._bd_share_config={
  			"common":{
  				"bdText":"{%$article.title%} | www.zwiter.com",
  				"bdDesc":"{%$article.title%}",
  				"bdUrl":"http://www.zwiter.com/article/info?articleid={%$article.id%}",
  				{%if $article.headimage%}
  				"bdPic":"{%$article.headimage%}",
  				{%/if%}
  				"bdMini":"2",
  				"bdMiniList":false,
  				"bdStyle":"1",
  				"bdSize":"16"
  			},
  			"share":{},
  			"image":{
  				"viewList":["weixin","tsina","tqq","qzone","renren","fbook","douban"],
  				"viewText":"分享到：",
  				"viewSize":"16"
  			},
 			"selectShare":{
 				"bdContainerClass":null,
 				"bdSelectMiniList":["weixin","tsina","tqq","qzone","renren","fbook","douban"]
 			}
	  	};
	  	with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
	  	
	  </script>
     
      {%*
      <div class="keybq">
        <p><span>关键字词</span>：黑色,个人博客,时间轴,响应式</p>
      </div>
      <div class="nextinfo">
        <p>上一篇：<a href="/news/s/2013-09-04/606.html">程序员应该如何高效的工作学习</a></p>
        <p>下一篇：<a href="/news/s/2013-10-21/616.html">柴米油盐的生活才是真实</a></p>
      </div>
      *%}
      
      {%if $relateArticle%}
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
	        {%foreach from=$relateArticle item=value%}
				<li><a href="/article/info?articleid={%$value.id%}">{%$value.name%}</a></li>
			{%/foreach%}
        </ul>
      </div>
      {%/if%}
      
      <div class="comment" id="comment">
        <h2 style="background: url(/static/frontend/images/comment.png) 10px center no-repeat; ">热点评论</h2>
        
        {%assign var="floor" value=1%}
        {%foreach from=$comments item=commentInfo%}
       	<div class="comment_info" id="floor-{%$floor%}">
       		<div class="comment_user">
        		<img src="/static/frontend/images/people.png" style="width:70px;">
        		<div  class="comment_user_name" style="word-wrap:break-word;width:70px;">
        			{%$commentInfo.comment->getName()%}
        		</div>
        		<div class="clear"></div>
        	</div>
        	<div style="float:left;padding-left:23px;font-weight:normal;">
	        	<label style="float:left;">{%$commentInfo.date%} &nbsp;&nbsp;|&nbsp; <a href="#floor-{%$floor%}" class="floor">#{%$floor%}</a></label>
	        	<label style="float:right;margin-left:325px;"><a class='replay replaybutton' name="{%$commentInfo.comment->getName()%}" href='#form_comment'>回复</a> | <a class='replay quotebutton' pid="{%$commentInfo.comment->getId()%}" pidnum="{%$commentInfo.comment->getId()%},{%$commentInfo.comment->getPid()%}" href='#form_comment'>引用</a></label>
	        	<div class="clear"></div>
        	</div>
        	
        	<div class="comment_content">
        		<div style="width:565px;">
        			{%*正序评论的用户名*%}
        			{%foreach from=$commentInfo.father item=fatherComment%}
       					{%assign var="px" value=(500 - ($fatherComment.count - 1) * 50) %}
       				<div class='comment_quote' style="width:{%$px%}px;">
        				{%if $fatherComment.count <10 %}
        					<div style="font-weight:bold;">
        						{%$fatherComment.comment->getName()%}：
        					</div>
        				{%/if%}
        			{%/foreach%}
        			
        			{%*倒序评论的信息*%}
        			{%foreach from=$commentInfo.fatherDesc item=fatherComment%}
       					<div class="comment_content_info">
        				{%if $fatherComment.count <10 %}
			        			{%$fatherComment.comment->getContent()%}
			        	{%else%}
			        			......
			        	{%/if%}	
			        	</div>
        			</div>
        			{%/foreach%}
        			
        			<div class="comment_content_info">
        				{%$commentInfo.comment->getContent()%}
        			</div>
        			
        		</div>
        		<div class="clear"></div>
        	</div>
        	<div class="clear"></div>
        </div>
        {%assign var="floor" value=$floor + 1%}
        {%/foreach%}
        {%widget
		 	name="frontend:widget/page.tpl"
	  	%}
        <div style="float:block;height:0px;"></div>
        
        <form id="form_comment" style="border-top:#dcdcdc 1px dashed;font-size:12px;color:#756f71;" method="post" action="/article/commitComment">
        	<input class="inputblue" name="name" id="comment_name" type="text" style="color:#756f71;width:200px;padding-left:5px;padding-right:5px;" value="{%$userInfo.username%}"/> 昵称 (必填)<br />
        	<input class="inputblue" name="email" id="comment_email" type="text" style="color:#756f71;width:200px;padding-left:5px;padding-right:5px;" value="{%$userInfo.useremail%}"/> 电子邮箱 (我们会为您保密)<br />
        	<textarea class="inputblue" name="content" id="comment_content" style="color:#756f71;width:550px;height:150px;padding:5px;font-size:12px;"></textarea><br />
        	<input type="hidden" id="form_comment_pid" name="pid" value=""/>
        	<input type="hidden" name="articleid" value="{%$article.id%}"/>
        	<input type="hidden" name="comment_floor" value="{%$floor%}"/>
        	<div class="commentsubmit" id="comment_submit">提交评论</div>
        </form>
        
      </div>
    </div>
  </article>
  <aside>
    {%widget
	 	name="frontend:widget/aside.tpl"
  	%}
  </aside>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
{%require name='frontend:page/article/info.tpl'%}{%/block%}
