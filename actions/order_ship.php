<?php
	require("../logic/config.php");

	check_login($connect, $string);
	check_level(1, $connect, $string);

	if(!params_ok(["id", "shipped"], "GET")) {
		error($string['status']['orderNotMarked']);
		header("location: ../pages/manage?type=2");
		exit;
	}

	$purchase = strip($_GET['id']);
	$shipped = strip($_GET['shipped']);

	$cmd = "UPDATE purchases SET shipped=$shipped WHERE id=" . $purchase;
	mysqli_query($connect, $cmd);

	if($shipped == 1) {
		success($string['status']['orderShipped']);
	}else {
		success($string['status']['orderReturned']);
	}

	$cmd = "SELECT email FROM purchases WHERE id=" . $purchase;
	$email = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

	$message = get_mail("order_ship", $lang);
	$message = str_replace("{{id}}", $purchase, $message);
	
	$sender = $store_email;
	$subject = "[" . $store_name . "] Shipped";
	$headers = "From: " . $sender . "\r\n";
	$headers .= "To: " . $email . "\r\n";

	mail($email, $subject, $message, $headers);

	header("location: ../pages/manage?type=2");
?>
