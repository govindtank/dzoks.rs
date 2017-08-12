<?php
    session_start();

    require("connect.php");
    require("functions.php");

    if($_SESSION['token'] != $_POST['token']) {
 		exit;
    }

    $username = strip($_POST['username']);
    $password = strip($_POST['password']);

    $password_hash = hash("SHA512", $password, false);

    $cmd = "SELECT 'username', 'password', 'admin' FROM `users` WHERE `username`='" . $username . "' AND `password`='" . $password_hash . "';";

    $rows = mysqli_query($connect, $cmd);

    $number_of_rows = mysqli_num_rows($rows);

    if($number_of_rows == 1) {
	   if($rows) {
		  while($row = mysqli_fetch_array($rows)) {
            $_SESSION['username'] = $row['username'];

            if($row['password'] == $password_hash) {
                header("location: admin.php");	   
            }
              
            if($row['admin'] == 1) {
                header("location: admin.php");	   
            }
		  }
	   }   
    }

    mysqli_close($connect);
?>
