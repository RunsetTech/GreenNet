<?php


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://backend.northghost.com/user/login");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 100);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($_POST));

$data = curl_exec($ch);

$json = json_decode($data, TRUE);

// if(is_array($json)) {
//     echo "yes";
// } else {
//     echo "no";
// }

header( 'Content-Type: application/json; charset=utf-8' );
    echo $val= json_encode($json);
    
curl_close($ch);




?>