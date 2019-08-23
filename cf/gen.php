<?php

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, "https://backend.northghost.com/user/remainingTraffic");
// curl_setopt($ch, CURLOPT_GET, 1);
// curl_setopt($ch, CURLOPT_TIMEOUT, 100);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_GETFIELDS, http_build_query($_GET));

// $data = curl_exec($ch);

$output = file_get_contents('https://backend.northghost.com/user/remainingTraffic?access_token='.$_GET['access_token']);
echo $output;

// $params = array ('access_token' => $_GET['access_token']);

// // Build Http query using params
// $query = http_build_query ($params);

// // Create Http context details
// $contextData = array (
//             'method' => 'GET',
//             'header' => "Connection: close\r\n".
//                         "Content-Length: ".strlen($query)."\r\n",
//             'content'=> $query );

// // Create context resource for our request
// $context = stream_context_create (array ( 'https' => $contextData ));

// // Read page rendered as result of your POST request
// $result =  file_get_contents (
//               'https://backend.northghost.com/user/remainingTraffic',  // page url
//               false,
//               $context);

// $json = json_decode($data, TRUE);

echo $result;

// curl_close($ch);

?>