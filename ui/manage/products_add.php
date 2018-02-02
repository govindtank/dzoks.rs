<h1><?php echo $string["manage"]["products"]["add"]; ?></h1>
<form action="../actions/product_add.php" method="POST" enctype="multipart/form-data">  
    <input name="name" type="text" maxlength="50" placeholder="<?php echo $string['manage']['name']; ?>" autofocus required/>
    <input name="price" type="number" class="number" step="0.01" placeholder="<?php echo $string['manage']['price']; ?>" required/>
                    
	<select name="collection" required>
		<option selected disabled value=""><?php echo $string['manage']['collection']; ?></option>
		
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

		while($row = mysqli_fetch_array($result)) {
			echo '<div class="input-wrapper">';
			echo '<div class="input-group">';
			echo '<a class="button" onclick="qtyDec()">-</a>';
    		echo '<input class="number" name="qty_' . $row['name']. '" type="number" min="1" step="1" class="number" id="qty_' . $row['name'] . '" placeholder="' . $row['name'] . '" required />';
			echo '<a class="button" onclick="qtyInc()">+</a>';
			echo '</div>';			
			echo '</div>';
		}
	?>

    <textarea name="description-rs" rows="10" cols="30" placeholder="<?php echo $string['manage']['description']['rs']; ?>" required></textarea>
    <textarea name="description-en" rows="10" cols="30" placeholder="<?php echo $string['manage']['description']['en']; ?>" required></textarea>
	<input name="photos[]" type="file" multiple required/>
	<input class="button" type="submit" value="<?php echo $string['manage']['add']; ?>"/>
</form>
