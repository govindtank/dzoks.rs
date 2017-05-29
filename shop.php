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
                            
                            echo '<p class="img-desc">'  . substr($file, strlen($file) - 10) . '</p>';
                            echo '<p class="img-desc price">'  . $price . '</p>';
                            echo '<a href="product.php?id=' . $file . '" class="button" title="' . $string["shop"]["view"] . '">' . $string["shop"]["view"] . '</a></div>';
                        }
                    }
                ?>
            </div>
        </div>

        <?php require("ui/footer.php"); ?>
    </body>
</html>