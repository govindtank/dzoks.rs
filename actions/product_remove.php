<?php
	require("../logic/config.php");

	check_login($connect, $string);

	if(!params_ok(["id"], "GET")) {
		error($string['status']['productNotRemoved']);
		header("location: ../pages/manage.php?type=1");
		exit;
	}

	$id = strip($_GET['id']);

	$cmd = "SET GLOBAL FOREIGN_KEY_CHECKS = 0; ";
	$cmd .= "UPDATE warehouse SET product=0 WHERE product=$id; ";
	$cmd .= "DELETE FROM products WHERE id=$id; ";
	$cmd .= "SET GLOBAL FOREIGN_KEY_CHECKS = 1";
	
	mysqli_multi_query($connect, $cmd);

	rm_dir("../products/" . $id);

	success($string['status']['productRemoved']);
	header("location: ../pages/manage?type=1");
?>
