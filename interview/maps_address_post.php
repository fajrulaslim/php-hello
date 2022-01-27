<?php 

	$name = $_POST['name'];
	$company = $_POST['company'];
	$address = $_POST['address'];

	$address = 'BTM 2nd Stage, Bengaluru, Karnataka 560076'; // Address
	$apiKey = 'api-key'; // Google maps now requires an API key.
	// Get JSON results from this request
	$geo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false&key='.$apiKey);
	$geo = json_decode($geo, true); // Convert the JSON to an array

	if (isset($geo['status']) && ($geo['status'] == 'OK')) {
	  $latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
	  $longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude
	}

	echo 'Selamat datang, ' . $name . ' di Perusahaan ' . $company;
	echo '<br>';
	echo 'kamu berada di lokasi longitude: ' . $latitude . ' dan logituted: ' . $longitude;
	echo '<br><br>';
	echo 'Klik tombol untuk tahu lebih detail';
	echo '<br>';
	echo '<a href="' . $address . '">Klik Peta</a>';

?>