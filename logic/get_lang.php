<?php 
    $lang_found = false;

    if(isset($_SESSION["lang"])) {
        $lang = $_SESSION["lang"];
        $file = "../text/" . $lang . ".php";
        
        if(file_exists($file)) {
            require($file); 
            $lang_found = true;
        }   
    }

    if(!$lang_found) {
        $lang = "en";
        require("../text/" . $lang . ".php");   
    }
?>
