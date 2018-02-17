const media = window.matchMedia("(max-width: 720px)");
var lastScrollTop = 0;

$(document).ready(function() {    
    blink();
    setLogo();
  
	$("#nav").click(function() {
        $(this).toggleClass("open");
	   	$(".status").toggleClass("open");
    });
	   	
	$("nav li").addClass("shake shake-basic shake-hover");
	   	
	$(".status").addClass("open");

	$("#acceptCookies").click(function() {
    	console.log('yo');
    	var xhttp = new XMLHttpRequest();
		xhttp.open("GET", "../actions/cookies_accept.php", true);
		xhttp.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200) {
				$(".status-alert").css('visibility', 'hidden');	
			}
		}

		xhttp.send();
	});
 });

function navClick() {
	$("#nav").click(function() {
       	$(this).toggleClass("open");
		$(".status").toggleClass("open");
    });
	   	
	$(".status").addClass("open");
	$("nav li").addClass("shake shake-basic shake-hover");
}

function toggleHeader(scrollTop) {
	if(scrollTop > 0) {
		if(lastScrollTop < scrollTop) {
	   		$("header").addClass("scrolling");
	   		$(".status").removeClass("open");
		}else {
	   		$("header").removeClass("scrolling");
	   		$(".status").addClass("open");
		}
	}

	lastScrollTop = $(document).scrollTop();
}

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
