<header>
	<div class="writeinfo" style="height:100px;">
		<div style="float:left;">
		   	<h1>笑傲江湖</h1>
		   	<h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
	   	</div>
	   	<div style="float:right;padding-top:15px;font:16px '宋体', Arial, Helvetica, sans-serif;color:#bbbbbb;">
	   		<div style="float:left;">
	   			<img style="width:70px;" src="/static/frontend/images/s8.jpg"/>
	   		</div>
	   		<div style="float:left;width:180px;padding-left:3px;">
	   			<div class="info" style="height:26px;padding-top:8px;padding-left:10px;">
	   				<div><label style="color:#ffffff;font-size:23px;">zwiter</label> <label style="font-size:12px;">二十一世纪类人源</label></div>
	   			</div>
	   			<div class="links" style="height:34px;padding-left:10px;padding-top:7px;">
	   				<img style="width:30px;float:left;" src="/static/frontend/images/s8.jpg"/>
	   				<img style="width:30px;float:left;margin-left:10px;" src="/static/frontend/images/s8.jpg"/>
	   				<img style="width:30px;float:left;margin-left:10px;" src="/static/frontend/images/s8.jpg"/>
	   				<img style="width:30px;float:left;margin-left:10px;" src="/static/frontend/images/s8.jpg"/>
	   			</div>
	   		</div>
	   	</div>
   	</div>
   	<nav id="topnav">
		<a href="/index/index" {%if $index%}id="topnav_current"{%/if%}>首页</a>
   		{%foreach from=$firstCategory item=category%}
       		<a href="/index/index?categoryid={%$category.id%}" {%if $category.id == $firstCategoryId%}id="topnav_current"{%/if%}>{%$category.name%}</a>
       	{%/foreach%}
   		<a href="/message/leave" {%if $leave%}id="topnav_current"{%/if%}>留言小本</a>
   		<a href="/about/blog" {%if $blog%}id="topnav_current"{%/if%}>关于我</a>
   		<img class="imageserach" src="/static/frontend/images/search.png"/>
   		<input class="inputblue" type="text" placeholder="  全站搜索" style="float:right;"/>
   	</nav>
</header>