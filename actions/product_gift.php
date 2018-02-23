<?php
	require("../logic/config.php");

	check_login($connect, $string);
	check_level(1, $connect, $string);

	if(!params_ok(["id", "size", "note"], "GET")) {	
		error($string['status']['productNotGifted']);
		header("location: ../pages/manage?type=7");
		exit;
	}

	$product = strip($_GET['id']);
	$size = strip($_GET['size']);
	$note = strip($_GET['note']);

	$cmd = "SELECT quantity FROM warehouse WHERE product=" . $product . " AND size=" . $size;

	$qty = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

	if($qty == 0) {
		error($string['status']['bigQuantity']);
		header("location: ../pages/manage?type=7");
		exit;
	}

	$qty--;
	
	$cmd = "UPDATE warehouse SET quantity=" . $qty . " WHERE product=" . $product .  " AND size=" . $size;
	mysqli_query($connect, $cmd);
		
	$admin = $_SESSION['username'];

	$cmd = "SELECT id FROM admins WHERE username='" . $admin . "'";
	$admin = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

	$cmd = "INSERT INTO sales (product, size, note, admin) VALUES ('$product', '$size', '$note', '$admin')";
	mysqli_query($connect, $cmd);

	success($string['status']['productGifted']);
	header("location: ../pages/manage?type=7");
?>
