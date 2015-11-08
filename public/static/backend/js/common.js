$(function(){
	//表格行，鼠标放上去变色
	$(".tr:odd").css("background", "#FFFCEA");
	$(".tr:odd").each(function(){
		$(this).hover(function(){
			$(this).css("background-color", "#FFE1FF");
		}, function(){
			$(this).css("background-color", "#FFFCEA");
		});
	});
	$(".tr:even").each(function(){
		$(this).hover(function(){
			$(this).css("background-color", "#FFE1FF");
		}, function(){
			$(this).css("background-color", "#fff");
		});
	}); 

	/*ie6,7下拉框美化*/
    if ( $.browser.msie ){
    	if($.browser.version == '7.0' || $.browser.version == '6.0'){
    		$('.select').each(function(i){
			   $(this).parents('.select_border,.select_containers').width($(this).width()+5); 
			 });
    		
    	}
    }
    
    $(".sideMenu").slide({
       titCell:"h3", 
       targetCell:"ul",
       defaultIndex:false, 
       effect:'slideDown', 
       delayTime:'500' , 
       trigger:'click', 
       triggerTime:'150', 
       defaultPlay:true, 
       returnDefault:false,
       easing:'easeInQuint',
       endFun:function(){
    	   scrollWW();
       }
     });
    
    $(window).resize(function() {
        scrollWW();
    });
 
    $(".sideMenu ul li").click(function(){
    	var href = $(this).attr('href');
    	$("#rightMain").attr('src',href);
    	$(".sideMenu ul li").removeClass('on');
    	$(this).addClass('on');
    	var first = $(this).parent().prev().html();
    	var second = $(this).html();
    	var navigation = first + ' >> ' + second;
    	$("#side_here_r").html(navigation);
    });
    
});

function scrollWW(){
	if($(".side").height()<$(".sideMenu").height()){
	   $(".scroll").show();
	   var pos = $(".sideMenu ul:visible").position().top-38;
	   $('.sideMenu').animate({top:-pos});
	}else{
	   $(".scroll").hide();
	   $('.sideMenu').animate({top:0});
       n=1;
	}
} 

var n=1;
function menuScroll(num){
  var Scroll = $('.sideMenu');
  var ScrollP = $('.sideMenu').position();
  /*alert(n);
  alert(ScrollP.top);*/
  if(num==1){
     Scroll.animate({top:ScrollP.top-38});
     n = n+1;
  }else{
    if (ScrollP.top > -38 && ScrollP.top != 0) { ScrollP.top = -38; }
    if (ScrollP.top<0) {
      Scroll.animate({top:38+ScrollP.top});
    }else{
      n=1;
    }
    if(n>1){
      n = n-1;
    }
  }
}