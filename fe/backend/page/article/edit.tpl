{%extends file="common/page/backMainLayout.tpl"%}
{%block name="head"%}
{%/block%}
{%block name="content"%}
<div id="forms" class="mt10">
    <div class="box">
        <div class="box_border">
            <div class="box_top">
                <b class="pl15">文章编辑</b>
            </div>
            <div class="box_center">
                <form action="" class="jqtransform">
                    <table class="form_table pt15 pb15" width="100%" border="0"
                        cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="header" width="10%">ID：</td>
                            <td class=""><input type="text" name="id" class="input-text lh30" size="40"></td>
                        </tr>
                        <tr>
                            <td class="header" width="10%">标题：</td>
                            <td class=""><input type="text" name="title" class="input-text lh30" size="40"></td>
                        </tr>
                        <tr>
                            <td class="header" width="10%">阅读次数：</td>
                            <td class=""><input type="text" name="read_times" class="input-text lh30" size="40"></td>
                        </tr>
                        <tr>
                            <td class="header" width="10%">评论次数：</td>
                            <td class=""><input type="text" name="comment_times" class="input-text lh30" size="40"></td>
                        </tr>
                        <tr>
                            <td class="header" width="10%">发布时间：</td>
                            <td class=""><input type="text" name="release_time" id="release_time" class="input-text lh30" size="40"></td>
                        </tr>
                        <tr>
                            <td class="header">分类ID：</td>
                            <td class="">
	                            <div class="select_border">
	                                <div class="select_containers ">
	                                    <select name="" class="select">
	                                        <option>北京</option>
	                                        <option>天津</option>
	                                        <option>上海</option>
	                                        <option>重庆</option>
	                                    </select>
	                                </div>
	                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="header">标签：</td>
                            <td class="">
                                <div class="select_border">
                                    <div class="select_containers ">
                                        <select name="" class="select">
                                            <option>北京</option>
                                            <option>天津</option>
                                            <option>上海</option>
                                            <option>重庆</option>
                                        </select>
                                        <select name="" class="select">
                                            <option>北京</option>
                                            <option>天津</option>
                                            <option>上海</option>
                                            <option>重庆</option>
                                        </select>
                                        <select name="" class="select">
                                            <option>北京</option>
                                            <option>天津</option>
                                            <option>上海</option>
                                            <option>重庆</option>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="header">列表图片：</td>
                            <td class="">
                                <input type="text" name="headimage" class="input-text lh30" size="40">
                            </td>
                        </tr>
                        <tr>
                            <td class="header">列表内容：</td>
                            <td class="">
                                <textarea name="headcontent" id="headcontent" rows="10" cols="80"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="header">文章内容：</td>
                            <td class="">
                                <textarea name="content" id="content" rows="10" cols="80">
								</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='2' style="text-align:center;">
                                <input type="button" id="search" class="ext_btn ext_btn_success" value="提交" >
                                &nbsp;&nbsp;&nbsp;
                                <input type="button" id="search" class="ext_btn ext_btn_success" value="预览" >
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
{%script%}
$('#release_time').datetimepicker();
CKEDITOR.replace( 'content');
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
{%/script%}
{%/block%}