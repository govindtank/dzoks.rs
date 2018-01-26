<?php
	require("../logic/config.php"); 

	if(!isset($_SESSION["username"])) {
		error($string["status"]["notLoggedIn"]);
		header("location: login.php");
		exit;
	}

	$cmd = "SELECT * FROM admins WHERE username='" . $_SESSION['username'] . "'";

	$result = mysqli_query($connect, $cmd);

	if(mysqli_num_rows($result) == 0) {
		error($string["status"]["notLoggedIn"]);
		header("location: login.php");
		exit;
	}
?>
<html>
    <head>
        <?php require("../ui/head_content.php"); ?>
		<link rel="stylesheet" href="../css/manage.css">
    </head>
    <body>
        <?php require("../ui/header.php"); ?>
            <div class="main">
				<h1><?php echo $string["manage"]["collections"]; ?></h1>
				<table>	
					<?php
						$cmd = "SELECT * FROM collections";
						$result = mysqli_query($connect, $cmd);

						while($row = mysqli_fetch_array($result)) {
							echo '<tr>';
							echo '<td>' . $row['name'] . '</td>';
							echo '<td><a href="../actions/collection_remove?id=' . $row['id'] . '">X</a></td>';
							echo '</tr>';
						}
					?>	
					
					<tr>
						<form action="../actions/collection_add.php" method="POST">
                    		<td class="no-border"><input name="name" type="text" size="30" placeholder="<?php echo $string['manage']['name']; ?>" required/></td>
                    		<td class="no-border"><input class="button" type="submit" value="<?php echo $string['manage']['add']; ?>"/></td>
						</form>
					<tr>
				</table>

				<div class="left">
				<h1><?php echo $string["manage"]["products"]["remove"]; ?></h1>
				<table>	
					<?php
						$cmd = "SELECT * FROM products";
						$result = mysqli_query($connect, $cmd);

						while($row = mysqli_fetch_array($result)) {
							echo '<tr>';
							echo '<td>' . $row['name'] . '</td>';
							echo '<td>' . $row['price'] . '</td>';
							echo '<td><a href="../actions/product_remove?id=' . $row['id'] . '">X</a></td>';
							echo '</tr>';
						}
					?>	
				</table>
				</div>
                
				<div class="right">
				<h1><?php echo $string["manage"]["products"]["add"]; ?></h1>
				<form action="../actions/product_add.php" method="POST" enctype="multipart/form-data">  
                    <input name="name" type="text" size="30" placeholder="<?php echo $string['manage']['name']; ?>" required/>
                    <input name="price" type="number" step="0.01" placeholder="<?php echo $string['manage']['price']; ?>" required/>
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
            	</div>
            </div>

        <?php require("../ui/footer.php"); ?>
    </body>
</html>
