<?php require("../logic/config.php"); ?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
		<link rel="stylesheet" href="../css/shop.css">
    </head>
    <body>
        <?php require("../ui/header.php"); ?>

        <div class="main">
                <?php
					$cmd = "SELECT * FROM products";
					$result = mysqli_query($connect, $cmd);

					while($row = mysqli_fetch_array($result)) {
                    	echo '<div class="item">';
						echo '<a href="product.php?id=' . $row['id'] . '">';
                    	
						echo '<img class="item-image" src="' . get_product_image($row["id"], 0). '"/>';
						echo '<img class="item-overlay" src="' . get_product_image($row["id"], 1). '"/>';
					
						if($row['quantity'] == 0) {
							echo '<div class="item-marker">';
							echo '<p class="soldout">' . $string["status"]["soldout"] . '</p>';
							echo '</div>';
						}else {
							$ONE_MONTH = 2592000;

							if(strtotime(date("Y-m-d h:i:s")) - strtotime($row['date_added']) < $ONE_MONTH) {
								echo '<div class="item-marker">';
								echo '<p class="new">' . $string["status"]["new"] . '</p>';
								echo '</div>';
							}
						}

						echo '<div class="item-marker">';
						echo '<p class="info"><b>' . $row["name"] . '</b> ' . get_price($row["price"]) . '</p>';
						echo '</div>';		
						echo '</a></div>';
					}
                ?>
        </div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
