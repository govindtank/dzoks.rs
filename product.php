<?php
    if(!isset($_GET["id"])) {
        header("location: shop.php");
    }

    require("logic/get_lang.php"); 
?>
<html>
    <head>
        <?php require("ui/head_content.php"); ?>
    </head>
    <body id="page">
        <?php require("ui/header.php"); ?>
        
        <div class="main">
            <?php 
                $file = $_GET["id"];
       
                    if(is_file($file) && file_exists($file)) {
                        echo '<h1 id="' . $file . '">' . $file . '</h1>';
                        echo '<div class="zoom-item product-zoomer"><img class="product-big" src="' . $file . '" alt="' . $string["product"]["image"] . '" /></div>';
                        
                        echo '<div class="product-options">';
                        echo '<p>Ovde stavim opis proizvoda. Blah blah blah</p>';
                        
                        $price_a = rand(10, 19);
                        $price_b = rand(10, 99);
                            
                        $price = '$' . $price_a . '.' . $price_b;
                        
                        echo '<p class="price">' . $price . '</p>';
                        
                        echo '<select id="size">';
                        echo '<option disabled selected>' . $string["product"]["size"] . '</option>';

                        foreach($string["product"]["sizes"] as $size) {
                            echo '<option value="' . $size . '">' . $size . '</option>';   
                        }

                        echo '</select>';
                        
                        echo '<input id="quantity" type="number" min="1" max="10" placeholder="' . $string["product"]["quantity"] . '"/>';
                        
                        echo '<div class="buttons">';
                        echo '<a onclick="addToCart()" class="button" alt="' . $string["product"]["buy"] . '">'  . $string["product"]["buy"] . '</a>';
                        echo '</div></div>';
                    }else {
                        echo '<h1>'  . $string["product"]["invalid"] . '</h1>';
                        echo '<a href="shop.php" class="button" alt="' . $string["product"]["continue"] . '">'  . $string["product"]["continue"] . '</a>';
                    }
            ?>
        </div>
        
        <?php require("ui/footer.php"); ?>
    </body>
</html>