<?php
    session_start();

    $page = basename($_SERVER["SCRIPT_FILENAME"], '.php');

    require("logic/functions.php");
    require("logic/connect.php");
    require("logic/get_lang.php");
?>