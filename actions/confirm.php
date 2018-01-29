<?php
	require("../logic/config.php");

	if(!isset($_GET['key'])) {
		header("Location: ../error.php");
		exit;	
	}

	$hash = strip($_GET['key']);

	$cmd = "SELECT id FROM purchases WHERE hash='$hash'";
	$id = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];
	
	$cmd = "SELECT * FROM cart WHERE id=" . $id;
	$result = mysqli_query($connect, $cmd);

	while($row = mysqli_fetch_array($result)) {
		$cmd = "SELECT quantity FROM warehouse WHERE product=" . $row['product'] . " AND size=" . $row['size'];
		
		$qty = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

		if($row['quantity'] > $qty) {
			error($string['status']['bigQuantity']);
			header("location: ../pages/cart.php");
			exit;
		}

		$qty -= $row['quantity'];

		$cmd = "UPDATE warehouse SET quantity=" . $qty . " WHERE product=" . $row['product'] .  " AND size=" . $row['size'];
		mysqli_query($connect, $cmd);
	}
		
	$cmd = "DELETE FROM cart WHERE purchase=" . $id;
	mysqli_query($connect, $cmd);

	$cmd = "UPDATE purchases SET confirmed=1 WHERE id=" . $id;
	mysqli_query($connect, $cmd);

	order($string['status']['orderPlaced']);
	header("location: ../pages/home.php");
?>
