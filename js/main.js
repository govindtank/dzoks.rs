$(document).ready(function() {    
    blink();
    setLogo();
    
    $('#nav').click(function() {
        $(this).toggleClass('open');
    });
});

$(window).scroll(function(){ 
	if($(window).scrollTop() >= $("header").height() / 2) {
       	$("header").css("background-color", "rgba(0, 0, 0, 0.63)");
	}else {
       	$("header").css("background-color", "transparent");
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

$(".number").keypress(function(event) {
     if(event.charCode < 48 || event.charCode > 57) {
        return false;
    }

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
