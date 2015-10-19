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
      
      {%*
      <div class="keybq">
        <p><span>关键字词</span>：黑色,个人博客,时间轴,响应式</p>
      </div>
      <div class="nextinfo">
        <p>上一篇：<a href="/news/s/2013-09-04/606.html">程序员应该如何高效的工作学习</a></p>
        <p>下一篇：<a href="/news/s/2013-10-21/616.html">柴米油盐的生活才是真实</a></p>
      </div>
      *%}
      
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
	        {%foreach from=$relateArticle item=article%}
				<li><a href="/article/info?articleid={%$article.id%}">{%$article.name%}</a></li>
			{%/foreach%}
        </ul>
      </div>
      
      <div class="comment" id="comment">
        <h2 style="background: url(/static/frontend/images/comment.png) 10px center no-repeat; ">热点评论</h2>
        
        <div class="comment_info">
        	<div class="comment_user">
        		<img src="/static/frontend/images/s8.jpg" style="width:70px;">
        		<div  class="comment_user_name">
        			程序狗
        		</div>
        		<div class="clear"></div>
        	</div>
        	<div style="float:left;padding-left:23px;font-weight:normal;">
	        	<label style="float:left;">2015年10月11日 19:11</label>
	        	<label style="float:right;margin-left:365px;"><a class='replay' href='javascript:void(0)'>回复</a> | <a class='replay' href='javascript:void(0)'>引用</a></label>
	        	<div class="clear"></div>
        	</div>
        	<div class="comment_content">
        		<div style="width:565px;">
        			<div> <!-- 有引用，需要添加class="comment_content_info" -->
        				我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友,我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友,我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友,我们是郝朋友我们是郝朋友我们是郝朋友
        			</div>
        		</div>
        		<div class="clear"></div>
        	</div>
        	<div class="clear"></div>
        </div>
        
        <div class="comment_info">
        	<div class="comment_user">
        		<img src="/static/frontend/images/s8.jpg" style="width:70px;">
        		<div  class="comment_user_name">
        			程序狗
        		</div>
        		<div class="clear"></div>
        	</div>
        	<div style="float:left;padding-left:23px;font-weight:normal;">
	        	<label style="float:left;">2015年10月11日 19:11</label>
	        	<label style="float:right;margin-left:365px;"><a class='replay' href='javascript:void(0)'>回复</a> | <a class='replay' href='javascript:void(0)'>引用</a></label>
	        	<div class="clear"></div>
        	</div>
        	<div class="comment_content">
        		<div style="width:565px;">
        			<div> <!-- 有引用，需要添加class="comment_content_info" -->
        				<div class="atuser">@程序狗：</div>
        				我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友,我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友,我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友,我们是郝朋友我们是郝朋友我们是郝朋友
        			</div>
        		</div>
        		<div class="clear"></div>
        	</div>
        	<div class="clear"></div>
        </div>
        
        <div class="comment_info">
        	<div class="comment_user">
        		<img src="/static/frontend/images/s8.jpg" style="width:70px;">
        		<div  class="comment_user_name">
        			程序狗
        		</div>
        		<div class="clear"></div>
        	</div>
        	<div style="float:left;padding-left:23px;font-weight:normal;">
	        	<label style="float:left;">2015年10月11日 19:11</label>
	        	<label style="float:right;margin-left:365px;"><a class='replay' href='javascript:void(0)'>回复</a> | <a class='replay' href='javascript:void(0)'>引用</a></label>
	        	<div class="clear"></div>
        	</div>
        	<div class="comment_content">
        		<div style="width:565px;">
        			<div class='comment_quote' style="width:500px;">
        				<div style="font-weight:bold;">
		        			程序狗：
		        		</div>
		        		<div class="comment_content_info">
		        			我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友,我们是郝朋友我们是郝
		        		</div>
        			</div>
        			<div class="comment_content_info">
        				我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友,我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友,我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友,我们是郝朋友我们是郝朋友我们是郝朋友
        			</div>
        		</div>
        		<div class="clear"></div>
        	</div>
        	<div class="clear"></div>
        </div>
        
        <div class="comment_info">
        
        	<div class="comment_user">
        		<img src="/static/frontend/images/s8.jpg" style="width:70px;">
        		<div  class="comment_user_name">
        			程序狗
        		</div>
        		<div class="clear"></div>
        	</div>
        	<div style="float:left;padding-left:23px;font-weight:normal;">
	        	<label style="float:left;">2015年10月11日 19:11</label>
	        	<label style="float:right;margin-left:365px;"><a class='replay' href='javascript:void(0)'>回复</a> | <a class='replay' href='javascript:void(0)'>引用</a></label>
	        	<div class="clear"></div>
        	</div>
        	
        	<div class="comment_content">
        	
        		<div style="width:565px;">
        			<div class='comment_quote' style="width:500px;">
        			
        				<div style="font-weight:bold;margin-bottom:5px;">
		        			程序狗：
		        		</div>
        				
        				<div class='comment_quote' style="width:400px;">
	        				<div style="font-weight:bold;">
			        			程序狗：
			        		</div>
			        		<div class="comment_content_info">
			        			我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友,我们是郝朋友我们是郝
			        		</div>
	        			</div>
        				
		        		<div class="comment_content_info">
		        			我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友,我们是郝朋友我们是郝
		        		</div>
        			</div>
        			
        			<div class="comment_content_info">
        				我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友,我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友,我们是郝朋友我们是郝朋友我们是郝朋友我们是郝朋友,我们是郝朋友我们是郝朋友我们是郝朋友
        			</div>
        			
        		</div>
        		<div class="clear"></div>
        	</div>
        	<div class="clear"></div>
        </div>
        
        <div style="float:block;height:12px;"></div>
        <form style="border-top:#dcdcdc 1px dashed;font-size:12px;color:#756f71;">
        	<input class="inputblue" type="text" style="width:200px;"/> 昵称 (必填)<br />
        	<input class="inputblue" type="text" style="width:200px;"/> 电子邮箱 (我们会为您保密)<br />
        	<input class="inputblue" type="text" style="width:200px;"/> 网址<br />
        	<textarea class="inputblue" style="width:550px;height:150px;"></textarea><br />
        	<div class="commentsubmit">提交评论</div>
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
{%require name='frontend:page/article/info.tpl'%}{%require name='frontend:page/article/info.tpl'%}{%/block%}
