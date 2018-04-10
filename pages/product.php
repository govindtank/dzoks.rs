<?php 
    require("../logic/config.php"); 
	
	if(!params_ok(["id"], "GET")) {
		header("location: shop");
		exit;	
	}

	$product = strip($_GET["id"]);
?>
<html>
    <head>
        <?php 
            require("../ui/meta.php");
            require("../ui/link.php");
        
			$cmd = "SELECT * FROM products WHERE id='$product'";
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

					foreach(get_all_product_images($product) as $image) {
						echo '<a href="' . $image .'"><img src="' . $image . '" alt=""></a>';
					}

					echo '</div>';

                    echo '<div class="options">';
					echo '<h2>' . $row['name'] . '</h1>';

					$cmd = "SELECT name FROM collections WHERE id=" . $row['collection'];
					$result = mysqli_query($connect, $cmd);
					$collection = mysqli_fetch_array($result)[0];
					
					if(!is_null($collection) && !empty($collection)) {
						echo '<p><i>' . $collection . '</i></p>';
					}
                	
					$desc = get_description($product, NULL);

					if(!is_null($desc) && !empty($desc)) {
						echo '<p>' . $desc . '</p>';
					}

					echo '<form class="bordered" action="../actions/cart_add" method="GET">';
                    
					echo '<h2> ' . get_price($row['price']) . '</h2>';

					echo '<div class="input-wrapper">';
					echo '<div class="input-group">';
					
					$cmd = "SELECT * FROM sizes";
					$result = mysqli_query($connect, $cmd);

					while($size = mysqli_fetch_array($result)) {		
						$qty = get_quantity($size["id"], $product, $connect);

						echo '<div class="radio-input">';
						echo '<label ';
						
						if($qty == 0) {
							echo 'class="crossed" ';
						}

						echo 'for="size-' . $size["id"] . '">';
               		    echo '<input type="radio" name="size" ';
						
						if($qty == 0) {
							echo 'disabled ';
						}
						
						echo 'id="size-' . $size["id"] . '" value="' . $size["id"] . '"/>';   
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
	
                   	echo '<input name="id" type="hidden" value="' . $product . '">'; 
                    echo '<input class="button" type="submit" value="' . $string["product"]["buy"] . '"/>';
					echo '</form>';

					echo '<form action="../actions/comment_add" method="POST">';
					echo '<input type="text" name="name" placeholder="' . $string['product']['name'] . '" required/>';
					echo '<input type="text" name="comment" placeholder="' . $string['product']['comment'] . '" required/>';
					echo '<input type="hidden" name="product" value="' . $product . '"/>';
					echo '<input type="submit" class="button" value="' . $string['product']['post'] . '" />';
                    echo '</form></div>';

					echo '<div class="comments">';
					
					$cmd = "SELECT * FROM comments WHERE product=" . $product . " AND accepted=1";
					$result = mysqli_query($connect, $cmd);

					if(mysqli_num_rows($result) == 0) {
						echo '<div class="comment">';
						echo '<p><b>' . $string['product']['noComments'] . '</b></p>';
						echo '<p>' . $string['product']['noCommentsText'] . '</p>';
						echo '</div>';
					}else {
						while($row = mysqli_fetch_array($result)) {
							if($row['accepted'] == 0) {
								continue;	
							}

							echo '<div class="comment">';
							echo '<p><b>' . $row["name"] . '</b></p>';
							echo '<p>' . $row["comment"] . '</p>';
							echo '</div>';

							$cmd = "SELECT comment FROM comments WHERE reply_to=" . $row['id'];
							$reply = mysqli_query($connect, $cmd);
			
							if(mysqli_num_rows($reply) > 0) {
								echo '<div class="comment comment-reply">';
								echo '<p><b>' . $string['product']['reply'] . '</b></p>';
								echo '<p>' . mysqli_fetch_array($reply)[0] . '</p>';
								echo '</div>';
							}
						}
					}

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
