{%extends file="common/page/backMainLayout.tpl"%}
{%block name="head"%}
{%/block%}
{%block name="content"%}
<div id="forms" class="mt10">
    <div class="box">
        <div class="box_border">
            <div class="box_top">
                <b class="pl15">{%if $type == 'edit'%}文章编辑{%else%}文章发布{%/if%}</b>
            </div>
            <div class="box_center">
                <form action="" class="jqtransform" id="articleform">
                    <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                        {%if $type == 'edit'%}
                        <tr>
                            <td class="header" width="10%">ID：</td>
                            <td class="">{%$article.id%}<input type="hidden" value="{%$article.id%}" id="id"/></td>
                        </tr>
                        {%/if%}
                        <tr>
                            <td class="header" width="10%">标题：</td>
                            <td class=""><input type="text" id="title" name="title" class="input-text lh30" size="40" value="{%$article.title%}"><label class="error"></label></td>
                        </tr>
                        <tr>
                            <td class="header" width="10%">阅读次数：</td>
                            <td class=""><input type="text" id="read_times" name="read_times" class="input-text lh30" size="10" value="{%$article.read_times%}"><label class="error"></label></td>
                        </tr>
                        <tr>
                            <td class="header" width="10%">评论次数：</td>
                            <td class=""><input type="text" id="comment_times" name="comment_times" class="input-text lh30" size="10" value="{%$article.comment_times%}"><label class="error"></label></td>
                        </tr>
                        <tr>
                            <td class="header" width="10%">发布时间：</td>
                            <td class=""><input type="text" name="release_datetime" id="release_datetime" class="input-text lh30" size="40" value="{%$article.release_datetime%}"><label class="error"></label></td>
                        </tr>
                        <tr>
                            <td class="header">分类：</td>
                            <td class="">
	                            <div class="select_border">
	                                <div class="select_containers ">
	                                    <select name="first_category" class="select" id="first_category">
			                                <option value="">请选择</option>
			                                {%foreach from=$firstCategorys item=firstCategory%}
			                                <option value="{%$firstCategory.id%}" {%if $firstCategoryId == $firstCategory.id%}selected="selected"{%/if%}>{%$firstCategory.name%}</option>    
			                                {%/foreach%}
			                            </select>
			                             <select name="second_category" class="select" id="second_category">
                                            <option value="">请选择</option>
                                            {%foreach from=$secondCategorys item=secondCategory%}
                                            <option value="{%$secondCategory.id%}" {%if $secondCategoryId == $secondCategory.id%}selected="selected"{%/if%}>{%$secondCategory.name%}</option>    
                                            {%/foreach%}
                                        </select><label class="error"></label>
	                                </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="header">标签：</td>
                            <td class="">
                                <div class="select_border">
                                    <div class="select_containers ">
                                        <select name="tag[]" class="select tag">
			                                <option value="">请选择</option>
			                                {%foreach from=$tags item=tag%}
			                                <option value="{%$tag.id%}" {%if $articletag[0].id == $tag.id%}selected="selected"{%/if%}>{%$tag.name%}</option>    
			                                {%/foreach%}
			                            </select>
                                        <select name="tag[]" class="select tag">
			                                <option value="">请选择</option>
			                                {%foreach from=$tags item=tag%}
			                                <option value="{%$tag.id%}" {%if $articletag[1].id == $tag.id%}selected="selected"{%/if%}>{%$tag.name%}</option>    
			                                {%/foreach%}
			                            </select>
                                        <select name="tag[]" class="select tag">
			                                <option value="">请选择</option>
			                                {%foreach from=$tags item=tag%}
			                                <option value="{%$tag.id%}" {%if $articletag[2].id == $tag.id%}selected="selected"{%/if%}>{%$tag.name%}</option>    
			                                {%/foreach%}
			                            </select><label class="error"></label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="header">列表图片：</td>
                            <td class="">
                                <img id="headimage" src="{%$article.headimage%}" onerror="this.src='/static/backend/images/no_image.png'" style="width:200px;"/><br />
                                <div style="height:8px;"></div>
                                <input type="text" name="headimage" id="headimagesrc" value="{%$article.headimage%}"  class="input-text lh30" size="40">
                                <input type="button" id="chooseimage" class="ext_btn ext_btn_success" value="确定" ><label class="error"></label>
                            </td>
                        </tr>
                        <tr>
                            <td class="header">列表内容：</td>
                            <td class="">
                                <textarea name="headcontent" id="headcontent" rows="15" cols="120">{%$article.headcontent%}</textarea>
                                <label class="error" style="display:block"></label>
                            </td>
                        </tr>
                        <tr>
                            <td class="header">文章内容：</td>
                            <td class="">
                                <textarea name="content" id="content" rows="10" cols="80">{%$article.content%}</textarea>
								<label class="error" style="display:block"></label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='2' style="text-align:center;">
                                <input type="hidden" id="committype" value="{%$type%}"/>
                                <input type="hidden" name="isprevew" value="true"/>
                                <input type="button" id="commit" class="ext_btn ext_btn_success" value="提交" >
                                &nbsp;&nbsp;&nbsp;
                                <input type="button" id="preview" class="ext_btn ext_btn_success" value="预览" >
                                 &nbsp;&nbsp;&nbsp;
                                <input type="button" onclick="javascript:document.location.reload();" class="ext_btn ext_btn_success" value="还原" >
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
{%script%}
$(function(){
    
	$('#release_datetime').datetimepicker();
	contentck = CKEDITOR.replace( 'content');
	CKEDITOR.editorConfig = function( config ) {
	    config.toolbarGroups = [
	        { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
	        { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
	        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
	        { name: 'forms', groups: [ 'forms' ] },
	        '/',
	        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
	        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
	        { name: 'links', groups: [ 'links' ] },
	        { name: 'insert', groups: [ 'insert' ] },
	        '/',
	        { name: 'styles', groups: [ 'styles' ] },
	        { name: 'colors', groups: [ 'colors' ] },
	        { name: 'tools', groups: [ 'tools' ] },
	        { name: 'others', groups: [ 'others' ] },
	        { name: 'about', groups: [ 'about' ] }
	    ];
	};
	
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
            error: function (data, status, e)
            {
            }
        });
    });
    
