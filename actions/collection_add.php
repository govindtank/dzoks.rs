<?php
 	require("../logic/config.php");

	check_login($connect, $string);
	check_level(2, $connect, $string);

	if(!params_ok(["name"], "POST")) {	
		error($string['status']['collectionNotAdded']);
		header("location: ../pages/manage?type=0");
		exit;	
	}

	$name = strip($_POST['name']);

	$cmd = "INSERT INTO collections (`name`) VALUES('$name')";
	mysqli_query($connect, $cmd);

	success($string['status']['collectionAdded']);
	header("location: ../pages/manage?type=0");
?>
