function loadData() {
	var limit = 12;

	if(typeof offset == 'undefined') {
    	offset = 0;
    }
	
	$.ajax({
    	type: 'GET',
    	url: '../actions/shop_load.php?o=' + offset + '&l=' + limit,
    	success: function(data){
			$('.main').append(data);
        }
	});

	offset += limit;
}

$(document).ready(function() {
	loadData();
});

$(window).scroll(function(){ 
	if($(window).scrollTop() == ($(document).height() - $(window).height())) {
		loadData();
	}
});
