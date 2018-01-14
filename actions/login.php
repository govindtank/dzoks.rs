<?php
    require("../logic/config.php");

	if(!params_ok(["username", "password"], "POST")) {	
		error($string['status']['allFieldsRequired']);
		header("location: ../pages/contact.php");
		exit;	
	}

    $username = strip($_POST['username']);
    $password = strip($_POST['password']);

    // TODO $password_hash = hash("SHA512", $password, false);
	$password_hash = $password;

    $cmd = "SELECT 'username', 'password' FROM `admins` WHERE `username`='" . $username . "' AND `password`='" . $password_hash . "';";

    $result = mysqli_query($connect, $cmd);

	while($row = mysqli_fetch_assoc($result)) {
    	$_SESSION['username'] = $row['username'];

		echo $row['password'] . ' ' . $password_hash;

        if($row['password'] == $password_hash) {
        	header("location: ../pages/manage.php");	   
			exit;
    	}
	}
		
	error($string['status']['incorrectCredentials']);
	header("location: ../pages/login.php");
?>
