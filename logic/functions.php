<?php
    function strip($var) {
		return mysqli_real_escape_string($GLOBALS['connect'], htmlspecialchars(strip_tags(trim($var))));
    }

	function get_product_image($id) {
		$path = '../img/products/' . $id;
		$files = scandir($path);
					
		$filename = '../img/products/no_photo.jpg';

		foreach($files as $file) {
        	if($file[0] != '.') {
				$filename = $path . '/' . $file;
				break;
			}
		}

		return $filename;
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
			setcookie('ip', generate_random_string(15), time() + (10 * 365 * 24 * 60 * 60));
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
