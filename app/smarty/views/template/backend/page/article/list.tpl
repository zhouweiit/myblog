{%extends file="common/page/backMainLayout.tpl"%}
{%block name="head"%}
{%/block%}
{%block name="content"%}
<form method="post" action="/backend/article/list" id="searchform">
<div id="search_bar" class="mt10">
    <div class="box">
        <div class="box_border">
            <div class="box_top">
                <b class="pl15">搜索</b>
            </div>
            <div class="box_center pt10 pb10">
                <table class="form_table" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="header">文章ID</td>
                        <td><input type="text" name="article_id" class="input-text lh25" size="30" value="{%$request.article_id%}"></td>
                        <td class="header">阅读次数</td>
                        <td><div style="width:165px;"><input type="text" name="read_times_start" value="{%$request.read_times_start%}" class="input-text lh25" size="10"> ~ <input type="text" name="read_times_end" value="{%$request.read_times_end%}" class="input-text lh25" size="10"></div></td>
                        <td class="header">一级分类</td>
                        <td>
                            <select name="first_category" class="select" id="first_category">
                                <option value="">请选择</option>
                                {%foreach from=$firstCategorys item=firstCategory%}
                                <option value="{%$firstCategory.id%}" {%if $request.first_category == $firstCategory.id%}selected="selected"{%/if%}>{%$firstCategory.name%}</option>    
                                {%/foreach%}
                            </select>
                       <td class="header">二级分类</td>
                       <td>     
                            <select name="second_category" class="select" id="second_category">
                                <option value="">请选择</option>
                                {%foreach from=$secondCategorys item=secondCategory%}
                                <option value="{%$secondCategory.id%}" {%if $request.second_category == $secondCategory.id%}selected="selected"{%/if%}>{%$secondCategory.name%}</option>    
                                {%/foreach%}
                            </select>
                        </td>
                    </tr>
                    <tr>    
                        <td class="header">文章名称</td>
                        <td><input type="text" name="title" value="{%$request.title%}" class="input-text lh25" size="30"></td>
                        <td class="header">评论次数</td>
                        <td><div style="width:165px;"><input type="text" name="comment_times_start" value="{%$request.comment_times_start%}" class="input-text lh25" size="10"> ~ <input type="text" name="comment_times_end" value="{%$request.comment_times_end%}" class="input-text lh25" size="10"></div></td>
                        <td class="header">标签多选</td>
                        <td colspan='3'>
                            <select name="tag[]" class="select tag">
                                <option value="">请选择</option>
                                {%foreach from=$tags item=tag%}
                                <option value="{%$tag.id%}" {%if $request.tag[0] == $tag.id%}selected="selected"{%/if%}>{%$tag.name%}</option>    
                                {%/foreach%}
                            </select>
                            <select name="tag[]" class="select tag">
                                <option value="">请选择</option>
                                {%foreach from=$tags item=tag%}
                                <option value="{%$tag.id%}" {%if $request.tag[1] == $tag.id%}selected="selected"{%/if%}>{%$tag.name%}</option>    
                                {%/foreach%}
                            </select>
                            <select name="tag[]" class="select tag">
                                <option value="">请选择</option>
                                {%foreach from=$tags item=tag%}
                                <option value="{%$tag.id%}" {%if $request.tag[2] == $tag.id%}selected="selected"{%/if%}>{%$tag.name%}</option>    
                                {%/foreach%}
                            </select>
                            <select name="tag[]" class="select tag">
                                <option value="">请选择</option>
                                {%foreach from=$tags item=tag%}
                                <option value="{%$tag.id%}" {%if $request.tag[3] == $tag.id%}selected="selected"{%/if%}>{%$tag.name%}</option>    
                                {%/foreach%}
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="header">发布开始时间</td>
                        <td><input type="text" name="release_time_start" value="{%$request.release_time_start%}"  id="release_time_start" class="input-text lh25" size="30"></td>
                        <td class="header">发布结束时间</td>
                        <td><input type="text" name="release_time_end" value="{%$request.release_time_end%}"  id="release_time_end" class="input-text lh25" size="30"></td>
                        <td></td>
                        <td>
                            <input type="button" id="search" class="ext_btn ext_btn_success" value="搜索" >
                        </td>
                    </tr>    
                </table>
            </div>
        </div>
    </div>
