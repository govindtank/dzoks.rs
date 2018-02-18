<?php
	require("../logic/config.php");

	check_login($connect, $string);

	if(!params_ok(["id", "accepted"], "GET")) {
		error($string['status']['commentNotMarked']);
		header("location: ../pages/manage?type=3");
		exit;
	}

	$id = strip($_GET['id']);
	$accepted = strip($_GET['accepted']);

	$cmd = "UPDATE comments SET accepted=$accepted WHERE id=" . $id;
	mysqli_query($connect, $cmd);

	if($accepted == 1) {
		success($string['status']['commentAccepted']);
	}else {
		success($string['status']['commentDeclined']);
	}

	header("Location: ../pages/manage?type=3");
?>
