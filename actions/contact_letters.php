<?php
	require("../logic/config.php");

	check_login($connect, $string);
	check_level(2, $connect, $string);
	
	$cmd = "SELECT * FROM purchases GROUP BY email";
	$result = mysqli_query($connect, $cmd);

	while($row = mysqli_fetch_array($result)) {	
		$name = $row['name'];
		$address = $row['address'];
		$zip = $row['zip'];
		$city = $row['city'];
		$country = $row['country'];
	
		// todo replace placeholders in $letter_path and download all of letters
	}
	
	header("location: ../pages/manage?type=4");
?>
