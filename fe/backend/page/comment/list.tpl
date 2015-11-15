{%extends file="common/page/backMainLayout.tpl"%}
{%block name="head"%}
{%/block%}
{%block name="content"%}

<div id="table" class="mt10">
    <div class="box span10 oh">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
            <tr>
                <th width="3%"></th>
                <th width="5%">ID</th>
                <th width="45%">评论</th>
                <th width="28%">关键字</th>
                <th width="20%">操作</th>
            </tr>
            {%foreach from=$commentInfos item=comment%}
            <tr class="tr">
                <td align='center'><input type="checkbox" value="{%$comment->getId()%}" class="commentid"/></td>
                <td align='center'>{%$comment->getId()%}</td>
                <td>&nbsp;&nbsp;{%$comment->getContent()%}</td>
                <td>&nbsp;&nbsp;{%$comment->getKeywords()%}</td>
                <td align="center">
                    <input type="submit"  commentid="{%$comment->getId()%}" value="跳转" onclick='window.open("/article/info?articleid={%$comment->getArticleId()%}")' class="ext_btn ext_btn_submit">
                </td>
            </tr>
            {%/foreach%}
            <tr>
                <td colspan="5" align="right">
                    <input type="submit" value="通过"  id="pass" class="ext_btn ext_btn_submit">
                    <input type="submit" value="不通过" id="nopass" class="ext_btn ext_btn_submit">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
            </tr>
        </table>
        
        <div class="page mt10">
           {%widget name="backend:widget/page.tpl" %}
        </div>
    </div>
</div>
{%script%}
$(function(){
    $("#pass").click(function(){
        var id='0';
        $('input.commentid').each(function(){
            if ($(this).attr('checked') == 'checked'){
                id += "," + $(this).attr('value');
            }
        }); 
        if (id == '0'){
            return;
        }
        $.ajax({
            url: '/backend/comment/ajaxCheck',
            type: 'post',
            dataType: 'json',
            data:'id='+id+"&check=1",
            success: function( resp, status ) {
                
            },
            error: function (data, status, e){
            }
        });
    });
    
    $("#nopass").click(function(){
        var id='0';
        $('input.commentid').each(function(){
            if ($(this).attr('checked') == 'checked'){
                id += "," + $(this).attr('value');
            }
        }); 
        if (id == '0'){
            return;
        }
        $.ajax({
            url: '/backend/comment/ajaxCheck',
            type: 'post',
            dataType: 'json',
            data:'id='+id+"&check=0",
            success: function( resp, status ) {
                
            },
            error: function (data, status, e){
            }
        });
    });
})
{%/script%}
{%/block%}