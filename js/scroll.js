function loadData() {
	var limit = 12;

	if(media.matches) {
		limit = 6;
	}

	if(typeof enabled == 'undefined') {
    	enabled = true;
    }

	if(!enabled) {
		return;	
	}

	if(typeof offset == 'undefined') {
    	offset = 0;
    }

	var path = window.location.pathname;
	var fetchUrl;

	if(path.indexOf("shop") != -1) {
		fetchUrl = '../actions/shop_load.php?o=' + offset + '&l=' + limit;
	}else if(path.indexOf("gallery") != -1) {
		fetchUrl = '../actions/gallery_load.php?o=' + offset + '&l=' + limit;
    	enabled = false;
	}

	$.ajax({
    	type: 'GET',
    	url: fetchUrl,
    	success: function(data){
			var json = JSON.parse(data);

			if(offset == 0) {
				$('.main').empty();	
			}

			$('.main').append(json.images);
			sr.reveal('.item', {
				opacity: 0.75,
				duration: 750,
			});
		
			offset = json.offset;
        }
	});
}

$(document).ready(function() {
	loadData();

	var block = {
        reset: true,
        viewOffset: {
			top: 64
		}
    }
});

$(window).scroll(function() { 
	if($(window).scrollTop() == ($(document).height() - $(window).height())) {
		loadData();
	}
});
