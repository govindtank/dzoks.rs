<?php
	require("../logic/config.php");
	
	check_login($connect, $string);

	if(!params_ok(["id"], "GET")) {
		error($string['status']['userNotRemoved']);
		header("location: ../pages/manage?type=5");
		exit;
	}

	$id = strip($_GET['id']);

	$cmd = "DELETE FROM admins WHERE id=" . $id;
	
	mysqli_query($connect, $cmd);

	success($string['status']['userRemoved']);
	header("location: ../pages/manage?type=5");
?>
