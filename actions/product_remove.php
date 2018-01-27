<?php
	require("../logic/config.php");

	if(!params_ok(["id"], "GET")) {
		error($string['status']['productNotRemoved']);
		header("location: ../pages/manage.php");
		exit;
	}

	$id = strip($_GET['id']);

	$cmd = "DELETE FROM products WHERE id=$id";
	mysqli_query($connect, $cmd);

	success($string['status']['productRemoved']);
	header("location: ../pages/manage.php");
?>
