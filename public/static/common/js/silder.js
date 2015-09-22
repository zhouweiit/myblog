/*导航当前页高亮*/
var obj=null;
var As=document.getElementById('topnav').getElementsByTagName('a');
obj = As[0];
for(i=1;i<As.length;i++){if(window.location.href.indexOf(As[i].href)>=0)
obj=As[i];}
obj.id='topnav_current'

/*百度分享广告*/
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];

$(function(){
	$("img.imageserach").mousedown(function(){
		$(this).css('width','25px');
		$(this).css('margin-right','10px');
		$(this).css('margin-top','12px');
		setTimeout(function(){
			$("img.imageserach").css('width','28px');
			$("img.imageserach").css('margin-right','7px');
			$("img.imageserach").css('margin-top','10px');
		},100);
	});
	$("img.imageserach").mouseout(function(){
		$(this).css('width','25px');
		$(this).css('margin-right','10px');
		$(this).css('margin-top','12px');
	});
	$("img.imageserach").mouseover(function(){
		$(this).css('width','28px');
		$(this).css('margin-right','7px');
		$(this).css('margin-top','10px');
	});
});