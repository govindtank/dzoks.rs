<?php
	session_start();

	require("connect.php");
	require("functions.php");

	$id = $_GET['id'];

	$cmd = "DELETE FROM cart WHERE id='$id'";
	mysqli_query($connect, $cmd);

	echo $cmd;
	exit;

	unset($_SESSION['items']);
	
	header("location: ../cart.php");
?>
