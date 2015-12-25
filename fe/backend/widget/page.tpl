<div class="pagination">
    <ul>
        {%if $pages.lastnext.last == 0%}
        <li class="disabled first-child"><span>上一页</span></li>
        {%else%}
        <li class="first-child"><a href="{%$pageUrl%}page={%$pages.lastnext.last%}{%$pageUrlOther%}">上一页</a></li>
        {%/if%}
        
	    {%foreach from=$pages.pages item=page%}
	        {%if $page.type == 1%}
	            <li><a href="{%$pageUrl%}page={%$page.value%}{%$pageUrlOther%}">{%$page.value%}</a></li>
	        {%elseif $page.type == 2%}
	            <li class="disabled"><span>{%$page.value%}</span></li>
	        {%elseif $page.type == 3%}
	            <li class="disabled"><span>{%$page.value%}</span></li>
	        {%/if%}
	    {%/foreach%}
        
        {%if $pages.lastnext.next == 0%}
        <li class="disabled"><span>下一页</span></li>
        {%else%}
        <li class="last-child"><a href="{%$pageUrl%}page={%$pages.lastnext.next%}{%$pageUrlOther%}">下一页</a></li>
        {%/if%}
    </ul>
</div>