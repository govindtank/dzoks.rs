<?php require("logic/get_lang.php"); ?>
<html>
    <head>
        <?php require("ui/head_content.php"); ?>
    </head>
    <body id="page">       
        <?php require("ui/header.php"); ?>
        
        <div class="hero-image-home"></div>
        
        <div class="main">
            <h1><?php echo $string["home"]["header"]; ?></h1>
            
            <p><?php echo $string["home"]["text1"]; ?></p>
            <p><?php echo $string["home"]["text2"]; ?></p>
            <p><?php echo $string["home"]["text3"]; ?></p>
        </div>
        
        <?php require("ui/footer.php"); ?>
    </body>
</html>