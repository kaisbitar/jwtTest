<?php

require __DIR__ . '/vendor/autoload.php';


use \Firebase\JWT\JWT;


$received_email = 'partner@emssail.com';


$key = "asdfasdasdassssdsss";

$token = array(
    "email" => $received_email
);

  
$jwt = JWT::encode($token, $key); 




$ch = curl_init('http://local.jwttest/index.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/html', 'Authorization: Bearer ' . $jwt));
$data = curl_exec($ch);

//$info = curl_getinfo($ch);

echo($data);
curl_close($ch);



?>