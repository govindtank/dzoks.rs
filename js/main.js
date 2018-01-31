const media = window.matchMedia("(max-width: 720px)");

$(document).ready(function() {    
    blink();
    setLogo();
    
    $("#nav").click(function() {
        $(this).toggleClass("open");
	   	$(".status").toggleClass("open");
    });
});

$(document).scroll(function(){ 
	if($(document).scrollTop() >= 0) {
		if($(document).scrollTop() >= $("header").height() / 2) {
	   		$("header").addClass("scrolling");
	   		$(".status").fadeOut();
		}else {
	   		$("header").removeClass("scrolling");
	   		$(".status").fadeIn();
		}

		if(!media.matches) {
			$(".scroll-up").css('transform', 'skew(0, -15deg) scale(1, 2) translateY(' + (-0.5 * $(document).scrollTop()) + 'px)');
		}else {
			$(".scroll-up").css('visibility', 'hidden');
		}
	}
});

function blink() {
    $(".tint").css("opacity", "0.33");
    
	var num = Math.round(Math.random() * (9 - 1) + 1);
    
    if(num % 3 == 0) {
        $(".tint").css("background-color", "#1abc9c");
    }else if(num % 3 == 1) {
        $(".tint").css("background-color", "#d2527f");      
    }else{
        $(".tint").css("background-color", "#3498db");      
    }
    
    setTimeout(function(){
        $(".tint").css("background-color", "transparent");
            
        var randomTime = Math.round(Math.random() * (500 - 1) + 1);
        
        setTimeout(function(){
            blink(); 
        }, randomTime);
    }, 175);
}

function setLogo() {
    if($(".logo-center").length) {
        $(".logo-center").css("width", $("#logo-big").css("height")).css("visibility", "visible");
        
        $("#logo-big").css("width", $("#logo-big").css("height"));
        $(".tint").css("width", $(".tint").css("height"));   
    }
}

function qtyDec() {
	var n = $("#qty").val();
	var min = $("#qty").attr("min");
	var step = $("#qty").attr("step");
	
	var num = n - step;

	$("#qty").val((num >= min) ? num : min);
}

function qtyInc() {
	var n = $("#qty").val();
	var max = $("#qty").attr("max");
	var step = $("#qty").attr("step");

	var num = +n + +step;

	$("#qty").val((num <= max) ? num : max);
}

$(".block-input").keypress(function(event) {
	return false;
});

$(".number").keypress(function(event) {
    if(event.charCode < 48 || event.charCode > 57) {
        return false;
    }
	
	console.log(event.charCode);

    var num = $(this).attr("value");
    num += String.fromCharCode(event.charCode);
    num = parseInt(num);
    
    var min = $(this).attr("min");
    var max = $(this).attr("max");
    
    if(num < min || num > max) {
        return false;    
    }
    
    return true; 
});
