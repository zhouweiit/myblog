{%extends file="common/page/backMainLayout.tpl"%}
{%block name="head"%}
{%require name="common:static/js/jsencrypt.min.js"%}
{%/block%}
{%block name="content"%}

<div style="height:800px;width:100%;">
	<div id="search_bar" class="mt10" style="width:280px;display:block;">
	    <div class="box">
	        <div class="box_border">
	            <div class="box_top">
	                <b class="pl15">登录博客管理系统</b>
	            </div>
	            <div class="box_center pt10 pb10">
	                <table class="form_table" border="0" cellpadding="0" cellspacing="0">
	                    <tr>
	                       <td>&nbsp;&nbsp;用户名</td>
	                       <td>&nbsp;&nbsp;<input type="text"  id="username" class="input-text lh25" size="30"></td>
	                    </tr>
	                    <tr>
	                       <td>&nbsp;&nbsp;密码</td>
                           <td>&nbsp;&nbsp;<input type="text" id="password" class="input-text lh25" size="30"></td>
	                    </tr>
	                    <tr>
	                       <td>&nbsp;&nbsp;验证码</td>
                           <td>
                                &nbsp;&nbsp;<input type="text" id="captcha" class="input-text lh25" size="10">
                                <img src="/backend/login/captcha" id="captcha_img"/>
                           </td>
	                    </tr>
	                    <tr>
                           <td colspan="2">
                                <input id="publickey"  type="hidden" value="{%$publickey%}"/>
                                &nbsp;&nbsp;<input type="submit" id="submitButtom" value="登录" class="ext_btn ext_btn_submit">
                           </td>
                        </tr>
	                </table>
	             </div>
	        </div>
	    </div>
	</div>                 
</div>
{%script%}
$(function(){
	$("#submitButtom").click(function(evt) {
	    var username = $.trim($("#username").val());
	    var password = $("#password").val();
	    var captcha = $.trim($("#captcha").val());
	
	    if(username == "" || password == "" || captcha == ""){
	        $("#captcha_img").click();
	        alert("用户名/密码/验证码不得为空");
	        return false;
	    }
	
	    var crypt = new JSEncrypt();
	
	    var publickey = $('#publickey').val();
	
	    crypt.setPublicKey(publickey);
	
	    var encryptPassword = crypt.encrypt($('#password').val());
	
	    var requestdata = {
	        'username':username,
	        'password':encryptPassword,
	        'captcha':captcha
	    };
	    $.ajax({
	        type: "POST",
	        url:"/backend/login/login",
	        data:requestdata,
	        async: true,
	        dataType:'json',
	        error: function(request) {
	           $("#captcha_img").click();
	        },
	        success: function(data) {
	            if(data.status==1){
	                window.location.href="/backend/index/index";
	                return;
	            } else if(data.status==2){
	                alert("您输入的用户名不存在");
	            } else if(data.status==3 || data.status==4){
	                alert("您输入的帐户名/密码/验证码不正确，请重新输入")
	            } else{
	                alert("未知错误。联系我们！")
	            }
	            $("#captcha_img").click();
	        }
	    });
	});
	
	$("#captcha_img").click(function(event) {
        $(this).attr('src','/backend/login/captcha?'+Math.random());
    });
});
{%/script%}
{%/block%}