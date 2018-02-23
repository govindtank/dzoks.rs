<?php
	require("../logic/config.php");

	check_login($connect, $string);
	check_level(1, $connect, $string);

	if(!params_ok(["id", "shipped"], "GET")) {
		error($string['status']['orderNotMarked']);
		header("location: ../pages/manage?type=2");
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

	$cmd = "SELECT email FROM purchases WHERE id=" . $id;
	$email = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

	$sender = "office@soxbty.com";

	$subject = "[SOXBTY] Shipped";
	$message = "Order " . $id . " has been shipped";
	$headers = "From: " . $sender . "\r\n";
	$headers .= "To: " . $email . "\r\n";

	mail($email, $subject, $message, $headers);

	header("Location: ../pages/manage?type=2");
?>
