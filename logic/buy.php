<?php
    session_start();

    $id = strip($_GET["id"]);
    $size = strip($_GET["size"]);
    $qty = strip($_GET["qty"]);

    if(!isset($id) || !isset($size) || !isset($qty)) {
        exit;
    }

    if(!isset($_SESSION["cart"])) {
       $_SESSION["cart"] = array();
    }

    $_SESSION["cart"][] = $id;
?>