<h1><?php echo $string["manage"]["products"]; ?></h1>
<table>	
	<tr>
		<form action="../actions/product_add" method="POST" enctype="multipart/form-data">  
			<td class="no-border"><input name="photos[]" type="file" multiple autofocus required/></td>
    		<td class="no-border"><input name="name" type="text" maxlength="50" placeholder="<?php echo $string['product']['name']; ?>" required/></td>
    		<td class="no-border"><input name="price" type="number" class="number" step="0.01" placeholder="<?php echo $string['product']['price']; ?>" required/></td>     
			<td class="no-border">
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
			</td>
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
    		<td class="no-border"><textarea name="description-rs" rows="5" cols="10" placeholder="<?php echo $string['product']['description']['rs']; ?>" required></textarea></td>
    		<td class="no-border"><textarea name="description-en" rows="5" cols="10" placeholder="<?php echo $string['product']['description']['en']; ?>" required></textarea></td>
			<td class="no-border"><input class="button" type="submit" value="<?php echo $string['manage']['add']; ?>"/></td>
		</form>
	</tr>
	<?php
		$cmd = "SELECT * FROM products";
		$result = mysqli_query($connect, $cmd);

		while($row = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<form action="../actions/product_update" method="POST" enctype="multipart/form-data">';
			echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
			echo '<td>';
			echo '<a href="product?id=' . $row['id'] . '"><img class="thumbnail" src="' . get_thumbnail($row['id'], 0) . '"/></a>';
			echo '<input name="photos[]" type="file" multiple/>';
			echo '</td>';
			echo '<td><input name="name" type="text" maxlength="50" value="' . $row['name'] . '" placeholder="' . $string['product']['name'] . '" required/></td>';
			echo '<td><input name="price" type="number" class="number" step="0.01" placeholder="' . $string['product']['price'] . '" value="' . $row['price'] . '" required/></td>';

			echo '<td>';
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
			echo '</td>';

			$cmd = "SELECT * FROM sizes";
			$sizes = mysqli_query($connect, $cmd);
			
			while($size = mysqli_fetch_array($sizes)) {
				$cmd = "SELECT quantity FROM warehouse WHERE product=" . $row['id'] . " AND size=" . $size['id'] . " ORDER BY id DESC LIMIT " . $size_count;	
				$qty = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

				echo '<td>';
    			echo '<input class="number" name="qty_' . $size['name']. '" value="' . $qty . '" type="number" id="qty_' . $size['name'] . '" placeholder="' . $size['name'] . '" />';
				echo '</td>';
			}

			$desc_rs = get_description($row['id'], 'rs');
			$desc_en = get_description($row['id'], 'en');

    		echo '<td><textarea name="description-rs" rows="5" cols="10" placeholder="' . $string['product']['description']['rs'] . '">' . $desc_rs . '</textarea></td>';
    		echo '<td><textarea name="description-en" rows="5" cols="10" placeholder="' . $string['product']['description']['en'] . '">' . $desc_en . '</textarea></td>';

			echo '<td><input type="submit" class="button green" value="' . $string['manage']['save'] . '"/></td>';
			echo '<td><a class="button button-shrink red" href="../actions/product_remove.php?id=' . $row['id'] . '">X</a></td>';
			echo '</form>';
			echo '</tr>';
		}
	?>	
</table>
