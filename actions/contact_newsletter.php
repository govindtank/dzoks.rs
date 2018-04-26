<?php
	require("../logic/config.php");

	check_login($connect, $string);
	check_level(2, $connect, $string);
	
	if(!is_uploaded_file($_FILES['message']['tmp_name'])) {	
		error($string['status']['messageNotSent']);
		header("location: ../pages/manage?type=4");
		exit;	
	}

	$cmd = "SELECT email, hash FROM purchases WHERE subscribed=1 GROUP BY email";
	$result = mysqli_query($connect, $cmd);

	while($row = mysqli_fetch_array($result)) {	
		$receiver = $row[0];
		$hash = $row[1];
	
		$sender = $store_email;
		$subject = "[" . $store_name . "] Newsletter";
		$headers = "From: " . $sender . "\r\n";
		$headers .= "To: " . $receivers . "\r\n";

		$message = file_get_contents($_FILES['message']['tmp_name']);
		$message = str_replace("{{unsubscribe_url}}", $unsubscribe_url . $hash, $message);

		mail($receiver, $subject, $message, $headers);
	}
	
	success($string['status']['messageSent']);
	header("location: ../pages/manage?type=4");
?>
