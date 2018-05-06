<?php require("../logic/config.php"); ?>
<html>
    <head>
  		<?php require("../ui/head_content.php"); ?>
		<link rel="stylesheet" href="../css/cart.css">
    </head>
    <body>
        <?php require("../ui/header.php"); ?>

        <div class="main">       
            <table>
            <?php 
                $total = 0;
				
				$cmd = "SELECT
					cart.id AS cart_id,
					cart.quantity AS cart_quantity,
					sizes.name AS size_name,
					products.id AS product_id,
					products.name AS product_name,
					products.price AS product_price
					FROM cart
					INNER JOIN sizes
					ON cart.size=sizes.id
					INNER JOIN products
					ON cart.product=products.id
					WHERE cart.user='$id' && cart.checked=0";
				$result = mysqli_query($connect, $cmd);

				while($row = mysqli_fetch_array($result)) {
            	    echo '<tr>';
					echo '<td><a href="product?id=' . $row["product_id"] . '"><img alt="Product image" class="thumbnail" src="' . get_thumbnail($row["product_id"], 0) . '"/></a></td>';
                  	echo '<td><a href="product?id=' . $row["product_id"] . '">' . $row["product_name"] . '</a></td>';

                	$total += $row['cart_quantity'] * $row["product_price"];
                
					$url = '../actions/cart_remove?id=' . $row['cart_id']; 

                    echo '<td>' . $string["product"]["sizes"][$row["size_name"]] . '</td>';
					echo '<td>' . get_price($row["product_price"]) . ' x ' . $row['cart_quantity'] . '</td>';
					echo '<td><a class="button button-shrink" href="'. $url . '">X</a></td>';
					echo '</tr>';
                }
            
				if($total > 0) {
            	   	echo '<tr class="bordered"><td><b>' . $string["cart"]["total"] . '</b></td><td></td><td></td><td><b>' . get_price($total) . '</b></td></tr>';
               	}
            ?>
            </table>
            <?php
                if($total > 0) {
					echo '<a href="checkout" class="button center">' . $string["cart"]["checkout"] . '</a>';             
                }else {
					echo '<div class="center-both padded">';
                  	echo '<h1>' . $string["cart"]["empty"] . '</h1>';
                    echo '<a href="shop" class="button center">'  . $string["cart"]["continue"] . '</a>';
					echo '</div>';
                }   
            ?>
		</div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
