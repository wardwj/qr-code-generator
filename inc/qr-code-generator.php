<?php
	
	// Get the url
	$url = $_POST['url'];

	// Build query
	$query = [
		'chs'	=> '300x300',
		'cht'	=> 'qr',
		'chl' 	=> $url,
		'choe'	=> 'UTF-8'
	];

	// Build QR code URL
	$imgSrc = "https://chart.googleapis.com/chart?" . http_build_query($query);
