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
                    	$path = '../img/products/' . $row['id'];
						$files = scandir($path);

						$filename = '../img/products/no_photo.jpg';

						foreach($files as $file) {
                        	if($file[0] != '.') {
								$filename = $path . '/' . $file;
								break;
							}
						}

                    echo '<div class="shop-item">';
					echo '<a href="product.php?id=' . $row['id'] . '">';
					echo '<img class="shop-item-image" src="' . $filename . '"/>';

					if($row['quantity'] == 0) {
						echo '<div class="shop-item-marker"></div>';
					}
                    
					echo '<p class="img-desc">' . $row['name'] . '</p>';
                    echo '<p class="img-desc price">$ '  . $row['price'] . '</p>';
					echo '</a></div>';
					}
                ?>
            </div>
        </div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
