<?php
    session_start();

	require("../logic/functions.php");
    
	$page = basename($_SERVER["SCRIPT_FILENAME"], '.php');

	$ip = get_ip();

	require("../logic/connect.php");
    require("../logic/get_lang.php");
?>
