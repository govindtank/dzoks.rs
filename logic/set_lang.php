<?php 
	session_start();
    $_SESSION["lang"] = $_GET["lang"];
    header("location: ../" . $_GET["page"] . ".php");
?>
