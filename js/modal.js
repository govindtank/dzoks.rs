$('.modal-item').each(function(index, item) {    
    $(item).mouseenter(function() {
        $('#modal').css('display', 'block');
        $('#holder').attr('src', $(item).attr('src'));
    });
    
    $(item).mouseleave(function() {
        $('#modal').css('display', 'none');
    });
});

