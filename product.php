<?php
    $file = strip($_GET["id"]);
    
    if(!isset($file)) {
        header("location: shop.php");
    }

    require("logic/config.php");
    
    $exists = false;

    if(is_file($file) && file_exists($file)) {
        $exists = true;
    }
?>
<html>
    <head>
        <?php 
            require("ui/meta.php");
            require("ui/link.php");
        
            echo '<title>' . $file . '</title>';
        ?>
    </head>
    <body id="page">
        <?php require("ui/header.php"); ?>
        
        <div class="main">
            <?php 
                    if($exists) {
                        echo '<h1 id="' . $file . '">' . $file . '</h1>';
                        echo '<div class="zoom-item product-zoomer"><img class="product-big" src="' . $file . '" /></div>';
                        
                        echo '<div class="product-options">';
                        echo '<p class="product-desc">Ovde stavim opis proizvoda. Blah blah blah</p>';
                        
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
                        echo '<a onclick="addToCart()" class="button">'  . $string["product"]["buy"] . '</a>';
                        echo '</div></div>';
                    }else {
                        echo '<h1>'  . $string["product"]["invalid"] . '</h1>';
                        echo '<a href="shop" class="button">'  . $string["product"]["continue"] . '</a>';
                    }
            ?>
        </div>
        
        <?php require("ui/footer.php"); ?>
    </body>
</html>