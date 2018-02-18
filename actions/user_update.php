<?php
 	require("../logic/config.php");

	check_login($connect, $string);

	if(!params_ok(["id", "username"], "POST")) {	
		error($string['status']['userNotUpdated']);
		header("location: ../pages/manage?type=5");
		exit;	
	}

	$id = strip($_POST['id']);
	$username = strip($_POST['username']);

	$cmd = "UPDATE admins SET username='" . $username . "' WHERE id=" . $id;
	
	mysqli_query($connect, $cmd);

	$_SESSION['username'] = $username;

	success($string['status']['userUpdated']);
	header("location: ../pages/manage?type=5");
?>
