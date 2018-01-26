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
				class CartItem {
					private $name, $price;

					function __construct($name, $price) {
						$this->name = $name;
						$this->price = $price;
					} 	

					public function getName() {
						return $this->name;	
					}
					
					public function getPrice() {
						return $this->price;	
					}
				}
				
				$sizes = [];

				$cmd = "SELECT * FROM sizes";
				$result = mysqli_query($connect, $cmd);

				while($row = mysqli_fetch_array($result)) {
					$sizes[$row['id']] = $row['name'];
				}

                $total = 0;

				$items = [];

				$cmd = "SELECT id, name, price FROM products";
				$result = mysqli_query($connect, $cmd);

				while($row = mysqli_fetch_assoc($result)) {
					$items[$row['id']] = new CartItem($row['name'], $row['price']);
				}
				
				$cmd = "SELECT * FROM cart WHERE user='$ip'";
				$result = mysqli_query($connect, $cmd);

				while($row = mysqli_fetch_array($result)) {
					$id = $row['product'];

					$item = $items[$id];

					if(is_null($item)) {
						continue;
					}

					$name = $item->getName();
					$price = $item->getPrice();

            	    echo '<tr>';
					echo '<td><a href="product?id=' . $row['product'] . '"><img class="cart-thumbnail" src="' . get_product_image($id, 0) . '"/></a></td>';
                  	echo '<td><a href="product?id=' . $row['product'] . '">' . $name . '</a></td>';

                	$total += $row['quantity'] * $price; 
                
					$url = '../actions/cart_remove?id=' . $row['id']; 

                    echo '<td>' . $string["product"]["sizes"][$sizes[$row["size"]]] . '</td>';
					echo '<td>' . get_price($price) . ' x ' . $row['quantity'] . '</td>';
					echo '<td><a href="'. $url . '">X</a></td>';
					echo '</tr>';
                }
            
				if($total > 0) {
            	   	echo '<tr class="bordered"><td><b>' . $string["cart"]["total"] . '</b></td><td></td><td></td><td><b>' . get_price($total) . '</b></td><tr>';
               	}
            ?>
            </table>
            <?php
                if($total > 0) {
					echo '<a href="checkout" class="button center">' . $string["cart"]["checkout"] . '</a>';             
                }else {
					echo '<div class="center-both">';
                  	echo '<h1>' . $string["cart"]["empty"] . '</h1>';
                    echo '<a href="shop" class="button center">'  . $string["cart"]["continue"] . '</a>';
					echo '</div>';
                }   
            ?>
		</div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
