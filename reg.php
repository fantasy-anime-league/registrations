<?php
	session_start();

	function get_http_response_code($domain1) {
		$headers = get_headers($domain1);
		return substr($headers[0], 9, 3);
	}

	$show_arr = array(38670,39590,37403,39959,38572,38328,37525,39195,40004,37379,39523,38390,39811,38084,36587,39030,39570,39468,37972,38276,40196,39567,38889,39196,39701,39539,40178,38483,37522,39506,39491,39355,38529,38659,39940,38331,39799,37393,40254,37268);
	$restricted_ids = array(39491, 39701, 39940);

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
			$num_restricted = 0;
			for ($i = 0; $i < sizeof($restricted_ids); $i++) {
				if (in_array(strval($restricted_ids[$i]), $json_data)){
					$num_restricted = $num_restricted + 1;
				}
			}
			if ($num_restricted > 1) {
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
	if($_GET['func'] == 'get_team' && isset($_GET['username']) && $_GET['username'] != ''){
		$url = 'https://myanimelist.net/profile/'.$_SESSION['username'];
		$usr_page = file_get_contents($url);
		if (strpos($usr_page, '<span class="user-status-data di-ib fl-r">'.$_SESSION['code']) !== false){
			//valid otherwise
			$filename = '../../fal_data/'.$_SESSION['username'].'.txt';
			$team_info = file_get_contents($filename);
			if ($team_info === false) {
				echo 'user not found';
			}
			else {
				echo $team_info;
			}
		}
		else{
			echo 'auth invalid';
		}
		return;
	}
?>
