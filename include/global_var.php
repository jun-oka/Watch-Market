<?php
	// $stage = 'local';
	$stage = 'remote';
	
	if($stage=='local') {
		$root_directory = 'http://localhost:8888/masters_of_code/';
		$nofollow = '<meta name="robots" content="noindex">';
		$google_analytics = '';
		
		// Database credentials
		$db_username = '';  
		$db_pass = '';  
		$db_name = '';
	}
	elseif($stage=='remote') {
		$root_directory = '';
		$nofollow = '<meta name="robots" content="noindex">';
		$google_analytics = "";
		
		// Database credentials
		$db_username = '';  
		$db_pass = '';  
		$db_name = '';
	}
	
	// Default variables
	$site_name = 'WatchMarket';
	$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

	date_default_timezone_set('Asia/Hong_Kong');
	$date = date('Y-m-d H:i:s');
	$year = date('Y');
?>