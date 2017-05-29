$(document).ready(function() {    
    blink();
    pack();
    setLogo();
    
    $('#nav').click(function() {
        $(this).toggleClass('open');
    });
});

function blink() {
    var num = Math.round(Math.random() * (9 - 1) + 1);
    
    if(num % 3 == 0) {
        $("#tint").css("background-color", "#1abc9c");
    }else if(num % 3 == 1) {
        $("#tint").css("background-color", "#d2527f");      
    }else{
        $("#tint").css("background-color", "#3498db");      
    }
    
    setTimeout(function(){
        $("#tint").css("background-color", "transparent");
            
        var randomTime = Math.round(Math.random() * (1000 - 1) + 1);
        
        setTimeout(function(){
            blink(); 
        }, randomTime);
    }, 175);
}

function pack() { 
    //$(".main").css("min-height", document.height - ($("header").height + $("footer").height);
}

function setLogo() {
    if($(".center").length) {
        $(".center").css("width", $("#logo-big").css("height")).css("visibility", "visible");
        
        $("#logo-big").css("width", $("#logo-big").css("height"));
        $(".tint-big").css("width", $(".tint-big").css("height"));   
    }
}

$("#quantity").keypress(function(event) {
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