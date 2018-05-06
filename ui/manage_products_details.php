<h1><?php echo $string["manage"]["details"]; ?></h1>
<form action="../actions/product_update" method="POST" enctype="multipart/form-data">
<table>	
	<?php
		$cmd = "SELECT * FROM products WHERE id=" . $_GET['id'];
		$row = mysqli_fetch_array(mysqli_query($connect, $cmd));

		echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
		
		echo '<a href="product?id=' . $row['id'] . '"><img alt="Product image" class="big-img" src="' . get_thumbnail($row['id'], 0) . '"/></a>';
		echo '<input name="photos[]" type="file" multiple/>';
		echo '<input name="name" type="text" maxlength="50" value="' . $row['name'] . '" placeholder="' . $string['product']['name'] . '" required/>';
		echo '<input name="price" type="number" class="number" step="0.01" placeholder="' . $string['product']['price'] . '" value="' . $row['price'] . '" required/>';

		echo '<select name="collection" required>';
		echo '<option disabled value="">' . $string['product']['collection'] . '</option>';
			
		$cmd = "SELECT * FROM collections";
		$cols = mysqli_query($connect, $cmd);

		while($col = mysqli_fetch_array($cols)) {
			echo '<option ';

			if(strcmp($col['id'], $row['collection']) == 0) {
				echo 'selected ';	
			}

			echo 'value="' . $col['id'] . '">' . $col['name'] . '</option>';
		}

		echo '</select>';

		$cmd = "SELECT * FROM sizes";
		$sizes = mysqli_query($connect, $cmd);
		$size_count = mysqli_num_rows($sizes);
		
		while($size = mysqli_fetch_array($sizes)) {
			$cmd = "SELECT quantity
				FROM warehouse
				WHERE product=" . $row['id'] . " AND size=" . $size['id'] . "
				ORDER BY id DESC LIMIT " . $size_count;	
			$qty = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];
    			echo '<input class="number" name="qty_' . $size['name']. '" value="' . $qty . '" type="number" id="qty_' . $size['name'] . '" placeholder="' . $size['name'] . '" />';
			}

    	echo '<textarea name="description-rs" rows="5" cols="10" placeholder="' . $string['product']['description']['rs'] . '">' . get_description($row['id'], 'rs') . '</textarea>';
    	echo '<textarea name="description-en" rows="5" cols="10" placeholder="' . $string['product']['description']['en'] . '">' . get_description($row['id'], 'en') . '</textarea>';

		echo '<input type="submit" class="button green" value="' . $string['manage']['save'] . '"/>';
		echo '<a class="button button-shrink red" href="../actions/product_remove.php?id=' . $row['id'] . '">X</a>';
	?>	
</table>
</form>
