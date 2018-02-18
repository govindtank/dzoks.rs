<?php
 	require("../logic/config.php");

	check_login($connect, $string);

	if(!params_ok(["id", "name"], "POST")) {	
		error($string['status']['collectionNotUpdated']);
		header("location: ../pages/manage?type=0");
		exit;	
	}

	$id = strip($_POST['id']);
	$name = strip($_POST['name']);

	$cmd = "UPDATE collections SET name='" . $name . "' WHERE id=" . $id;
	
	mysqli_query($connect, $cmd);

	success($string['status']['collectionUpdated']);
	header("location: ../pages/manage?type=0");
?>
