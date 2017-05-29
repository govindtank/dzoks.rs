<?php require("logic/get_lang.php"); ?>
<html>
    <head>
        <?php require("ui/head_content.php"); ?>
    </head>
    <body id="page">
        <?php require("ui/header.php"); ?>

        <div class="main">       
            <table>
            <?php 
                $dir = "img/gallery/";
                $files = scandir($dir);
                            
                $total = 0;
                
                foreach($files as $file) {        
                    $file = $dir . $file;
                            
                    if(is_file($file)) {
                        echo '<tr><td>' . $file;
                        
                        $price_a = rand(10, 19);
                        $price_b = rand(10, 99);
                            
                        $total += $price_a + $price_b / 100; 
                        
                        $price = '$' . $price_a . '.' . $price_b;
                        
                        echo '</td><td>'  . $price . '</td><td><i class="fa fa-times" aria-hidden="true"></i></td></tr>';
                    }
                }   
                
                if($total > 0) {
                    echo '<tr class="bordered"><td><p id="price"><b>' . $string["cart"]["total"] . '</b></p></td><td><b>$' . $total . '</b></p></td><tr>';
                }else {
                    echo '<tr><h1>' . $string["cart"]["empty"] . '</h1></tr>';
                }
            ?>
            </table>
            <?php
                if($total > 0) {
                    echo '<div class="buttons"><a href="#" class="button" title="' . $string["cart"]["checkout"] . '">' . $string["cart"]["checkout"] . '</a>';             
                    echo '<a href="#" class="button" title="' . $string["cart"]["clear"] . '">' . $string["cart"]["clear"] . '</a></div>';
                }   
            ?>
        </div>

        <?php require("ui/footer.php"); ?>
    </body>
</html>