<?php
 	require("../logic/config.php");

	if(!params_ok(["name", "price", "quantity", "collection", "description"], "POST")) {	
		error($string['status']['productNotAdded']);
		header("location: ../pages/contact.php");
		exit;	
	}

	$name = $_POST['name'];
	$price = $_POST['price'];
	$qty = $_POST['quantity'];
	$col = $_POST['collection'];
	$desc = $_POST['description'];

	$cmd = "INSERT INTO products (name, price, quantity, collection, description) VALUES('$name', '$price', '$qty', '$col', '$desc')";
	
	mysqli_query($connect, $cmd);

	$cmd = "SELECT id FROM products ORDER BY id DESC LIMIT 1";

	$id = mysqli_fetch_assoc(mysqli_query($connect, $cmd))['id'];
	
	$path = '../img/products/' . $id;

   	$tmp_name = $_FILES["photo"]["tmp_name"];
  	$name = basename($_FILES["photo"]["name"]);

   	move_uploaded_file($tmp_name, $path . '/' . $name);

	success($string['status']['productAdded']);
	header("location: ../pages/manage.php");
?>
