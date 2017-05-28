var modal = document.getElementById('modal');
var holder = document.getElementById("holder");
var span = document.getElementById("close");
var prev = document.getElementById("prev");
var next = document.getElementById("next");
var images = document.getElementsByClassName('example-image');

for(i = 0; i < images.length; i++) {
    var img = images[i];
    var prevImg = images[i - 1];
    var nextImg = images[i + 1];
    
    if(i == 0) {
        prevImg = images[images.length - 1];
    }else if(i == images.length - 1) {
        nextImg = images[0];
    }
    
    img.onclick = function() {
        modal.style.display = "block";
        holder.src = img.src;
        
        prev.onclick = function() { 
            prevImg.click();
        }
    
        next.onclick = function() { 
            nextImg.click();
        }
    }   
}

document.addEventListener("keyup", function(event) {
    event.preventDefault();
    
    if(event.keyCode == 27) {
        span.click();
    }else if(event.keyCode == 37) {
        prev.click();
    }else if(event.keyCode == 39) {
        next.click();
    }
});

span.onclick = function() { 
    modal.style.display = "none";
}