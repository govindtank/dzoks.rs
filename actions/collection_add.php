<?php
 	require("../logic/config.php");

	if(!params_ok(["name"], "POST")) {	
		error($string['status']['collectionNotAdded']);
		header("location: ../pages/manage.php");
		exit;	
	}

	$name = strip($_POST['name']);

	$cmd = "INSERT INTO collections (`name`) VALUES('$name')";
	
	mysqli_query($connect, $cmd);

	success($string['status']['collectionAdded']);
	header("location: ../pages/manage.php");
?>
