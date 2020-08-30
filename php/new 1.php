<?php
header("Content-Type: application/json; charset=utf-8");

$userid         = "" ; 
$api_key         = "" ; 
$template_id   = "" ;
$messages        = "" ; 

$headers = array("Content-Type: application/json; charset=utf-8");
		
$parameters = array(
        "userid" => $userid,
        "api_key" => $api_key,
        "template_id" => $template_id,
        "subject" => $subject,
        "messages" => $messages
		);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://jupiter.lunasoft.co.kr/api/AlimTalk/message/send");
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($parameters));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_NOSIGNAL, true);
curl_setopt($curl, CURLOPT_VERBOSE, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($curl);
print_r($response);

?>;