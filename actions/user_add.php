<?php
 	require("../logic/config.php");

	check_login($connect, $string);
	check_level(3, $connect, $string);

	if(!params_ok(["username", "password", "level"], "POST")) {	
		error($string['status']['userNotAdded']);
		header("location: ../pages/manage?type=5");
		exit;	
	}

	$username = strip($_POST['username']);
	$password = hash_string(strip($_POST['password']));
	$level = strip($_POST['level']);

	$cmd = "INSERT INTO admins (username, password, level) VALUES('$username', '$password', '$level')";
	mysqli_query($connect, $cmd);

	success($string['status']['userAdded']);
	header("location: ../pages/manage?type=5");
?>
