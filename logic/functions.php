<?php
    function strip($var) {
		return mysqli_real_escape_string($GLOBALS['connect'], htmlspecialchars(strip_tags(trim($var))));
    }

	function get_all_product_images($id) {
		$path = '../img/products/' . $id;
		$files = scandir($path);
		$images = [];	
		$i = 0;

		foreach($files as $file) {
        	if($file[0] != '.') {
				$images[] = $path . '/' . $file;
				$i++;
			}
		}

		if($i == 0) {
			$images[] = '../img/no_photo.jpg';
		}

		return $images;
	}

	function get_product_image($id, $index) {
		$path = '../img/products/' . $id;
		$files = scandir($path);
		$image = '../img/no_photo.jpg';
		$i = 0;

		foreach($files as $file) {
        	if($file[0] != '.') {
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
		$currency = 'USD';

		if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'rs') {
			// TODO call some API to exchange
			$price *= 115;
			$currency = 'RSD';
		}

		return $price . ' ' . $currency;
	}

	function get_ip() {
		if(!isset($_COOKIE['ip'])) {
			$cookie = generate_random_string(15);
			setcookie('ip', $cookie, time() + (10 * 365 * 24 * 60 * 60));
			return $cookie;
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
