<?php require("../logic/config.php"); ?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
    </head>
    <body id="page">
        <?php require("../ui/header.php"); ?>

        <div class="main">
            <h1><?php echo $string["shop"]["header"]; ?></h1>

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
					
                    echo '<div class="shop-item"><img class="example-image" src="' . $filename . '" />';
                    echo '<p class="img-desc">' . $row['name'] . '</p>';
                    echo '<p class="img-desc price">$ '  . $row['price'] . '</p>';
                    echo '<a href="product.php?id=' . $row['id'] . '" class="button">' . $string["shop"]["view"] . '</a></div>';
					}
                ?>
            </div>
        </div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
