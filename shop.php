<?php require("logic/get_lang.php"); ?>
<html>
    <head>
        <?php require("ui/head_content.php"); ?>
    </head>
    <body id="page">
        <?php require("ui/header.php"); ?>

        <div class="main">
            <h1><?php echo $string["shop"]["header"]; ?></h1>

            <div class="container">
                <?php 
                    $dir = "img/gallery/";
                    $files = scandir($dir);
                            
                    $i = 0;
                
                    foreach($files as $file) {
                        $file = $dir . $file;
                            
                        if(is_file($file)) {
                            echo '<div class="shop-item"><img alt="' . $string["shop"]["image"] . ' ' . ++$i . '" class="example-image" src="' . $file . '" />';
                            
                            $price_a = rand(10, 19);
                            $price_b = rand(10, 99);
                            
                            $price = '$' . $price_a . '.' . $price_b;
                            
                            echo '<p class="price">'  . $price . '</p>';
                            echo '<a href="#" class="button">' . $string["shop"]["buy"] . '</a></div>';
                        }
                    }
                ?>
            </div>
        </div>

        <?php require("ui/footer.php"); ?>
    </body>
</html>