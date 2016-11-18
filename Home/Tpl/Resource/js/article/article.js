$(function() {
		
  		 
  		 
  		$(".back").mousemove(function() {
			$(".left-top-nav-content").fadeIn("slow");
		});
		$(".back").mouseleave(function() {
			$(".left-top-nav-content").stop().fadeOut("slow");
		}); 
		$(".back2").mousemove(function() {
			$(".left-top-nav-content-1").fadeIn("slow");
		});
		$(".back2").mouseleave(function() {
			$(".left-top-nav-content-1").stop().fadeOut("slow");
		}); 
		$(".back3").mousemove(function() {
			$(".left-top-nav-content-2").fadeIn("slow");
		});
		$(".back3").mouseleave(function() {
			$(".left-top-nav-content-2").stop().fadeOut("slow");
		}); 
		$(".back4").mousemove(function() {
			$(".left-top-nav-content-3").fadeIn("slow");
		});
		$(".back4").mouseleave(function() {
			$(".left-top-nav-content-3").stop().fadeOut("slow");
		}); 
		$(".back5").mousemove(function() {
			$(".left-top-nav-content-4").fadeIn("slow");
		});
		$(".back5").mouseleave(function() {
			$(".left-top-nav-content-4").stop().fadeOut("slow");
		});
		$(".back6").mousemove(function() {
			$(".left-top-nav-content-5").fadeIn("slow");
		});
		$(".back6").mouseleave(function() {
			$(".left-top-nav-content-5").stop().fadeOut("slow");
		}); 
		
		
	$('.left-botton').each(function(){
		var $dom = $(this);
		var $ulDom = $dom.find('ul');
		var $liLength = $dom.find('li').length;
		$ulDom.css('width',($liLength-1)*116+102);
		if($liLength==3){
			$ulDom.siblings('input').hide();
		}else{
			$ulDom.siblings('.left').hide();
		}
	});
	$('.left').click(function(){
		var $dom = $(this);
		var $btnDom = $dom.siblings('.right');
		var $ulDom = $dom.siblings('ul');
		if(!$ulDom.is(':animated')){
			$ulDom.animate({'left':'+=114px'},200,function(){
				if($ulDom.css('left')=='0px'){	
					$dom.hide();
				}else{
					$btnDom.show();
				}
			});
		}
	});
	$('.right').click(function(){
		var $dom = $(this);
		var $btnDom = $dom.siblings('.left');
		var $ulDom = $dom.siblings('ul');
		if(!$ulDom.is(':animated')){
			$ulDom.animate({'left':'-=114px'},200,function(){
				if($ulDom.css('left')=="-"+($ulDom.find('li').length-4)*114+"px"){	
					$dom.hide();
				}else{
					$btnDom.show();
				}
			});
		}

	});
	
	
	$(window).scroll(function() {
		
			$(".history-bdright h4").css("color","red");
			
        });


	});