<?php
 	require("../logic/config.php");
	
	if(!isset($_SESSION["username"])) {
		error($string["status"]["notLoggedIn"]);
		header("location: ../pages/login.php");
		exit;
	}

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
