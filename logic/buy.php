<?php
    session_start();

    if(!isset($_GET["id"]) || !isset($_GET["size"]) || !isset($_GET["qty"])) {
        exit;
    }

    $id = $_GET["id"];
    $size = $_GET["size"];
    $qty = $_GET["qty"];

    $_SESSION["cart"][] = $id;
?>