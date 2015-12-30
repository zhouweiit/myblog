{%extends file="common/page/frontLayout.tpl"%}
{%block name="head"%}
<script src="{%uri name="backend:static/js/validata.js"%}"></script>
{%/block%}
{%block name="content"%}
<div class="ibody">
  {%widget
	 name="frontend:widget/header.tpl"
  %}
  <article>
  	<h2 class="about_h">您现在的位置是：<a href="/">留言小本</a>&gt;&nbsp;最新留言</h2>
    <div class="index_about">
      <ul class="infos" style="margin-bottom:5px;">
        <p style="font-size:15px;font-weight:bold;">欢迎您给我留言！同时，您还可以关注我的微博、微信、github</p>
      </ul>
      
      <div class="comment" id="comment">
        <h2 style="background: url(/static/frontend/images/comment.png) 10px center no-repeat; ">网友留言</h2>
        
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
	        	<label style="float:left;width:200px;">{%$commentInfo.date%} &nbsp;&nbsp;|&nbsp; <a href="#floor-{%$floor%}" class="floor">#{%$floor%}</a></label>
	        	<label style="float:right;margin-left:275px;"><a class='replay replaybutton' name="{%$commentInfo.comment->getName()%}" href='#form_comment'>回复</a> | <a class='replay quotebutton' pid="{%$commentInfo.comment->getId()%}" pidnum="{%$commentInfo.comment->getId()%},{%$commentInfo.comment->getPid()%}" href='#form_comment'>盖楼</a></label>
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
        	<input type="hidden" name="articleid" value="0"/>
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

{%/block%}
