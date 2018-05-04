<?php
 	require("../logic/config.php");

	check_login($connect, $string);
	check_level(2, $connect, $string);
	
	if(!params_ok(["id", "name", "message"], "POST")) {	
		error($string['status']['notificationNotUpdated']);
		header("location: ../pages/manage?type=9");
		exit;	
	}

	$notify_id = strip($_POST['id']);
	$name = strip($_POST['name']);
	$message = strip($_POST['message']);

	$cmd = "UPDATE notifications SET name='$name', message='$message' WHERE id='$notify_id'";
	mysqli_query($connect, $cmd) or die(mysqli_error($connect));

	success($string['status']['notificationUpdated']);
	header("location: ../pages/manage?type=9");
?>
