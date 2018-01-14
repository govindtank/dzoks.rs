<?php
    require("../logic/config.php");

	if(!params_ok(["username", "password"], "POST")) {	
		error($string['status']['requiredFields']);
		header("location: ../pages/login.php");
		exit;	
	}

    $username = strip($_POST['username']);
    $password = strip($_POST['password']);

    $password_hash = hash("SHA512", $password, false);

    $cmd = "SELECT * FROM admins WHERE username='" . $username . "' AND password='" . $password_hash . "'";

    $result = mysqli_query($connect, $cmd);

	while($row = mysqli_fetch_assoc($result)) {
        if($row['password'] == $password_hash) {
    		$_SESSION['username'] = $row['username'];
        	header("location: ../pages/manage.php");	   
			exit;
    	}
	}

	unset($_SESSION['username']);
	error($string['status']['incorrectCredentials']);
	header("location: ../pages/login.php");
?>
