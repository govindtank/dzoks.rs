<?php
	session_start();

 	require("connect.php");
	require("functions.php");

	$ip = getenv('HTTP_CLIENT_IP');

	$cmd = "DELETE FROM cart WHERE user='$ip'";
	mysqli_query($connect, $cmd);

	header("location: ../cart.php");
?>
