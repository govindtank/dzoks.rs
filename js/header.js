$(document).scroll(function() { 
	if($(document).scrollTop() > 0) {
		if($(document).scrollTop() >= $("header").height() / 2) {
	   		$("header").addClass("scrolling");
	   		$(".status").fadeOut();
		}else {
	   		$("header").removeClass("scrolling");
	   		$(".status").fadeIn();
		}
	}
});
