<?php
    // $ch = curl_init();                    // Initiate cURL
    // $url = "https://secure.firewoodfx.com/fwfxapi/checkapiinput/"; // Where you want to post data
    // curl_setopt($ch, CURLOPT_URL,$url);
    // curl_setopt($ch, CURLOPT_POST, true);  // Tell cURL you want to post something
    // curl_setopt($ch, CURLOPT_POSTFIELDS, "apikey=z7zo54icvc7kwu98v6s9vs3q5c54oz6j&mt4=1680043072"); // Define what you want to post
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the output in string format
    // $output = curl_exec ($ch); // Execute

    // curl_close ($ch); // Close cURL handle

    // var_dump($output); // Show output

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://secure.firewoodfx.com/fwfxapi/checkapiinput/");
curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, "apikey=z7zo54icvc7kwu98v6s9vs3q5c54oz6j&mt4=1680043072");

// In real life you should use something like:
curl_setopt($ch, CURLOPT_POSTFIELDS, 
         http_build_query(array('apikey' => 'z7zo54icvc7kwu98v6s9vs3q5c54oz6j', 'mt4' => '1680043072')));

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close ($ch);

var_dump($server_output);

?>