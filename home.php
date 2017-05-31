<?php require("logic/config.php"); ?>
<html>
    <head>
        <?php require("ui/head_content.php"); ?>
    </head>
    <body id="page">       
        <?php require("ui/header.php"); ?>
        
        <div class="main">
            <?php 
                echo '<h1>' . $string["home"]["header"] . '</h1>'; 
                echo '<p>' . $string["home"]["text"] . '</p>'; 
            ?>
        </div>
        
        <?php require("ui/footer.php"); ?>
    </body>
</html>