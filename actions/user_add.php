<?php
 	require("../logic/config.php");

	check_login($connect, $string);

	if(!params_ok(["username", "password"], "POST")) {	
		error($string['status']['userNotAdded']);
		header("location: ../pages/manage?type=5");
		exit;	
	}

	$username = strip($_POST['username']);
	$password = strip($_POST['password']);

	$cmd = "INSERT INTO admins (`username`, `password`) VALUES('$username', '$password')";
	
	mysqli_query($connect, $cmd);

	success($string['status']['userAdded']);
	header("location: ../pages/manage?type=5");
?>
