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
		if(!params_ok(["shipping_company", "shipping_number"], "GET")) {
			error($string['status']['orderNotMarked']);
			header("location: ../pages/manage?type=2");
			exit;
		}

		$shipping_company = strip($_GET['shipping_company']);
		$shipping_number = strip($_GET['shipping_number']);
		
		$cmd = "SELECT email, hash FROM purchases WHERE id=" . $purchase;
		$row = mysqli_fetch_array(mysqli_query($connect, $cmd));
		
		$email = $row[0];
		$hash = $row[1];

		$message = get_mail($mail_path);

		$mail_title = $string['mail']['shipped'];

		$message = str_replace("{{shipping_company}}", $shipping_company, $message);
		$message = str_replace("{{shipping_number}}", $shipping_number, $message);
	
		$message = str_replace("{{mail_title}}", $mail_title, $message);
		$message = str_replace("{{unsubscribe_url}}", $unsubscribe_url . $hash, $message);
	
		$sender = $store_email;
		$subject = "[" . $store_name . "] Shipped";
		$headers = "From: " . $sender . "\r\n";
		$headers .= "To: " . $email . "\r\n";

		mail($email, $subject, $message, $headers);
	
		$cmd = "UPDATE purchases SET shipping_company='$shipping_company', shipping_number='$shipping_number' WHERE id=" . $purchase;
		mysqli_query($connect, $cmd) or die(mysqli_error($connect));

		success($string['status']['orderShipped']);
	}else {
		success($string['status']['orderReturned']);
	}

	header("location: ../pages/manage?type=2");
?>
