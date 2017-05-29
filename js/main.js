$(document).ready(function() {    
    blink();
});

var blink = function() {
    var num = Math.round(Math.random() * (9 - 1) + 1);
    
    if(num % 3 == 0) {
        $("#tint").css("background-color", "#1abc9c");
    }else if(num % 3 == 1) {
        $("#tint").css("background-color", "#e74c3c");      
    }else{
        $("#tint").css("background-color", "#3498db");      
    }
    
    setTimeout(function(){
        $("#tint").css("background-color", "transparent");
            
        setTimeout(function(){
            blink(); 
        }, 500);
    }, 175);
}