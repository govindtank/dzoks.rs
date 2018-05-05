<h1><?php echo $string["manage"]["products"]; ?></h1>
<form action="../actions/product_add" method="POST" enctype="multipart/form-data">  
	<input name="photos[]" type="file" multiple autofocus required/>
    <input name="name" type="text" maxlength="50" placeholder="<?php echo $string['product']['name']; ?>" required/>
	<input name="price" type="number" class="number" step="0.01" placeholder="<?php echo $string['product']['price']; ?>" required/> 
		
	<select name="collection" required>
		<option selected disabled value=""><?php echo $string['product']['collection']; ?></option>
			<?php
				$cmd = "SELECT * FROM collections";
				$result = mysqli_query($connect, $cmd);

				while($row = mysqli_fetch_array($result)) {
					echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
				}
			?>
	</select>

	<?php
		$cmd = "SELECT * FROM sizes";
		$result = mysqli_query($connect, $cmd);

		$size_count = mysqli_num_rows($result);

		while($row = mysqli_fetch_array($result)) {
			echo '<td class="no-border">';
    		echo '<input class="number" name="qty_' . $row['name']. '" type="number" id="qty_' . $row['name'] . '" placeholder="' . $row['name'] . '" />';
			echo '</td>';
		}
	?>

   	<textarea name="description-rs" rows="5" cols="10" placeholder="<?php echo $string['product']['description']['rs']; ?>" required></textarea>
   	<textarea name="description-en" rows="5" cols="10" placeholder="<?php echo $string['product']['description']['en']; ?>" required></textarea>

	<input class="button" type="submit" value="<?php echo $string['manage']['add']; ?>"/>
</form>
<table>	
	<?php
		$cmd = "SELECT products.id, products.name, products.price,
			collections.name AS collection_name
			FROM products
			LEFT JOIN collections
			ON collections.id=products.id";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<td><a href="product?id=' . $row['id'] . '"><img class="thumbnail" src="' . get_thumbnail($row['id'], 0) . '"/></a></td>';
			echo '<td>' . $row['name'] . '</td>';
			echo '<td>' . $row['collection_name'] . '</td>';
			echo '<td>' . get_price($row['price']) . '</td>';
			echo '<td><a class="button center" href="../pages/manage?type=' . $_GET['type'] . '&id=' . $row['id'] .'">' . $string['manage']['details'] . '</a></td>';
			echo '</tr>';
		}
	?>	
</table>
