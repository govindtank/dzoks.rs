<?php
	require("../logic/config.php");

	check_login($connect, $string);
	check_level(2, $connect, $string);
	
	$content_path = $_FILES['message']['tmp_name'];
	
	if(!is_uploaded_file($content_path)) {	
		error($string['status']['messageNotSent']);
		header("location: ../pages/manage?type=4");
		exit;	
	}

	$cmd = "SELECT email, hash FROM purchases WHERE subscribed=1 GROUP BY email";
	$result = mysqli_query($connect, $cmd);

	while($row = mysqli_fetch_array($result)) {	
		$receiver = $row[0];
		$hash = $row[1];
	
		$subject = "[" . $store_name . "] Newsletter";
		$headers = "From: " . $store_email . "\r\n";
		$headers .= "To: " . $receiver . "\r\n";

		$message = get_mail($mail_path);
		$message = str_replace("{{mail_title}}", $string["mail"]["newsletter"], $message);
		$message = str_replace("{{unsubscribe_url}}", $hash, $message);
		
		if(file_exists($content_path)) {
			$message = str_replace("{{mail_content}}", get_mail($content_path), $message);
		}		

		mail($receiver, $subject, $message, $headers);
	}
	
	success($string['status']['messageSent']);
	header("location: ../pages/manage?type=4");
?>
