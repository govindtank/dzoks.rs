<?php require("logic/config.php"); ?>
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

				if(isset($_SESSION['cart'])) {
	                foreach($_SESSION["cart"] as $file) {        
    	                $file = $dir . $file;
                            
        	            if(is_file($file)) {
            	            echo '<tr><td>';
                        
                	        echo '<a href="product?id=' . $file . '">' . $file . '</a>';
                        
                    	    $qty = rand(1, 10);
                        
                        	$price_a = rand(10, 19);
                        	$price_b = rand(10, 99);
                            
                       		$total += $qty * ($price_a + $price_b / 100); 
                        
                        	$price = $qty . ' x $' . $price_a . '.' . $price_b;
                        
                        	echo '</td><td>'  . $price . '</td><td><i class="fa fa-times" aria-hidden="true"></i></td></tr>';
                    	}
                	}   
                
                	if($total > 0) {
                    	echo '<tr class="bordered"><td><p id="price"><b>' . $string["cart"]["total"] . '</b></p></td><td><b>$' . $total . '</b></p></td><tr>';
                	}
				}
            ?>
            </table>
            <?php
                if($total > 0) {
                    echo '<div class="buttons"><a href="checkout" class="button">' . $string["cart"]["checkout"] . '</a>';             
                    echo '<a href="#" class="button">' . $string["cart"]["clear"] . '</a></div>';
                }else {
                     echo '<h1>' . $string["cart"]["empty"] . '</h1>';
                    
                    echo '<a href="shop" class="button">'  . $string["cart"]["continue"] . '</a>';
                }   
            ?>
        </div>

        <?php require("ui/footer.php"); ?>
    </body>
</html>
