<?php require("../logic/config.php"); ?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
		<link rel="stylesheet" href="../css/index.css">
    </head>
    <body>   
        <video autoplay loop id="video-background" muted plays-inline>
            <source src="../video/theme.mp4" type="video/mp4" />
        </video>
        
        <audio src="../audio/theme.mp3" autoplay="autoplay" loop="loop"></audio>
        
        <div class="logo-center">
            <img class="shake shake-basic shake-constant shake-constant--hover" id="logo-big" src="../img/logo.png" />
        
            <div class="tint-big" id="tint"></div>
        </div>
        
        <a href="home" class="button center"><?php echo $string["index"]["enter"]; ?></a>
        
        <?php require("../ui/script.php"); ?>
    </body>
</html>
