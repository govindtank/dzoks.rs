<?php
 	require("../logic/config.php");

	check_login($string);

	if(!params_ok(["name", "price", "collection", "description-rs", "description-en"], "POST")) {	
		error($string['status']['productNotAdded']);
		header("location: ../pages/manage.php");
		exit;
	}

	$name = strip($_POST['name']);
	$price = strip($_POST['price']);
	$col = strip($_POST['collection']);
	$desc_rs = strip($_POST['description-rs']);
	$desc_en = strip($_POST['description-en']);

	$cmd = "INSERT INTO products (name, price, collection) VALUES('$name', '$price', '$col')";
	
	mysqli_query($connect, $cmd);

	$cmd = "SELECT id FROM products ORDER BY id DESC LIMIT 1";

	$id = mysqli_fetch_array(mysqli_query($connect, $cmd))['id'];
	
	$path = '../products/' . $id;

	if(!file_exists($path)) {
		mkdir($path);
	}

	file_put_contents($path . "/desc/rs.txt", $desc_rs);
	file_put_contents($path . "/desc/en.txt", $desc_en);

	if(isset($_FILES['photos']['name'])) {
  		$total_files = count($_FILES['photos']['name']);
  
  		for($key = 0; $key < $total_files; $key++) {
    		if(isset($_FILES['photos']['name'][$key]) && $_FILES['photos']['size'][$key] > 0) {
   				$tmp_name = $_FILES["photos"]["tmp_name"][$key];
  				$name = $path . '/' . basename($_FILES["photos"]["name"][$key]);
				move_uploaded_file($tmp_name, $name);
	
				if($key > 1) {
					continue;
				}

				switch(strtolower($_FILES['photos']['type'][$key])) {
    				case 'image/jpeg':
        				$image = imagecreatefromjpeg($name);
    				    break;
    				case 'image/png':
        				$image = imagecreatefrompng($name);
        				break;
    				case 'image/gif':
        				$image = imagecreatefromgif($name);
        				break;
    				default:
						error($string['status']['productNotAdded']);
						header("location: ../pages/manage.php");
						exit;	
				}

				$max_width = 400;
				$max_height = 400;

				$old_width = imagesx($image);
				$old_height = imagesy($image);

				$scale = min($max_width / $old_width, $max_height / $old_height);

				$new_width = ceil($scale * $old_width);
				$new_height = ceil($scale * $old_height);

				$new = imagecreatetruecolor($new_width, $new_height);

				imagecopyresampled($new, $image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);
				
				imagejpeg($new, $path . "/thumb" . $key .".jpg", 100);

				imagedestroy($image);
				imagedestroy($new);
	   		} 
  		} 
	}
	
	$cmd = "SELECT * FROM sizes";
	$result = mysqli_query($connect, $cmd);

	while($row = mysqli_fetch_array($result)) {
		$i = 'qty_' . $row['name'];
		
		$size = $row['id'];

		if(isset($_POST[$i])) {
			$qty = strip($_POST[$i]);

			$cmd = "INSERT INTO warehouse (product, size, quantity) VALUES('$id', '$size', '$qty')";
			mysqli_query($connect, $cmd);
		}
	}

	success($string['status']['productAdded']);
	header("Location: ../pages/manage?type=1");
?>
