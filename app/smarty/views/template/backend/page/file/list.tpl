{%extends file="common/page/backMainLayout.tpl"%}
{%block name="head"%}
{%/block%}
{%block name="content"%}

<style> 

.divcss5{ width:300px; padding:5px;height:230px;display:table-cell;vertical-align:middle;text-align:center;} 
.divcss5 img{max-width:295px;_width:expression(this.width > 295 ? "295px" : this.width);} 
div.imageinfo{padding-top:5px;width:320px;text-align:left;color:#53a2e1;}
</style> 

<form id="searchform" method="post" action="/backend/file/list">
<div id="search_bar" class="mt10">
    <div class="box">
        <div class="box_border">
            <div class="box_top">
                <b class="pl15">搜索</b>
            </div>
            <div class="box_center pt10 pb10">
                <table class="form_table" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="header">文件名称</td>
                        <td><input type="text" name="file_name" class="input-text lh25" size="30" value="{%$request.file_name%}"></td>
                        <td class="header">文件大小</td>
                        <td><div style="width:200px;"><input type="text" name="size_start" value="{%$request.size_start%}" class="input-text lh25" size="5"> ~ <input type="text" name="size_end" value="{%$request.size_end%}" class="input-text lh25" size="5"></div></td>
                        <td class="header">文件路径</td>
                        <td><input type="text" name="path" value="{%$request.path%}" class="input-text lh25" size="50"></td>
                    </tr>   
                    <tr>
                        <td class="header">上传开始时间</td>
                        <td><input type="text" name="creation_date_start" value="{%$request.creation_date_start%}"  id="creation_date_start" class="input-text lh25" size="30"></td>
                        <td class="header">上传结束时间</td>
                        <td><input type="text" name="creation_date_end" value="{%$request.creation_date_end%}"  id="creation_date_end" class="input-text lh25" size="30"></td>
                        <td class="header">文件类型</td>
                        <td>
                            <select name="extension[]" class="select" id="first_category">
                                <option value="">请选择</option>
                                {%foreach from=$extensions item=extension%}
                                <option value="{%$extension%}" {%if $request.extension[0] == $extension%}selected="selected"{%/if%}>{%$extension%}</option>
                                {%/foreach%}
                            </select>
                            <select name="extension[]" class="select" id="first_category">
                                <option value="">请选择</option>
                                {%foreach from=$extensions item=extension%}
                                <option value="{%$extension%}" {%if $request.extension[1] == $extension%}selected="selected"{%/if%}>{%$extension%}</option>
                                {%/foreach%}
                            </select>
                            <select name="extension[]" class="select" id="first_category">
                                <option value="">请选择</option>
                                {%foreach from=$extensions item=extension%}
                                <option value="{%$extension%}" {%if $request.extension[2] == $extension%}selected="selected"{%/if%}>{%$extension%}</option>
                                {%/foreach%}
                            </select>
                            &nbsp;&nbsp;&nbsp;
                            <input type="button" id="search" class="ext_btn ext_btn_success" value="搜索" >
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</form>

<div id="forms" class="mt10">
    <div class="box span10 oh">
        <table width="100%" border="0" cellpadding="0" cellspacing="0"
            class="list_table">
            <tr>
                <th colspan='3' align="left">&nbsp;&nbsp;&nbsp;&nbsp;图例</th>
            </tr>
            {%assign var="count" value=0%}
            {%foreach from=$files item=file%}
	            {%if $count%3==0%}
	            <tr class="tr">
	            {%assign var="count1" value=0%}
	            {%/if%}
	            <td height='300' align="center">
                    <div style="border:1px solid #000;width:310px;height:250px;overflow:hidden;"><div class="divcss5"><a href="{%$file->getPath()%}" target="_blank"><img src="{%$file->getPath()%}" onerror="this.src='/static/backend/images/no_image.png'"/></a></div></div>
                    <div class="imageinfo">名称：<input type="text" class="input-text lh20" readonly="readonly" style="height:18px;" size="44" value="{%$file->getFileName()%}"></div>
                    <div class="imageinfo">路径：<input type="text" class="input-text lh20" readonly="readonly" style="height:18px;" size="44" value="{%$file->getPath()%}"></div>
                    <div class="imageinfo">后缀：<input type="text" class="input-text lh20" readonly="readonly" style="height:18px;" size="44" value="{%$file->getExtension()%}"></div>
                    <div class="imageinfo">大小：<input type="text" class="input-text lh20" readonly="readonly" style="height:18   px;" size="44" value="{%$file->getSize()%}KB"></div>
                </td>
	            {%if $count1 > 0 && $count1%3==0%}
	            </tr>
	            {%/if%}
                {%assign var="count" value=$count+1%}
                {%assign var="count1" value=$count1+1%}
            {%/foreach%}
            
            {%*补齐表格缺少的TD*%}
            {%section name=loop loop=3 - $count1%} 
                <td height='250' align="center">
                </td>
			{%/section%} 
			
			{%*补齐表格缺少的TR*%}
            {%if $count1 % 3 != 0%}
            </tr>
            {%/if%}
        </table>
        
        <div class="page mt10">
            {%widget name="backend:widget/page.tpl" %}
        </div>
        
    </div>
</div>
{%script%}
$(function(){
    $('#creation_date_start').datetimepicker();
    $('#creation_date_end').datetimepicker();
    
    $('#search').click(function(){
        $("#searchform").submit();
    });
    
})
{%/script%}
{%/block%}
