<?php

$curl = curl_init("Webhook Here");

curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));

curl_setopt($curl, CURLOPT_POST, 1);

curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array("content" => " Put Yout Message Here ", "username" => "Bot Name Here")));

for ($x = 0; $x <= 30; $x++) {
  curl_exec($curl);
}

?>
