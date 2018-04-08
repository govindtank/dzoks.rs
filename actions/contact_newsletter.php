<?php
	require("../logic/config.php");

	check_login($connect, $string);
	check_level(2, $connect, $string);
	
	if(!is_uploaded_file($_FILES['message']['tmp_name'])) {	
		error($string['status']['messageNotSent']);
		header("Location: ../pages/manage?type=4");
		exit;	
	}

	$message = file_get_contents($_FILES['message']['tmp_name']);

	$receivers = [];
	$hashes = [];

	$cmd = "SELECT email FROM purchases WHERE subscribed=1 GROUP BY email";
	$result = mysqli_query($connect, $cmd);

	while($row = mysqli_fetch_array($result)) {	
	    $receivers[] = $row['email'];
	    $hashes[] = $row['hash'];
	}
	
	$receivers = implode(", ", $receivers);

	$sender = $store_email;
	$subject = "[" . $store_name . "] Newsletter";
	$headers = "From: " . $sender . "\r\n";
	$headers .= "To: " . $receivers . "\r\n";

	$message .= $string['status']['unsubscribeLink'] . $store_url . "/actions/unsubscribe?h=" . $hash;

	mail($receivers, $subject, $message, $headers);

	success($string['status']['messageSent']);
	header("Location: ../pages/manage?type=4");
?>
