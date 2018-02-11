<?php
    session_start();

	// TODO uncomment before release
	//ini_set('display_errors', 'off');

	require("../logic/functions.php");
    
	$page = basename($_SERVER["SCRIPT_FILENAME"], '.php');

	$id = get_id();

	require("../logic/connect.php");
    require("../logic/get_lang.php");
?>
