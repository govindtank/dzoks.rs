<?php
	require("../logic/config.php");

	if(!params_ok(["name", "email", "description"], "POST")) {	
		error($string['status']['designNotProposed']);
		header("location: ../pages/propose");
		exit;	
	}

    $name = strip($_POST['name']);
    $email = strip($_POST['email']);
	$description = strip($_POST['description']); 
	       
	$cmd = "SELECT id FROM proposals WHERE email='$email'";
	
	if(mysqli_num_rows(mysqli_query($connect, $cmd)) > 0) {
		error($string['status']['alreadyProposed']);
		header("location: ../pages/propose");
		exit;	
	}

	if(isset($_FILES['photo']['name'])) {
		if(!file_size_ok($_FILES['photo']['size'])) {
			error($string['status']['largeFile']);
			header("location: ../pages/propose");
			exit;	
		}

		if(!is_image($_FILES['photo']['type'])) {
			error($string['status']['notImage']);
			header("location: ../pages/propose");
			exit;	
		}

		$cmd = "INSERT INTO proposals (name, email, description, date_submitted) VALUES('$name', '$email', '$description', now())";
		mysqli_query($connect, $cmd);

		$cmd = "SELECT id FROM proposals ORDER BY id DESC LIMIT 1";

		$id = mysqli_fetch_array(mysqli_query($connect, $cmd))['id'];
		$path = '../proposals/' . $id;
		
		$tmp_name = $_FILES["photo"]["tmp_name"];

		if(!file_exists($path)) {
			mkdir($path, 0777, true);
		}

		$path .= '/' . rename_file(basename($_FILES["photo"]["name"]));

		move_uploaded_file($tmp_name, $path);
	}else {
		error($string['status']['requiredFields']);
		header("location: ../pages/propose");
		exit;	
	}

	success($string['status']['designProposed']);
	header("location: ../pages/propose");
?>
