<header>
	<div class="writeinfo" style="height: 100px;">
		<div style="float: left;">
			<h1>码农 - www.zwiter.com</h1>
			<h2>如果害怕不能一次成功，那就叫先它1.0版吧...</h2>
		</div>
		<div
			style="float: right; padding-top: 15px; font: 16px '宋体', Arial, Helvetica, sans-serif; color: #bbbbbb;">
			<div style="float: left;">
				<img style="width: 70px;" src="/static/frontend/images/s8.jpg" />
			</div>
			<div style="float: left; width: 180px; padding-left: 3px;">
				<div class="info"
					style="height: 30px; padding-top: 8px; padding-left: 10px;">
					<div>
						<label style="color: #ffffff; font-size: 23px;">zwiter</label> <label
							style="font-size: 12px;"></label>
					</div>
				</div>
				<div class="links"
					style="height: 34px; padding-left: 10px; padding-top: 7px;">
					<wb:follow-button uid="5706395113" type="red_1" width="67"
						height="24"></wb:follow-button>
				</div>
			</div>
		</div>
	</div>
	<nav id="topnav">
		<a href="/index/index" {%if $index%}id="topnav_current"{%/if%}>首页</a>
		{%foreach from=$firstCategory item=category%} <a
			href="/index/index?categoryid={%$category.id%}" {%if $category.id==
			$firstCategoryId%}id="topnav_current"{%/if%}>{%$category.name%}</a>
		{%/foreach%} <a href="/message/leave" {%if $leave%}id="topnav_current"{%/if%}>留言小本</a>
		{%* <a href="/about/blog" {%if $blog%}id="topnav_current"{%/if%}>关于我</a>
		*%}
		<form action="/index/index" method="post" style="float: right">
			<img class="imageserach" src="/static/frontend/images/search.png"
				onclick="javascript:submit()" /> <input class="inputblue"
				type="text" {%if $search%}placeholder="{%$search%}"
				{%else%}placeholder="全站搜索" {%/if%} name="search"
				style="float: right; padding-left: 5px;" />
		</form>
	</nav>
</header>