</div>
</form>

<div id="table" class="mt10">
    <div class="box span10 oh">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
            <tr>
                <th width="3%">ID</th>
                <th width="22%">标题</th>
                <th width="16%">分类</th>
                <th width="20%">标签</th>
                <th width="6%">阅读次数</th>
                <th width="6%">评论次数</th>
                <th width="12%">发布时间</th>
                <th width="15%">操作</th>
            </tr>
            {%foreach from=$articleInfo item=article%}
            <tr class="tr">
                <td align="center">{%$article.id%}</td>
                <td>&nbsp;{%$article.title%}</td>
                <td>&nbsp;
                    {%if $article.category%}
                        {%$article.category.frist.name%} >> {%$article.category.second.name%}
                    {%/if%}
                </td>
                <td>&nbsp;
                    {%foreach from=$article.tag item=tag%}
                        {%if $tag.last%}
                        {%$tag.name%}
                        {%else%}
                        {%$tag.name%}、
                        {%/if%}
                    {%/foreach%}
                </td>
                <td align="center">{%$article.read_times%}</td>
                <td align="center">{%$article.comment_times%}</td>
                <td align="center">{%$article.release_datetime%}</td>
                <td align="center">
                    <input type="submit"  articleid="{%$article.id%}" value="编辑" class="ext_btn ext_btn_submit edit">
                    <input type="submit"  articleid="{%$article.id%}" value="跳转" onclick='window.open("/article/info?articleid={%$article.id%}")' class="ext_btn ext_btn_submit">
                    <input type="submit"  articleid="{%$article.id%}" value="删除" class="ext_btn ext_btn_submit delete">
                </td>
            </tr>
            {%/foreach%}
        </table>
        
        <div class="page mt10">
           {%widget name="backend:widget/page.tpl" %}
        </div>
    </div>
</div>
{%script%}
$(function(){
    $('#release_time_start').datetimepicker();
    
    $('#release_time_end').datetimepicker();
    
    $('#search').click(function(){
        $("#searchform").submit();
    });
    
    $("input.edit").click(function(){
        var articleid = $(this).attr('articleid');
        location.href="/backend/article/edit?articleid="+articleid;
    });
    
    $("input.delete").click(function(){
        var articleid = $(this).attr('articleid');
        if(confirm("确定要删除吗?")){
	        $.ajax({
	            url: '/backend/article/ajaxDelete',
	            type: 'post',
	            dataType: 'json',
	            data:'id='+articleid,
	            success: function( resp, status ) {
	                if (resp == true){
	                    alert('删除成功!');
	                    location.href="/backend/article/list";
	                } else {
	                    alert('删除失败!');
	                }
	            },
	            error: function (data, status, e) {
	            }
	        });
        } 
    });
    
    $("#first_category").change(function(){
        var categoryId = $(this).val();
        $.ajax({
            url: '/backend/dictionary/ajaxChildCategory',
            type: 'post',
            dataType: 'json',
            data:'category_id='+categoryId,
            success: function( resp, status ) {
                var html='<option value="">请选择</option>';
                $(resp).each(function(i){
                    html += '<option value="'+resp[i].id+'">'+resp[i].name+'</option>';
                });
                $("#second_category").html(html);
            },
            error: function (data, status, e) {
            }
        });
    });
    
    $("#second_category").change(function(){
        var categoryId = $(this).val();
        $.ajax({
            url: '/backend/dictionary/ajaxTagByCategoryId',
            type: 'post',
            dataType: 'json',
            data:'category_id='+categoryId,
            success: function( resp, status ) {
                var html='<option value="">请选择</option>';
                $(resp).each(function(i){
                    html += '<option value="'+resp[i].id+'">'+resp[i].name+'</option>';
                });
                $("select.tag").html(html);
            },
            error: function (data, status, e)
            {
            }
        });
    });
    
});
{%/script%}
{%/block%}