<?php
//Script by: evilbudz - nzquakes.design
// PHP Script to get Earth Quake JSON data from GeoNet
if ( !empty($_GET['ajax']) ) {
	// Let's create a new cURL resource handle
	$ch = curl_init();

	// Now set some options (most are optional)

	// Set File to download from URL
	curl_setopt($ch, CURLOPT_URL, 'https://www.geonet.org.nz/quakes/services/all.json');

	// Include header in result? (0 = yes, 1 = no)
	// Include Header MUST be set to 0 else will not return data needed
  curl_setopt($ch, CURLOPT_HEADER, 0);

	// Should cURL return or print out the data? (true = return, false = print)
	// Make sure this is set to true else Earth Quakes will not display on Google Maps and the script will not process data sent back
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	// Timeout in seconds
	curl_setopt($ch, CURLOPT_TIMEOUT, 300);

	// Download the given File, and return output
	$output = curl_exec($ch);

	// Close the cURL resource, and free system resources
	curl_close($ch);

	echo $output;
	die;
}
?>
