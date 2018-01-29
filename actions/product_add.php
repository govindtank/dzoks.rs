<?php
 	require("../logic/config.php");

	if(!params_ok(["name", "price", "collection", "description"], "POST")) {	
		error($string['status']['productNotAdded']);
		header("location: ../pages/manage.php");
		exit;	
	}

	$name = strip($_POST['name']);
	$price = strip($_POST['price']);
	$col = strip($_POST['collection']);
	$desc = strip($_POST['description']);

	$cmd = "INSERT INTO products (name, price, collection, description) VALUES('$name', '$price', '$col', '$desc')";
	
	mysqli_query($connect, $cmd);

	$cmd = "SELECT id FROM products ORDER BY id DESC LIMIT 1";

	$id = mysqli_fetch_assoc(mysqli_query($connect, $cmd))['id'];
	
	$path = '../img/products/' . $id;
	mkdir($path);

	if( isset($_FILES['photos']['name'])) {
  		$total_files = count($_FILES['photos']['name']);
  
  		for($key = 0; $key < $total_files; $key++) {
    		if(isset($_FILES['photos']['name'][$key]) && $_FILES['photos']['size'][$key] > 0) {
   				$tmp_name = $_FILES["photos"]["tmp_name"][$key];
  				$name = $path . '/' . basename($_FILES["photos"]["name"][$key]);
   				move_uploaded_file($tmp_name, $name);
	   		} 
  		} 
	}
	
	$cmd = "SELECT * FROM sizes";
	$result = mysqli_query($connect, $cmd);

	while($row = mysqli_fetch_array($result)) {
		$i = 'qty_' . $row['name'];
		
		$size = $row['id'];

		if(isset($_POST[$i])) {
			$qty = strip($_POST[$i]);

			$cmd = "INSERT INTO warehouse (product, size, quantity) VALUES('$id', '$size', '$qty')";
			mysqli_query($connect, $cmd);
		}
	}

	success($string['status']['productAdded']);
	header("location: ../pages/manage.php");
?>
