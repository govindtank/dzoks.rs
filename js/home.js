$(document).scroll(function(){ 	
	if(!media.matches) {
		$(".scroll-up").stop().css('transform', 'skew(0, -15deg) scale(1, 2) translateY(' + (-0.5 * $(document).scrollTop()) + 'px)');
	}else {
		$(".scroll-up").stop().css('visibility', 'hidden');
	}
});
