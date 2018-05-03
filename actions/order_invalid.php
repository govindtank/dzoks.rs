<?php
	require("../logic/config.php");

	check_login($connect, $string);
	check_level(1, $connect, $string);

	if(!params_ok(["id", "valid"], "GET")) {
		error($string['status']['orderNotMarked']);
		header("location: ../pages/manage?type=2");
		exit;
	}

	$purchase = strip($_GET['id']);
	$valid = strip($_GET['valid']);

	$cmd = "UPDATE purchases SET valid=$valid WHERE id=" . $purchase;
	mysqli_query($connect, $cmd);

	if($valid == 0) {
		$cmd = "SELECT * FROM purchases WHERE id=" . $purchase;
		$row = mysqli_fetch_array(mysqli_query($connect, $cmd));
		
		$message = get_mail($mail_path);

		$mail_title = $string['mail']['invalid'];

		$message = str_replace("{{name}}", $row['name'], $message);
		$message = str_replace("{{address}}", $row['address'], $message);
		$message = str_replace("{{zip}}", $row['zip'], $message);
		$message = str_replace("{{city}}", $row['city'], $message);
		$message = str_replace("{{country}}", get_country($row['country']), $message);
		$message = str_replace("{{phone}}", $row['phone'], $message);
		$message = str_replace("{{email}}", $row['email'], $message);

		$message = str_replace("{{mail_title}}", $mail_title, $message);
		$message = str_replace("{{unsubscribe_url}}", $unsubscribe_url . $row['hash'], $message);
	
		$sender = $store_email;
		$subject = "[" . $store_name . "] Invalid order";
		$headers = "From: " . $sender . "\r\n";
		$headers .= "To: " . $row['email'] . "\r\n";

		mail($row['email'], $subject, $message, $headers);
	
		success($string['status']['orderInvalid']);
	}else {
		success($string['status']['orderValid']);
	}

	header("location: ../pages/manage?type=2");
?>
