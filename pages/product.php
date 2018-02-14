<?php 
    require("../logic/config.php"); 
	
	if(!params_ok(["id"], "GET")) {
		header("Location: shop.php");
		exit;	
	}

	$id = strip($_GET["id"]);
?>
<html>
    <head>
        <?php 
            require("../ui/meta.php");
            require("../ui/link.php");
        
			$cmd = "SELECT * FROM products WHERE id='$id'";
			$result = mysqli_query($connect, $cmd);
			$row = mysqli_fetch_array($result);

			if(mysqli_num_rows($result)) {
				echo '<title>' . $row['name'] . '</title>';
			}else {
				require("../ui/title.php");
			}
        ?>
		<link rel="stylesheet" href="../css/product.css">
    </head>
    <body>
        <?php require("../ui/header.php"); ?>
        
        <div class="main padded">
            <?php 
				if(mysqli_num_rows($result) == 1){	
					echo '<div class="sp-wrap">';

					foreach(get_all_product_images($row["id"]) as $image) {
						echo '<a href="' . $image .'"><img src="' . $image . '" alt=""></a>';
					}

					echo '</div>';

                    echo '<div class="options">';
					echo '<form action="../actions/cart_add.php" method="GET">';
					echo '<p class="name">' . $row['name'] . '</p>';

					$cmd = "SELECT name FROM collections WHERE id=" . $row['collection'];
					$result = mysqli_query($connect, $cmd);
					$collection = mysqli_fetch_array($result)[0];

                    echo '<p><i>' . $collection . '</i></p>';
                	
					$desc = get_description($id, NULL);

					if(!is_null($desc)) {
						echo '<p>' . $desc . '</p>';
					}

                    echo '<p class="price"> ' . get_price($row['price']) . '</p>';
                        
					$cmd = "SELECT * FROM sizes";
					$result = mysqli_query($connect, $cmd);

					echo '<div class="input-wrapper">';
					echo '<div class="input-group">';
					
					while($size = mysqli_fetch_array($result)) {
						echo '<div class="radio-input">';
						echo '<label for="' . $size["id"] . '">';
               		    echo '<input type="radio" name="size" id="' . $size["id"] . '" value="' . $size["id"] . '"/>';   
						echo '<span>' . $string["product"]["sizes"][$size["name"]] . '</span>';
						echo '</label>';
						echo '</div>';
					}
					
					echo '</div>';
					echo '</div>';

					echo '<div class="input-wrapper">';
					echo '<div class="input-group">';
					echo '<a class="button" onclick="qtyDec()">-</a>';
					echo '<input class="block-input" id="qty" name="qty" type="number" min="1" max="10" step="1" value="1" required/>';
					echo '<a class="button" onclick="qtyInc()">+</a>';
					echo '</div>';			
					echo '</div>';			
	
                   	echo '<input name="id" type="hidden" value="' . $row['id'] . '">'; 
                    echo '<input class="button" type="submit" value="' . $string["product"]["buy"] . '"/>';
                    echo '</form></div>';

					echo '<div class="comments">';
					echo '<h2>' . $string['product']['comments'] . '</h2>';

					$cmd = "SELECT * FROM comments WHERE product=" . $id;
					$result = mysqli_query($connect, $cmd);

					if(mysqli_num_rows($result) == 0) {
						echo '<div class="comment">';
						echo '<p><b>' . $string['product']['noComments'] . '</b></p>';
						echo '<p>' . $string['product']['noCommentsText'] . '</p>';
						echo '</div>';
					}

					while($row = mysqli_fetch_array($result)) {
						if($row['accepted'] == 0) {
							continue;	
						}

						echo '<div class="comment">';
						echo '<p><b>' . $row["name"] . '</b></p>';
						echo '<p>' . $row["comment"] . '</p>';
						echo '</div>';
					}

					echo '<form action="../actions/comment_add.php" method="POST">';
					echo '<input type="text" name="name" placeholder="' . $string['product']['name'] . '" required/>';
					echo '<input type="text" name="comment" placeholder="' . $string['product']['comment'] . '" required/>';
					echo '<input type="hidden" name="product" value="' . $id . '"/>';
					echo '<input type="submit" class="button" value="' . $string['product']['post'] . '" />';
					echo '</form>';
					echo '</div>';
                }else {
					echo '<div class="center-both">';
                    echo '<h1>'  . $string["product"]["invalid"] . '</h1>';
                    echo '<a href="shop" class="button center">'  . $string["product"]["continue"] . '</a>';
					echo '</div>';
                }	
            ?>
        </div>
        
        <?php require("../ui/footer.php"); ?>
		<script type="text/javascript" src="../js/product.js"></script>
		<script type="text/javascript">
    		$(window).load( function() {
        		$('.sp-wrap').smoothproducts();
    		});
		</script>
    </body>
</html>
