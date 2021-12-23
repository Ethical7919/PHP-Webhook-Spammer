<?php

$curl = curl_init("https://discord.com/api/webhooks/923246074225918012/6fqx2hS1eYE3aSZbLwTYYmiqeSNof5-myYCrxNJh5DSu1CPv_oDEi_ZfX2puA0VtQQJ9");

curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));

curl_setopt($curl, CURLOPT_POST, 1);

curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array("content" => "Messaged", "username" => "Ryanz")));

for ($x = 0; $x <= 30; $x++) {
  curl_exec($curl);
}

?>