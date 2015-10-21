$(function(){
	
	//搜索按钮样式
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
	//搜索按钮样式
	$("img.imageserach").mouseout(function(){
		$(this).css('width','25px');
		$(this).css('margin-right','10px');
		$(this).css('margin-top','12px');
	});
	//搜索按钮样式
	$("img.imageserach").mouseover(function(){
		$(this).css('width','28px');
		$(this).css('margin-right','7px');
		$(this).css('margin-top','10px');
	});
	
	//评论提交按钮样式
	$("div.commentsubmit").click(function(){
		$(this).css("padding","1px");
		$(this).css("border","#1d73ba 3px solid");
	});
	
	$("div.commentsubmit").mouseout(function(){
		$(this).css("padding","3px");
		$(this).css("border","#53a2e1 1px solid");
	});
	
	//tag cloud
	if(!$('#myCanvas').tagcanvas({
	   textColour: '#bbbbbb',
	   outlineColour: '#bbbbbb',
	   reverse: true,
	   depth: 0.8,
	   maxSpeed: 0.05,
	   initial:[0.8,-0.3],
	   maxSpeed:0.01,
	   depth:0.5
	 },'tags')) {
	   // something went wrong, hide the canvas container
	   $('#myCanvasContainer').hide();
	 };
	 
	$("a.replaybutton").click(function(){
		var name = $(this).attr('name');
		$("#comment_content").html('<div class="atuser">@'+name+'：</div>');
	});
	
	$("a.quotebutton").click(function(){
		var pid = $(this).attr('pid');
		var pidnum = $(this).attr('pidnum');
		$("#comment_content").html('<div class="comment_quote_hider">'+pid+'</div>');
		$("#form_comment_pid").val(pidnum);
	});
	 
});