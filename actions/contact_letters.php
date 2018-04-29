<?php
	require("../logic/config.php");

	check_login($connect, $string);
	check_level(2, $connect, $string);
	 
	$zip_name = "letters.zip";

    $zip = new ZipArchive(); 

	if($zip->open($zip_name, ZipArchive::CREATE) !== TRUE) {
		error($string['status']['zipError']);
		header("location: ../pages/manage?type=4");
		exit;
	}
	
	$cmd = "SELECT * FROM purchases GROUP BY email";
	$result = mysqli_query($connect, $cmd);

	while($row = mysqli_fetch_array($result)) {	
		$order_id = $row['id'];
		$name = $row['name'];
		$address = $row['address'];
		$zip_number = $row['zip'];
		$city = $row['city'];
		$country = $row['country'];
		
		$letter = get_mail($letter_path);

		$letter = str_replace("{{name}}", $name, $letter);
		$letter = str_replace("{{address}}", $address, $letter);
		$letter = str_replace("{{zip}}", $zip_number, $letter);
		$letter = str_replace("{{city}}", $city, $letter);
		$letter = str_replace("{{country}}", $country, $letter);
    
    	$zip->addFromString("letter_" . $order_id . ".html", $letter);
	}

	$zip->close();
                
    header('Content-type: application/zip');
    header('Content-Disposition: attachment; filename="' . $zip_name . '"');

    readfile($zip_name);                    
	unlink($zip_name);
?>
