<?php
	function instagram_connect($api_url){
		$connection_c = curl_init();
		
		curl_setopt($connection_c, CURLOPT_URL, $api_url);
		curl_setopt($connection_c, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($connection_c, CURLOPT_TIMEOUT, 20);
		
		$json_return = curl_exec($connection_c);
		
		curl_close($connection_c);
		
		return json_decode($json_return);
	}

	function instagram_images() {
		// TODO Add access token
		$access_token = 'YOUR ACCESS TOKEN';
		$username = 'soxbty';
		$user_search = instagram_connect("https://api.instagram.com/v1/users/search?q=" . $username . "&access_token=" . $access_token);
 
		$user_id = $user_search->data[0]->id;
		$return = instagram_connect("https://api.instagram.com/v1/users/" . $user_id . "/media/recent?access_token=" . $access_token);
 
		$images = [];
 
		foreach($return->data as $post) {
			$images[$post->images->standard_resolution->url] = $post->images->thumbnail->url;
		}

		return $images;
	} 
?>
