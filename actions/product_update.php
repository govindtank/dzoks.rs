<?php
	require("../logic/config.php");
	
	check_login($connect, $string);
	check_level(2, $connect, $string);

	if(!params_ok(["id", "name", "price", "collection", "description-rs", "description-en"], "POST")) {	
		error($string['status']['productNotUpdated']);
		header("location: ../pages/manage");
		exit;
	}

	$id = strip($_POST['id']);
	$name = strip($_POST['name']);
	$price = strip($_POST['price']);
	$col = strip($_POST['collection']);
	$desc_rs = strip($_POST['description-rs']);
	$desc_en = strip($_POST['description-en']);

	$cmd = "UPDATE products SET name='" . $name . "', price=" . $price . ", collection=" . $col . " WHERE id=" . $id;

	mysqli_query($connect, $cmd);

	$path = '../products/' . $id;
	$desc_path = $path . '/desc';
	$img_path = $path . '/img';

	if(!empty($desc_rs) || !empty($desc_en)) {
		if(file_exists($desc_path)) {
			rm_dir($desc_path);
		}

		if(!file_exists($desc_path)) {
			mkdir($desc_path, 0777, true);
		}

		file_put_contents($desc_path . "/rs.txt", $desc_rs);
		file_put_contents($desc_path . "/en.txt", $desc_en);
	}
	
	if(isset($_FILES['photos']['name'])) {
  		$total_files = count($_FILES['photos']['name']);

		if($total_files > 0 && !empty($_FILES['photos']['name'][0])) {
			if(file_exists($img_path)) {
				rm_dir($img_path);
			}

			if(!file_exists($img_path)) {
				mkdir($img_path, 0777, true);
			}
		}

  		for($key = 0; $key < $total_files; $key++) {
    		if(isset($_FILES['photos']['name'][$key]) && $_FILES['photos']['size'][$key] > 0) {
   				$tmp_name = $_FILES["photos"]["tmp_name"][$key];
  				$name = $img_path . '/' . basename($_FILES["photos"]["name"][$key]);
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
						error($string['status']['productNotUpdated']);
						header("location: ../pages/manage");
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
				
				imagejpeg($new, $img_path . "/thumb" . $key .".jpg", 100);

				imagedestroy($image);
				imagedestroy($new);
	   		} 
  		} 
	}
	
	$cmd = "DELETE FROM warehouse WHERE product=$id";
	mysqli_query($connect, $cmd) or die(mysqli_error($connect));

	
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

	success($string['status']['productUpdated']);
	header("location: ../pages/manage?type=1");
?>
