<?php
	require("../logic/config.php");
	
	foreach($_POST as $key => $value) {
		$_SESSION[strip($key)] = strip($value);
	}
	
	header("location: ../pages/" . $_POST['page'] . ".php");
?>
