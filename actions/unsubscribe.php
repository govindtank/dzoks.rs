<?php
	require("../logic/config.php");

	if(!isset($_GET['h'])) {
		error($string['status']['notUnsubscribed']);
		header("location: ../pages/home.php");
		exit;	
	}

	$hash = strip($_GET['h']);	

	$cmd = "SELECT email FROM purchases WHERE hash='$hash'";
	$email = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

	$cmd = "UPDATE purchases SET subscribed=0 WHERE email='$email'";
	mysqli_query($connect, $cmd);

	order($string['status']['unsubscribed']);
	header("location: ../pages/home.php");
?>
