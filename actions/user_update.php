<?php
 	require("../logic/config.php");

	check_login($connect, $string);
	check_level(3, $connect, $string);

	if(!params_ok(["id", "username", "level"], "POST")) {	
		error($string['status']['userNotUpdated']);
		header("location: ../pages/manage?type=5");
		exit;	
	}

	$id = strip($_POST['id']);
	$username = strip($_POST['username']);
	$level = strip($_POST['level']);

	$cmd = "UPDATE admins SET username='" . $username . "', level=" . $level . " WHERE id=" . $id;
	mysqli_query($connect, $cmd);

	success($string['status']['userUpdated']);
	header("location: ../pages/manage?type=5");
?>
