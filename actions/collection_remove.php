<?php
	require("../logic/config.php");

	if(!params_ok(["id"], "GET")) {
		error($string['status']['collectionNotRemoved']);
		header("location: ../pages/manage.php");
		exit;
	}

	$id = strip($_GET['id']);

	$cmd = "SET GLOBAL FOREIGN_KEY_CHECKS = 0; ";
	$cmd .= "UPDATE products SET collection=0 WHERE collection=$id; ";
	$cmd .= "DELETE FROM collections WHERE id=$id; ";
	$cmd .= "SET GLOBAL FOREIGN_KEY_CHECKS = 1";
	
	mysqli_multi_query($connect, $cmd);

	success($string['status']['collectionRemoved']);
	header("location: ../pages/manage.php");
?>
