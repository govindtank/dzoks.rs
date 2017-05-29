<?php require("logic/get_lang.php"); ?>
<html>
    <head>
        <?php require("ui/head_content.php"); ?>
    </head>
    <body id="page">       
        <video autoplay loop id="video-background" muted plays-inline>
            <source src="video/theme.mp4" type="video/mp4" />
        </video>
        
        <audio src="./audio/theme.mp3" autoplay="autoplay" loop="loop"></audio>
        
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