<?php
	session_start();

	function get_http_response_code($domain1) {
		$headers = get_headers($domain1);
		return substr($headers[0], 9, 3);
	}

	$show_arr = array(39337,38860,38186,37435,38226,38731,39063,37806,38091,38268,37614,38295,38161,36407,38000,38080,34620,37964,38778,38098,38150,38397,38814,38707,37426,38787,38759,37952,38004,37940);

	//send in username; create code and echo to caller
	if($_GET['func'] == 'get_code' && isset($_GET['username']) && $_GET['username'] != ''){
		$code = bin2hex(openssl_random_pseudo_bytes(16));
		$username = $_GET['username'];
		if(preg_match('/^[a-zA-Z0-9._.-]+$/', $username))
		{
			$url = 'https://myanimelist.net/profile/'.$username;
			if(get_http_response_code($url) == "404"){
				echo 'username invalid';
				return;
			}
			$_SESSION['username'] = $username;
			$_SESSION['code'] = $code;
			echo $code;
		}
		else
		{
			echo 'username invalid';
		}
		return;
	}
	if($_POST['func'] == 'check_code')
	{
		$url = 'https://myanimelist.net/profile/'.$_SESSION['username'];
		$usr_page = file_get_contents($url);
		$json_data = $_POST['team_data'];
		//code found
		if (strpos($usr_page, '<span class="user-status-data di-ib fl-r">'.$_SESSION['code'].'</span>') !== false){
			//{0,1,2,3,4,5,6}
			if (in_array('37991', $json_data) && in_array('36432', $json_data)){ 
				echo 'invalid restrict';
				return;
			}
			if (count($json_data) != count(array_unique($json_data))){
				echo 'invalid dupes';
				return;
			}
			if (array_diff($json_data, $show_arr)){
				echo 'invalid entry';
				return;
			}
			$save_str = '';
			foreach($json_data as $entry){
				$save_str = $save_str.(string)$entry."\n";
			}
			//valid otherwise
			$file = fopen('../../fal_data/'.$_SESSION['username'].'.txt', 'w');
			fwrite($file, $save_str);
			fclose($file);
			echo 'success';

			$file = fopen('../../fal_data/00log.txt', 'a');
			fwrite($file, $_SESSION['username'].((string)time()).(json_encode($json_data))."\n");
			fclose($file);
		}
		else{
			echo 'auth invalid';
		}
	}
?>
