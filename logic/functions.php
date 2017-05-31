<?php
    function strip($var, $connect) {
	   return mysqli_real_escape_string($connect, htmlspecialchars(strip_tags(trim($var))));
    }
?>