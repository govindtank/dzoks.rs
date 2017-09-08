<?php 
    require("logic/config.php"); 
   	$id = strip($_GET["id"]);
   
   	if(!isset($id)) {
        header("location: shop.php");
    }
?>
<html>
    <head>
        <?php 
            require("ui/meta.php");
            require("ui/link.php");
        
			$cmd = "SELECT * FROM products WHERE id='$id'";
			$result = mysqli_query($connect, $cmd);

			while($row = mysqli_fetch_array($result)) {
            	echo '<title>' . $row['name'] . '</title>';
				break;
			}
        ?>
    </head>
    <body id="page">
        <?php require("ui/header.php"); ?>
        
        <div class="main">
            <?php 
				if(mysqli_num_rows($result) == 1){
					echo '<h1 id="' . $row['id'] . '">' . $row['name'] . '</h1>';
					
					$path = 'img/products/' . $id;
					$files = scandir($path);
					
					foreach($files as $file) {
                        if($file[0] != '.') {
							$filename = $path . '/' . $file;
                    		echo '<div class="zoom-item product-zoomer"><img class="product-big" src="' . $filename . '" /></div>';
							break;
						}
					}
 
                    echo '<div class="product-options">';
                    echo '<p class="product-desc">' . $row['description'] . '</p>';
                        
                    echo '<p class="price">$ ' . $row['price'] . '</p>';
                        
                    echo '<select id="size">';
                    echo '<option disabled selected>' . $string["product"]["size"] . '</option>';

                    foreach($string["product"]["sizes"] as $size) {
               		    echo '<option value="' . $size . '">' . $size . '</option>';   
                    }

                    echo '</select>';
                        
                    echo '<input id="quantity" type="number" min="1" placeholder="' . $string["product"]["quantity"] . '" required/>';
                    
                    echo '<div class="buttons">';
                    echo '<a onclick="addToCart()" class="button">'  . $string["product"]["buy"] . '</a>';
                    echo '</div></div>';
                }else {
                    echo '<h1>'  . $string["product"]["invalid"] . '</h1>';
                    echo '<a href="shop" class="button">'  . $string["product"]["continue"] . '</a>';
                }
            ?>
        </div>
        
        <?php require("ui/footer.php"); ?>
    </body>
</html>
