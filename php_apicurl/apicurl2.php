<?php
    function executeCurl($arrOptions) {
        $mixCH = curl_init();

        foreach ($arrOptions as $strCurlOpt => $mixCurlOptValue) {
            curl_setopt($mixCH, $strCurlOpt, $mixCurlOptValue);
        }

        $mixResponse = curl_exec($mixCH);
        curl_close($mixCH);
        return $mixResponse;
    }

    // If any HTTP authentication is needed.
    // $username = 'http-auth-username';
    // $password = 'http-auth-password';

    $requestType = 'POST'; // This can be PUT or POST

    // This is a sample array. You can use $arrPostData = $_POST
    $arrPostData = array(
        'apikey'  => 'z7zo54icvc7kwu98v6s9vs3q5c54oz6j',
        'mt4'  => '1680043072',
        // 'key3'  => array(
        //         'key31'   => 'value-for-key-3-1',
        //         'key32'   => array(
        //             'key321' => 'value-for-key321'
        //         )
        // ),
        // 'key4'  => array(
        //     'key'   => 'value'
        // )
    );

    // You can set your post data
    $postData = http_build_query($arrPostData); // Raw PHP array

    $postData = json_encode($arrPostData); // Only USE this when request JSON data.

    $mixResponse = executeCurl(array(
        CURLOPT_URL => 'https://secure.firewoodfx.com/fwfxapi/clientreport',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPGET => true,
        CURLOPT_VERBOSE => true,
        CURLOPT_AUTOREFERER => true,
        CURLOPT_CUSTOMREQUEST => $requestType,
        CURLOPT_POSTFIELDS  => $postData,
        CURLOPT_HTTPHEADER  => array(
            "X-HTTP-Method-Override: " . $requestType,
            'Content-Type: application/json', // Only USE this when requesting JSON data
        ),

        // If HTTP authentication is required, use the below lines.
        // CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
        // CURLOPT_USERPWD  => $username. ':' . $password
    ));


    var_dump($mixResponse);