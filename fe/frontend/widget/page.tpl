<div class="page">
	{%foreach from=$pages item=page%}
		{%if $page.type == 1%}
			<a href="{%$pageUrl%}page={%$page.value%}{%$pageUrlOther%}">{%$page.value%}</a>
		{%elseif $page.type == 2%}
			<b>{%$page.value%}</b>
		{%elseif $page.type == 3%}
			<a href="{%$pageUrl%}page={%$page.value%}{%$pageUrlOther%}">{%$page.value%}</a>
		{%/if%}
	{%/foreach%}
</div>