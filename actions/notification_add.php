<?php
 	require("../logic/config.php");

	check_login($connect, $string);
	check_level(2, $connect, $string);

	if(!params_ok(["name", "message"], "POST")) {	
		error($string['status']['notificationNotAdded']);
		header("location: ../pages/manage?type=9");
		exit;	
	}

	$name = strip($_POST['name']);
	$message = strip($_POST['message']);

	$cmd = "INSERT INTO notifications (`name`, `message`) VALUES('$name', '$message')";
	mysqli_query($connect, $cmd);

	success($string['status']['notificationAdded']);
	header("location: ../pages/manage?type=9");
?>
