<?php 
    require("../logic/config.php"); 
   	
	if(!params_ok(["id"], "GET")) {
		header("location: shop.php");
		exit;	
	}

	$id = strip($_GET["id"]);
   
   	if(!isset($id)) {
        header("location: shop.php");
    }
?>
<html>
    <head>
        <?php 
            require("../ui/meta.php");
            require("../ui/link.php");
        
			$cmd = "SELECT * FROM products WHERE id='$id'";
			$result = mysqli_query($connect, $cmd);

			while($row = mysqli_fetch_array($result)) {
            	echo '<title>' . $row['name'] . '</title>';
				break;
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

                    echo '<p>' . $collection . '</p>';
                    
					echo '<p>' . $row['description'] . '</p>';
                    echo '<p class="price"> ' . get_price($row['price']) . '</p>';
                        
                    echo '<select name="size" required>';
                    echo '<option selected disabled value="">' . $string["product"]["size"] . '</option>';

					$cmd = "SELECT * FROM sizes";
					$result = mysqli_query($connect, $cmd);

					while($size = mysqli_fetch_array($result)) {
               		    echo '<option value="' . $size['id'] . '">' . $string["product"]["sizes"][$size['name']] . '</option>';   
					}

                    echo '</select>';
					
					echo '<input class="number" name="qty" type="number" min="1" max="10" step="1" placeholder="' . $string["product"]["quantity"] . '" required/>';
                   	echo '<input name="id" type="hidden" value="' . $row['id'] . '">'; 
                    echo '<input class="button" type="submit" value="' . $string["product"]["buy"] . '"/>';
                    echo '</form></div>';
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
