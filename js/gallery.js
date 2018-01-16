$(function() {
	$(".img-w").each(function() {
    	$(this).wrap("<div class='img-c'></div>");
    	let imgSrc = $(this).find("img").attr("src");
     	$(this).css('background-image', 'url(' + imgSrc + ')');
  	})
            
  
  	$(".img-c").click(function() {
    	let w = $(".gallery").outerWidth();
    	let h = $(".gallery").outerHeight();
    	let x = $(".gallery").offset().left;
    	let y = $(".gallery").offset().top;
    
    	$(".active").not($(this)).remove();
    	
		let copy = $(this).clone();
    	
		copy.insertAfter($(this)).height(h).width(w).delay(500).addClass("active");
    	
		$(".active").css('top', y);
		$(".active").css('left', x);
    
      	setTimeout(function() {
    		copy.addClass("positioned");
  		}, 0);
  	});
});

$(document).on("click", ".img-c.active", function() {
	let copy = $(this);
  	
	copy.removeClass("positioned active").addClass("postactive");
  	
	setTimeout(function() {
    	copy.remove();
  	}, 500);
});