//    $("#second_category").change(function(){
//        var categoryId = $(this).val();
//        $.ajax({
//            url: '/backend/dictionary/ajaxTagByCategoryId',
//            type: 'post',
//            dataType: 'json',
//            data:'category_id='+categoryId,
//            success: function( resp, status ) {
//                var html='<option value="">请选择</option>';
//                $(resp).each(function(i){
//                    html += '<option value="'+resp[i].id+'">'+resp[i].name+'</option>';
//                });
//                $("select.tag").html(html);
//            },
//            error: function (data, status, e)
//            {
//            }
//        });
//    });
    
    $("#chooseimage").click(function(){
        $("#headimage").attr('src',$("#headimagesrc").val());
    });
    
    $("#commit").click(function(){
        var committype = $("#committype").val();
        var id = $("#id");
        var title = $("#title");
        var read_times = $("#read_times");
        var comment_times = $("#comment_times");
        var release_datetime = $("#release_datetime");
        var first_category = $("#first_category");
        var second_category = $("#second_category");
        var tag = $("select.tag");
        var headimage = $("#headimagesrc");
        var headcontent = $("#headcontent");
        var content = $("#content");
        
        var checktitle = validata_title(title,title.val());
        var checkheadcontent = validata_headcontent(headcontent,headcontent.val());
        var checkcontent = validata_content(content,contentck.getData());
        var checkreadtimes = validata_read_times(read_times,read_times.val());
        var checkcommenttimes = validata_comment_times(comment_times,comment_times.val());
        var releasedatetime = validata_release_datetime(release_datetime,release_datetime.val()+":00");
        var checksecondcategory = validata_second_category(second_category,second_category.val());
        
        var tagval = "";
        tag.each(function(){
            var tagid = $(this).val();
            if (checkInteger(tagid) && parseInt(tagid) > 0){
                tagval += tagid+',';
            }  
        });
        var requestdata = {
            'id':id.val(),
            'title':title.val(),
            'read_times':read_times.val(),
            'comment_times':comment_times.val(),
            'release_datetime':release_datetime.val(),
            'first_category':first_category.val(),
            'second_category':second_category.val(),
            'tag':tagval,
            'headimage':headimage.val(),
            'headcontent':headcontent.val(),
            'content':contentck.getData(),
            'committype':committype
        };
        
        $.ajax({
            url: '/backend/article/ajaxSubmit',
            type: 'post',
            dataType: 'json',
            data:requestdata,
            success: function( resp, status ) {
                if (resp == true){
                    alert('操作成功!');
                    location.href="/backend/article/list";
                } else {
                    alert('操作失败!');
                }
            },
            error: function (data, status, e) {
            }
        });
        
    });
    
    $("#preview").click(function(){
        var form = $("#articleform");
        form.attr('action','/article/preview');
        form.attr('target', "_blank");
        form.attr('method', "post");
        form.submit();
    }); 
    
    function validata_title(obj,title){
        var title = trim(title);
        if (title.length <= 0){
            error_info(obj,'标题不能为空！');
            return false;
        }
        error_info(obj,'');
        return true;
    }
    
    function validata_headcontent(obj,headcontent){
        var headcontent = trim(headcontent);
        if (headcontent.length <= 0){
            error_info(obj,'列表内容不能为空！');
            return false;
        }
        error_info(obj,'');
        return true;
    }
    
    function validata_content(obj,content){
        var content = trim(content);
        if (content.length <= 0){
            error_info(obj,'内容不能为空！');
            return false;
        }
        error_info(obj,'');
        return true;
    }
    
    function validata_read_times(obj,times){
        var times = trim(times);
        if (!checkInteger(times) || parseInt(times) <= 0){
            error_info(obj,'阅读次数必须是正整数！');
            return false;
        }
        error_info(obj,'');
        return true;
    }
    
    function validata_comment_times(obj,times){
        var times = trim(times);
        if (!checkInteger(times) || parseInt(times) <= 0){
            error_info(obj,'评论次数必须是正整数！');
            return false;
        }
        error_info(obj,'');
        return true;
    }
    
    function validata_release_datetime(obj,datetime){
        var datetime = trim(datetime);
        if (!checkFullTime(datetime)){
            error_info(obj,'发布时间必须是日期类型，格式YYYY-MM-DD HH:MM！');
            return false;
        }
        error_info(obj,'');
        return true;
    }
    
    function validata_second_category(obj,category){
        var category = trim(category);
        if (category.length <= 0){
            error_info(obj,'分类不能为空！');
            return false;
        }
        error_info(obj,'');
        return true;
    }
    
});
{%/script%}
{%require name='backend:page/article/edit.tpl'%}{%require name='backend:page/article/edit.tpl'%}{%/block%}
