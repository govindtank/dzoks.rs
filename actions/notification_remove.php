<?php
	require("../logic/config.php");
	
	check_login($connect, $string);
	check_level(2, $connect, $string);

	if(!params_ok(["id"], "GET")) {
		error($string['status']['notificationNotRemoved']);
		header("location: ../pages/manage?type=9");
		exit;
	}

	$notify_id = strip($_GET['id']);

	$cmd = "DELETE FROM notifications WHERE id=$notify_id";
	mysqli_query($connect, $cmd);

	success($string['status']['notificationRemoved']);
	header("location: ../pages/manage?type=9");
?>
