<?php
	require("../logic/config.php");

	if(!isset($_SESSION["username"])) {
		error($string["status"]["notLoggedIn"]);
		header("location: ../pages/login.php");
		exit;
	}

	if(!params_ok(["id", "shipped"], "GET")) {
		error($string['status']['orderNotMarked']);
		header("location: ../pages/manage?type=3");
		exit;
	}

	$id = strip($_GET['id']);

	$shipped = strip($_GET['shipped']);

	$cmd = "UPDATE purchases SET shipped=$shipped WHERE id=" . $id;
	mysqli_query($connect, $cmd);

	if($shipped == 1) {
		success($string['status']['orderShipped']);
	}else {
		success($string['status']['orderReturned']);
	}

	header("Location: ../pages/manage?type=2");
?>
