<?php
	require("../logic/config.php");

	if(!params_ok(["id"], "GET")) {
		error($string['status']['orderNotShipped']);
		header("location: ../pages/manage?type=3");
		exit;
	}

	$id = strip($_GET['id']);

	$cmd = "UPDATE purchases SET shipped=1 WHERE id=" . $id;
	mysqli_query($connect, $cmd);

	success($string['status']['orderShipped']);
	header("Location: ../pages/manage?type=3");
?>
