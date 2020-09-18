<?php

	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");
	 
	 $userBuilding = $_POST["userBuilding"];
	 $size_horizon = $_POST["size_horizon"] ;
	 $size_horizon2 = $_POST["size_horizon2"]; //not sent
	 $size_horizon3 = $_POST["size_horizon3"]; //not sent
	 $size_vertical = $_POST["size_vertical"];
	 $size_vertical2 = $_POST["size_vertical2"]; //not sent
	 $size_vertical3 = $_POST["size_vertical3"]; //not sent
	 $size_position = $_POST["size_position"];
	 $size_position2 = $_POST["size_position2"]; //not sent
	 $size_position3 = $_POST["size_position3"]; //not sent
	 $userHope = $_POST["userHope"];
   $userAddr1 = $_POST["userAddr1"];
   $userAddr2 = $_POST["userAddr2"];
   $userAddr3 = $_POST["userAddr3"];
   $userNumber = $_POST["userNumber"];
	 $mDate = date("Y-m-j"); //작성날짜
    
   $sql =" INSERT INTO UserData VALUES('".$userBuilding."','".$size_horizon."','".$size_horizon2."','".$size_horizon3."','".$size_vertical."','".$size_vertical2."','".$size_vertical3."','".$size_position."','".$size_position2."','".$size_position3."','".$userHope."','".$userAddr1."','".$userAddr2."','".$userAddr3."','".$userNumber."','".$mDate."')";
   
	 $ret = mysqli_query($con, $sql);


	

	//  header("Content-type: application/json");
	 
	 $userid = "roocam"; 
	 $api_key = "uukte5x8y739t6pq1uc3pvwjedsu4mlvsoalle4p"; 
	 $template_id = "50042"; 
	 $phone = "01073258890";
	 $headers = array("Content-Type: application/json; charset=utf-8");
	 $phonenumber = $userNumber;
	 $msg = "[$mDate] 견적이 도착하였습니다!

건물유형 : [$userBuilding]
	 
창호 사이즈: 가로[$size_horizon(cm)] 세로[$size_vertical(cm)] 위치[$size_position]
	 
공사희망일 : [$userHope]
	 
주소 : [   ($userAddr1) $userAddr2 $userAddr3]
	 
연락처 : [$phonenumber]";
			 
			 // $parameters = array(
                    // "userid" => $userid, 
                    // "api_key" => $api_key,
                    // "template_id" => $template_id,
                    // "messages" =>[
										// "[$mDate]" => $mDate,
										// "[건물유형]"=> $userBuilding,
										// "[$width]" =>  $size_horizon,
										// "[$height]" => $size_vertical,
										// "[$location]" =>  $size_position,
										// "[공사희망일]" => $userHope,
										// "[주소]" => $userAddr1,
										// "[$phonenumber]"=> $userNumber,
										// "no" => "0",
										// "tel_num" => $phone,
										// "msg_content" => $msg,
										// "sms_content" => $msg,
										// "use_sms" => "0"
                    // ],
             // );
			 
			//  [ $mDate ] 견적이 도착하였습니다!
			// 			건물유형 : [ $userBuilding ]
			// 			창호 사이즈(1) : 가로[ $size_horizon ] 세로[ $size_vertical ] 위치[ $size_vertical ]
			// 			창호 사이즈(2) : 가로[ $size_horizon2 ] 세로[ $size_vertical2 ] 위치[ $size_vertical2 ]
			// 			 창호 사이즈(3) : 가로[ $size_horizon3 ] 세로[ $size_vertical3 ] 위치[ $size_vertical3 ]
			// 			 공사희망일 : [ $userHope ]
			// 			주소[시/도] : [ $userAddr1 ]
			// 			주소[시/군/구] : [ $userAddr2 ]
			// 			 주소[상세주소] : [ $userAddr3 ]
			// 			연락처 : [ $userNumber ]
			 
	 
	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://jupiter.lunasoft.co.kr/api/AlimTalk/message/send",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS =>"{\n    
	  \"userid\": \"" . $userid . "\",\n    
	  \"api_key\": \"" . $api_key . "\",\n  
	  \"template_id\": \"" . $template_id . "\",\n    
	  \"messages\": [\n        {\n            
	  \"no\": \"0\",\n            
	  \"tel_num\": \"" . $phone . "\",\n            
	  \"msg_content\": \"" . $msg . "\",\n            
	  \"sms_content\": \"" . $msg . "\",\n            
	  \"use_sms\": \"0\"\n        }\n    ]\n}",
	  CURLOPT_HTTPHEADER => array(
		"Content-type: application/json"
	  ),
	));
	$response = curl_exec($curl);


	$respCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);


	echo "<br> Code: ".$respCode;
	$resp = curl_getinfo($curl);
	// die("<pre>".var_export($resp, true)."<pre>");

	echo $response;

	curl_close($curl);

	mysqli_close($con);

	 if($respCode === 200) {
		echo "<script> alert('감사합니다 확인 후 연락드리겠습니다.');</script>";
		echo "<script> location.href='../html/inputpage3.html';</script>";
		require ""; // put here the page you want to go to it. ex: "pagename.php"
   }
   else {
	   echo "전송 실패!!! Response code is not 200";
	   echo "실패 원인 :".mysqli_error($con);
   }  
?>