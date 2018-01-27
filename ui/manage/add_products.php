<h1><?php echo $string["manage"]["products"]["add"]; ?></h1>
<form action="../actions/product_add.php" method="POST" enctype="multipart/form-data">  
    <input name="name" type="text" size="30" placeholder="<?php echo $string['manage']['name']; ?>" required/>
    <input name="price" type="number" class="number" step="0.01" placeholder="<?php echo $string['manage']['price']; ?>" required/>
    <input name="quantity" type="number" class="number" placeholder="<?php echo $string['manage']['quantity']; ?>" required/>
                    
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

    <textarea name="description" rows="10" cols="30" placeholder="<?php echo $string['manage']['description']; ?>" required></textarea>
	<input name="photos[]" type="file" multiple required/>
	<input class="button" type="submit" value="<?php echo $string['manage']['add']; ?>"/>
</form>
