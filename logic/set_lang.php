<?php 
	session_start();
    $_SESSION["lang"] = $_GET["lang"];
    header("location: ../pages/" . $_GET["page"] . ".php");
?>
