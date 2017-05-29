<?php require("logic/get_lang.php"); ?>
<html>
    <head>
        <?php require("ui/head_content.php"); ?>
    </head>
    <body id="page">
        <?php require("ui/header.php"); ?>

        <div class="main">
            <h1><?php echo $string["gallery"]["header"]; ?></h1>

            <div class="container">
                <?php
                    $dir = "img/gallery/";
                    $files = scandir($dir);
                            
                    $i = 0;
                
                    foreach($files as $file) {
                        $file = $dir . $file;
                            
                        if(is_file($file)) {
                            echo '<div class="zoom-item example-image-holder"><img class="example-image" src="' . $file . '" /></div>';
                        }
                    }
                ?>
            </div>
        </div>
        
        <?php require("ui/footer.php"); ?>
    </body>
</html>