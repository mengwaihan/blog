parcala(".demo5", "b");

function parcala(e, tag) {
	$(e).each(function(index) {
		var char = $(this).text().split("");
		$this = $(this);
		$this.empty();
		$.each(char, function(i, el) {
			$this.append("<" + tag + ">" + el + "</" + tag + ">");
		});
	});
}



$(function(){	
	$(".new-one").mousemove(function(){
       $(".newone-content").slideDown("slow");
   });
   $(".new-one").mouseleave(function(){
       $(".newone-content").slideUp("slow");
   });
});



  $(".new-two").hover(function(){
	   $(".newtwo-content").stop().animate({
	      'bottom':'0'
	    },400);
   },function(){
	   $(".newtwo-content").stop().animate({
	      'bottom':'-200px'
	    },400);
   });
   

  $(".new-three").hover(function(){
	   $(".newthree-content").stop().animate({
	      'bottom':'0'
	    },400);
   },function(){
	   $(".newthree-content").stop().animate({
	      'bottom':'-100px'
	    },400);
   });
  

  
//返回顶部
  function scrollTo(offsetTop){
      $("body,html").animate({
          scrollTop: offsetTop
      }, 600);
  }
  
  
