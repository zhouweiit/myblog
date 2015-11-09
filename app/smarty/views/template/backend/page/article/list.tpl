{%extends file="common/page/backMainLayout.tpl"%}
{%block name="head"%}
{%/block%}
{%block name="content"%}
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
                        <td><input type="text" name="article_id" class="input-text lh25" size="30"></td>
                        <td class="header">阅读次数</td>
                        <td><div style="width:160px;"><input type="text" name="read_times_start" class="input-text lh25" size="10"> ~ <input type="text" name="read_times_end" class="input-text lh25" size="10"></div></td>
                        <td class="header">分类</td>
                        <td>
                            <select name="first_category" class="select">
                                <option>请选择</option>
                                {%foreach from=$firstCategorys item=firstCategory%}
                                <option value="{%$firstCategory.id%}">{%$firstCategory.name%}</option>    
                                {%/foreach%}
                            </select>
                            <select name="second_category" class="select">
                                <option>请选择</option>
                                {%foreach from=$secondCategorys item=secondCategory%}
                                <option value="{%$secondCategory.id%}">{%$secondCategory.name%}</option>    
                                {%/foreach%}
                            </select>
                        </td>
                    </tr>
                    <tr>    
                        <td class="header">文章名称</td>
                        <td><input type="text" name="article_name" class="input-text lh25" size="30"></td>
                        <td class="header">评论次数</td>
                        <td><div style="width:160px;"><input type="text" name="comment_times_start" class="input-text lh25" size="10"> ~ <input type="text" name="comment_times_end" class="input-text lh25" size="10"></div></td>
                        <td class="header">标签</td>
                        <td>
                            <select name="tag" class="select">
                                <option>请选择</option>
                                {%foreach from=$tags item=tag%}
                                <option value="{%$tag->getId()%}">{%$tag->getName()%}</option>    
                                {%/foreach%}
                            </select>
                            <select name="tag" class="select">
                                <option>请选择</option>
                                {%foreach from=$tags item=tag%}
                                <option value="{%$tag->getId()%}">{%$tag->getName()%}</option>    
                                {%/foreach%}
                            </select>
                            <select name="tag" class="select">
                                <option>请选择</option>
                                {%foreach from=$tags item=tag%}
                                <option value="{%$tag->getId()%}">{%$tag->getName()%}</option>    
                                {%/foreach%}
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="header">发布开始时间</td>
                        <td><input type="text" name="name" id="release_time_start" class="input-text lh25" size="30"></td>
                        <td class="header">发布结束时间</td>
                        <td><input type="text" name="name"  id="release_time_end" class="input-text lh25" size="30"></td>
                        <td></td>
                        <td>
                            <input type="button" class="ext_btn ext_btn_success" value="搜索">&nbsp;
                            &nbsp;
                            <input type="button" class="ext_btn ext_btn_success" value="清空">
                        </td>
                    </tr>    
                </table>
            </div>
        </div>
    </div>
</div>

<div id="table" class="mt10">
    <div class="box span10 oh">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
            <tr>
                <th width="4%">ID</th>
                <th width="20%">标题</th>
                <th width="15%">分类</th>
                <th width="17%">标签</th>
                <th width="5%">阅读次数</th>
                <th width="5%">评论次数</th>
                <th width="12%">发布时间</th>
                <th width="10%">操作</th>
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
                <td align="center"></td>
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
    $('#release_time_end').timepicker();
});
{%/script%}
{%require name='backend:page/article/list.tpl'%}{%require name='backend:page/article/list.tpl'%}{%/block%}