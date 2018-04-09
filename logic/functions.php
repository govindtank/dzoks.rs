<?php
    function strip($var) {
		return mysqli_real_escape_string($GLOBALS['connect'], htmlspecialchars(strip_tags(trim($var))));
    }

	function get_mail($action, $lang) {
		$body = file_get_contents("../text/mail/" . $lang . "/" . $action . ".html");
		$body = str_replace("{{css}}", file_get_contents("../css/mail.css"), $body);
	
		return $body;
	}

	function hash_string($input) {
		return hash("SHA512", $input, false);
	}

	function check_login($connect, $string) {
		if(!isset($_SESSION["username"])) {
			error($string["status"]["notLoggedIn"]);
			header("location: ../pages/login");
			exit;
		}else {
			$cmd = "SELECT * FROM admins WHERE username='" . $_SESSION['username'] . "'";
			$result = mysqli_query($connect, $cmd);

			if(mysqli_num_rows($result) == 0) {
				error($string["status"]["notLoggedIn"]);
				header("location: ../pages/login");
				exit;
			}
		}
	}

	function check_level($required, $connect, $string) {
		if(!is_authorized($required, $connect, $string)) {	
			error($string["status"]["notLoggedIn"]);
			header("location: ../pages/login");
			exit;
		}
	}

	function is_authorized($required, $connect) {
		$username = $_SESSION['username'];

		$cmd = "SELECT level FROM admins WHERE username='$username'";
		$level = mysqli_fetch_array(mysqli_query($connect, $cmd))[0];

		return $level >= $required;
	}

	function is_image($type) {	
		$allowed = ["image/jpeg", "image/png", "image/gif"];
	
		return in_array($type, $allowed);
	}

	function file_size_ok($size) {
		return $size < 1000000;
	}

	function rename_file($name) {
		$ext = strtolower(substr($name, strripos($name, '.') + 1));

		return round(microtime(true)).mt_rand().'.'.$ext;	
	}

	function debug() {
		echo 'BEGIN DEBUG INFORMATION<br/>';	
		echo 'GET ' . print_r($_GET) . '<br/>';	
		echo 'POST ' . print_r($_POST) . '<br/>';	
		echo 'SESSION ' . print_r($_SESSION) . '<br/>';	
		echo 'COOKIE ' . print_r($_COOKIE) . '<br/>';	
		echo 'END DEBUG INFORMATION<br/>';	
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

	function get_first_file($path) {
		$image = '../img/no_photo.jpg';
			
		if(file_exists($path)) {
			$files = scandir($path);

			foreach($files as $file) {
    	    	if($file[0] != '.') {
					$image = $path . '/' . $file;
					break;
				}
			}
		}

		return $image;
	}

	function convert($from, $to, $amount) {
     	$url = 'http://finance.google.com/finance/converter?a=' . $amount . '&from=' . $from . '&to=' . $to;
     	$data = file_get_contents($url);
    
	    preg_match_all("/<span class=bld>(.*)<\/span>/", $data, $converted);
    
		return preg_replace("/[^0-9.]/", "", $converted[1][0]);
   	}

	function get_quantity($size, $id, $connect) {
		$cmd = "SELECT quantity FROM warehouse WHERE product=" . $id . " AND size=" . $size . " ORDER BY id DESC";

		return mysqli_fetch_array(mysqli_query($connect, $cmd))[0];
	}

	function checkQuantity($asked, $size, $id, $connect, $string) {	
		$having = get_quantity($size, $id, $connect);

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
		$ipaddress = '';
		
		if(getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if(getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if(getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if(getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if(getenv('HTTP_FORWARDED'))
			$ipaddress = getenv('HTTP_FORWARDED');
		else if(getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'UNKNOWN';

		return $ipaddress;
	}

	function get_id() {
		if(isset($_COOKIE['id'])) {
			return $_COOKIE['id'];
		}
		
		$cookie = generate_random_string(15);
		setcookie('id', $cookie, time() + 604800, '/', $_SERVER["SERVER_NAME"], 0); 
		
		return $cookie;
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
