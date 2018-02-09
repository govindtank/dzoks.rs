<?php
    function strip($var) {
		return mysqli_real_escape_string($GLOBALS['connect'], htmlspecialchars(strip_tags(trim($var))));
    }

	function hash_string($input) {
		return hash("SHA512", $input, false);
	}

	function rm_dir($dirname) {
		$dir_handle = null;

        if(is_dir($dirname)) {
			$dir_handle = opendir($dirname);
		}

	 	if(!$dir_handle) {
	    	return;
		}

		while($file = readdir($dir_handle)) {
	    	if($file != "." && $file != "..") {
	        	if(!is_dir($dirname . "/" . $file)) {
	                unlink($dirname . "/" . $file);
	            }else {
	            	rm_dir($dirname . '/' . $file);
				}
	       	}
	 	}

	 	closedir($dir_handle);
	 	rmdir($dirname);
	}

	function get_description($id, $lang) {
		$path = "../products/" . $id . "/desc/";

		if(is_null($lang)) {	
			if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en') {
				$path .= "en"; 
			}else {
				$path .= "rs";
			}
		}else {
			$path .= $lang;
		}

		$path .= ".txt";

		if(file_exists($path)) {
			return file_get_contents($path);
		}else {
			return NULL;	
		}
	}

	function get_all_product_images($id) {
		$path = '../products/' . $id . '/img';

		$i = 0;
		
		if(file_exists($path)) {
			$files = scandir($path);
			$images = [];	

			foreach($files as $file) {
    	    	if($file[0] != '.' && strpos($file, ".txt") === false && strpos($file, "thumb") === false) {
					$images[] = $path . '/' . $file;
					$i++;
				}
			}
		}

		if($i == 0) {
			$images[] = '../img/no_photo.jpg';
		}

		return $images;
	}

	function get_thumbnail($id, $index) {
		$path = '../products/img/' . $id . '/thumb' . $index .'.jpg';

		if(file_exists($path)) {
			return $path;
		}
	
		return get_product_image($id, $index);
	}

	function get_product_image($id, $index) {
		$path = '../products/' . $id . '/img';
		$image = '../img/no_photo.jpg';

		if(!file_exists($path)) {
			return $image;
		}

		$files = scandir($path);
		$i = 0;

		foreach($files as $file) {
        	if($file[0] != '.' && strpos($file, ".txt") === false && strpos($file, "thumb") === false) {
				if($i++ == $index) {
					return $path . '/' . $file;
				}
			}
		}

		if($index != 0) {
			return get_product_image($id, 0); 	
		}

		return $image;
	}

	function convert($from, $to, $amount) {
     	$url = 'http://finance.google.com/finance/converter?a=' . $amount . '&from=' . $from . '&to=' . $to;
     	$data = file_get_contents($url);
    
	    preg_match_all("/<span class=bld>(.*)<\/span>/", $data, $converted);
    
		return preg_replace("/[^0-9.]/", "", $converted[1][0]);
   	}

	function checkQuantity($asked, $size, $id, $connect, $string) {	
		$cmd = "SELECT quantity FROM warehouse WHERE product=" . $id . " AND size=" . $size;
		
		$having = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];
	
		if($asked > $having) {
			error($string['status']['bigQuantity']);	
			header("location: ../pages/product.php?id=" . $id);
			exit;
		}		
	}

	function get_price($price) {
		$currency = 'RSD';

		if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en') {
			if(!isset($_SESSION['rsdeur'])) {
				$_SESSION['rsdeur'] = convert($currency, 'EUR', 1);
			}
			
			if($_SESSION['rsdeur'] == 0) {
				$_SESSION['rsdeur'] = 120;
			}

			$price /= $_SESSION['rsdeur'];

			$currency = 'EUR';
		}
		
		return $price = round($price, 2) . ' ' . $currency;
	}

	function get_ip() {
		if(!isset($_COOKIE['ip'])) {
			setcookie('ip', generate_random_string(15), time() + (10 * 365 * 24 * 60 * 60), '/', null);
		}

		return $_COOKIE['ip'];
	}

	function params_ok($params, $method) {
		foreach($params as $p) {
			if($method == "GET") {
				if(!isset($_GET[$p])) {
					return false;	
				}
			}else if($method == "POST") {
				if(!isset($_POST[$p])) {
					return false;	
				}
			}
		}
	
		return true;
	}

	function error($msg) {
		$_SESSION['error'] = $msg;	
	}
	
	function success($msg) {
		$_SESSION['success'] = $msg;	
	}

	function order($msg) {
		$_SESSION['order'] = $msg;
	}

	function generate_random_string($length) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		
		return $randomString;
	}
?>
