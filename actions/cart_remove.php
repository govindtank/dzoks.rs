<?php
	require("../logic/config.php");

	if(!params_ok(["id"], "GET")) {
		error($string['status']['productNotRemovedFromCart']);
		header("location: ../pages/cart.php");
		exit;
	}

	$id = $_GET['id'];

	$cmd = "DELETE FROM cart WHERE id=$id";
	mysqli_query($connect, $cmd);

	success($string['status']['productRemovedFromCart']);
	header("location: ../pages/cart.php");
?>
