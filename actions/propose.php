<?php
	require("../logic/config.php");

	if(!params_ok(["name", "sock_name", "email", "description", "validationCheck", "validationInput"], "POST")) {	
		error($string['status']['designNotProposed']);
		header("location: ../pages/propose");
		exit;	
	}

    $name = strip($_POST['name']);
    $sockName = strip($_POST['sock_name']);
    $email = strip($_POST['email']);
	$description = strip($_POST['description']); 
	$validationCheck = strip($_POST['validationCheck']); 
	$validationInput = strip($_POST['validationInput']); 
	       
	if($validationInput != $validationCheck) {
		error($string['status']['validationNotCorrect']);
		header("location: ../pages/contact.php");
		exit();
	}
	
	if(isset($_FILES['photo']['name'])) {
		$cmd = "INSERT INTO proposals (name, sock_name, email, description, date_submitted) VALUES('$name', '$sockName', '$email', '$description', now())";
		mysqli_query($connect, $cmd);

		$cmd = "SELECT id FROM proposals ORDER BY id DESC LIMIT 1";

		$id = mysqli_fetch_array(mysqli_query($connect, $cmd))['id'];
		$path = '../proposals/' . $id;
		
		$tmp_name = $_FILES["photo"]["tmp_name"];

		if(!file_exists($path)) {
			mkdir($path, 0777, true);
		}

		$path .= '/' . basename($_FILES["photo"]["name"]);

		move_uploaded_file($tmp_name, $path);
	}else {
		error($string['status']['requiredFields']);
		header("location: ../pages/propose");
		exit;	
	}

	success($string['status']['designProposed']);
	header("location: ../pages/propose");
?>
