$("#logo").hover(function() {
    while(true) {
        var topMargin = Math.floor((Math.random() * 10) + 100);
        var leftMargin = Math.floor((Math.random() * 10) + 100);
        
        console.log('asd');
        
        $(this).animate({ 
            left: "=" + topMargin + "px",
            left: "=" + leftMargin + "px",
        }, 100);
    }
});