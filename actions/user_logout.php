<?php
	require("../logic/config.php");

	unset($_SESSION['username']);
	
	success($string['status']['userLoggedOut']);
	header("location: ../pages/login");
?>
