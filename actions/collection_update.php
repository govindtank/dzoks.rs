<?php
 	require("../logic/config.php");

	check_login($connect, $string);
	check_level(2, $connect, $string);
	
	if(!params_ok(["id", "name"], "POST")) {	
		error($string['status']['collectionNotUpdated']);
		header("location: ../pages/manage?type=0");
		exit;	
	}

	$collection_id = strip($_POST['id']);
	$name = strip($_POST['name']);

	$cmd = "UPDATE collections SET name='" . $name . "' WHERE id=" . $collection_id;
	mysqli_query($connect, $cmd);

	success($string['status']['collectionUpdated']);
	header("location: ../pages/manage?type=0");
?>
