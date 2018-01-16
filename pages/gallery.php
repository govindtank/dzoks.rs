<?php require("../logic/config.php"); ?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
    </head>
    <body id="page">
        <?php require("../ui/header.php"); ?>

        <div class="main">
            <h1><?php echo $string["gallery"]["header"]; ?></h1>

            <div class="container">
                <?php
                    $dir = "../img/gallery/";
                    $files = scandir($dir);
                            
                    $i = 0;
                
                    foreach($files as $file) {
						if(substr($file, 0, 1) == '.') {
							continue;	
						}

                        $file = $dir . $file;

                        if(is_file($file)) {
                             echo '<div class="zoom-item shop-item-image-holder"><img class="shop-item-image" src="' . $file . '" /></div>';
                        }
                    }
                ?>
            </div>
        </div>
        
        <?php require("../ui/footer.php"); ?>
    </body>
</html>
