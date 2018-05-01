<?php 
	require("../logic/config.php");

	$_SESSION["lang"] = strip($_GET["lang"]);
   	
	header("location: ../pages/" . strip($_GET["page"]));
?>
