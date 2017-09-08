function addToCart() {    
    var id = document.getElementsByTagName("h1")[0];
    var size = document.getElementById("size");
    var qty = document.getElementById("quantity");
    
    id = id.getAttribute('id');
    size = size.options[size.selectedIndex].value;
    qty = qty.value;
    	
	if(size == "Size") {
		alert('Size is required');
		return false;
	}

	if(qty == "") {
		alert('Quantity is required');
		return false;
	}

	var request = new XMLHttpRequest();
    
    request.open("GET", "logic/cart_add.php?id=" + id + "&size=" + size + "&qty=" + qty, true);
	
	request.send();	
    
    alert('Added');
	
	return false;
}
