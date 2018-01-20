<?php require("../logic/config.php"); ?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
    </head>
    <body id="page">
        <?php require("../ui/header.php"); ?>

        <div class="main">
            <div class="container">
                <?php
					$cmd = "SELECT * FROM products";
					$result = mysqli_query($connect, $cmd);

					while($row = mysqli_fetch_array($result)) {
                    	echo '<div class="shop-item">';
						echo '<a href="product.php?id=' . $row['id'] . '">';
                    	
						echo '<img class="shop-item-image" src="' . get_product_image($row["id"], 0). '"/>';
						echo '<img class="shop-item-overlay" src="' . get_product_image($row["id"], 1). '"/>';
					
						if($row['quantity'] == 0) {
							echo '<div class="shop-item-marker">';
							echo '<p class="soldout">' . $string["status"]["soldout"] . '</p>';
							echo '</div>';
						}else {
							$ONE_MONTH = 2592000;

							if(strtotime(date("Y-m-d h:i:s")) - strtotime($row['date_added']) < $ONE_MONTH) {
								echo '<div class="shop-item-marker">';
								echo '<p class="new">' . $string["status"]["new"] . '</p>';
								echo '</div>';
							}
						}

						echo '<div class="shop-item-marker">';
						echo '<p class="info"><b>' . $row["name"] . '</b> ' . get_price($row["price"]) . '</p>';
						echo '</div>';		
						echo '</a></div>';
					}
                ?>
            </div>
        </div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
