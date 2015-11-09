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
                        <td><input type="text" name="name" class="input-text lh25" size="30"></td>
                        <td class="header">阅读次数</td>
                        <td><div style="width:160px;"><input type="text" name="name" class="input-text lh25" size="10"> ~ <input type="text" name="name" class="input-text lh25" size="10"></div></td>
                        <td class="header">分类</td>
                        <td>
                            <select name="" class="select">
                                <option>男</option>
                                <option>女</option>
                            </select>
                            <select name="" class="select">
                                <option>男</option>
                                <option>女</option>
                            </select>
                        </td>
                    </tr>
                    <tr>    
                        <td class="header">文章名称</td>
                        <td><input type="text" name="name" class="input-text lh25" size="30"></td>
                        <td class="header">评论次数</td>
                        <td><div style="width:160px;"><input type="text" name="name" class="input-text lh25" size="10"> ~ <input type="text" name="name" class="input-text lh25" size="10"></div></td>
                        <td class="header">标签</td>
                        <td>
                            <select name="" class="select">
                                <option>男</option>
                                <option>女</option>
                            </select>
                            、
                            <select name="" class="select">
                                <option>男</option>
                                <option>女</option>
                            </select>
                            、
                            <select name="" class="select">
                                <option>男</option>
                                <option>女</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="header">发布开始时间</td>
                        <td><input type="text" name="name" class="input-text lh25" size="30"></td>
                        <td class="header">发布结束时间</td>
                        <td><input type="text" name="name" class="input-text lh25" size="30"></td>
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
{%require name='backend:page/article/list.tpl'%}{%/block%}