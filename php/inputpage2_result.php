<?php

	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");
	 
	 $userBuilding = $_POST["userBuilding"];

	 $size_horizon = $_POST["size_horizon"] ;
	 $size_horizon2 = $_POST["size_horizon2"]; 
	 $size_horizon3 = $_POST["size_horizon3"]; 
	 $size_horizon4 = $_POST["size_horizon4"] ;
	 $size_horizon5 = $_POST["size_horizon5"]; 
	 $size_horizon6 = $_POST["size_horizon6"]; 
	 $size_horizon7 = $_POST["size_horizon7"] ;
	 $size_horizon8 = $_POST["size_horizon8"]; 
	 $size_horizon9 = $_POST["size_horizon9"]; 
	 $size_horizon10 = $_POST["size_horizon10"] ;
	 $size_horizon11 = $_POST["size_horizon11"]; 
	 $size_horizon12 = $_POST["size_horizon12"]; 
	 $size_horizon13 = $_POST["size_horizon13"] ;
	 $size_horizon14 = $_POST["size_horizon14"]; 
	 $size_horizon15 = $_POST["size_horizon15"]; 
	 $size_vertical = $_POST["size_vertical"];
	 $size_vertical2 = $_POST["size_vertical2"]; 
	 $size_vertical3 = $_POST["size_vertical3"]; 
	 $size_vertical4 = $_POST["size_vertical4"];
	 $size_vertical5 = $_POST["size_vertical5"]; 
	 $size_vertical6 = $_POST["size_vertical6"]; 
	 $size_vertical7 = $_POST["size_vertical7"];
	 $size_vertical8 = $_POST["size_vertical8"]; 
	 $size_vertical9 = $_POST["size_vertical9"]; 
	 $size_vertical10 = $_POST["size_vertical10"];
	 $size_vertical11 = $_POST["size_vertical11"]; 
	 $size_vertical12 = $_POST["size_vertical12"]; 
	 $size_vertical13 = $_POST["size_vertical13"];
	 $size_vertical14 = $_POST["size_vertical14"]; 
	 $size_vertical15 = $_POST["size_vertical15"]; 
	 $size_position = $_POST["size_position"];
	 $size_position2 = $_POST["size_position2"]; 
	 $size_position3 = $_POST["size_position3"]; 
	 $size_position4 = $_POST["size_position4"];
	 $size_position5 = $_POST["size_position5"]; 
	 $size_position6 = $_POST["size_position6"]; 
	 $size_position7 = $_POST["size_position7"];
	 $size_position8 = $_POST["size_position8"]; 
	 $size_position9 = $_POST["size_position9"]; 
	 $size_position10 = $_POST["size_position10"];
	 $size_position11 = $_POST["size_position11"]; 
	 $size_position12 = $_POST["size_position12"]; 
	 $size_position13 = $_POST["size_position13"];
	 $size_position14 = $_POST["size_position14"];
	 $size_position15 = $_POST["size_position15"]; 
	 $userHope = $_POST["userHope"];
   $userAddr1 = $_POST["userAddr1"];
   $userAddr2 = $_POST["userAddr2"];
   $userAddr3 = $_POST["userAddr3"];
   $userNumber = $_POST["userNumber"];
	 $mDate = date("Y-m-j"); //작성날짜
    
   $sql =" INSERT INTO UserData VALUES('".$userBuilding."','".$size_horizon."','".$size_horizon2."','".$size_horizon3."','".$size_horizon4."','".$size_horizon5."','".$size_horizon6."','".$size_horizon7."','".$size_horizon8."','".$size_horizon9."','".$size_horizon10."','".$size_horizon11."','".$size_horizon12."','".$size_horizon13."','".$size_horizon14."','".$size_horizon15."','".$size_vertical."','".$size_vertical2."','".$size_vertical3."','".$size_vertical4."','".$size_vertical5."','".$size_vertical6."','".$size_vertical7."','".$size_vertical8."','".$size_vertical9."','".$size_vertical10."','".$size_vertical11."','".$size_vertical12."','".$size_vertical13."','".$size_vertical14."','".$size_vertical15."','".$size_position."','".$size_position2."','".$size_position3."','".$size_position4."','".$size_position5."','".$size_position6."','".$size_position7."','".$size_position8."','".$size_position9."','".$size_position10."','".$size_position11."','".$size_position12."','".$size_position13."','".$size_position14."','".$size_position15."','".$userHope."','".$userAddr1."','".$userAddr2."','".$userAddr3."','".$userNumber."','".$mDate."')";
   
	 $ret = mysqli_query($con, $sql);


	

	//  header("Content-type: application/json");
	 
	 $userid = "roocam"; 
	 $api_key = "uukte5x8y739t6pq1uc3pvwjedsu4mlvsoalle4p"; 
	 $template_id = "50042"; 
	 $phone = "01049209932";
  //  $phone = "01073258890";
	 $headers = array("Content-Type: application/json; charset=utf-8");
	 $phonenumber = $userNumber;
	 $msg = "[$mDate] 견적이 도착하였습니다!
건물유형 : [$userBuilding]
	 
창호 사이즈: 가로[ $size_horizon cm ] 세로[ $size_vertical cm ] 위치[ $size_position ]
[1]
가로(cm) [$size_horizon] 
세로(cm) [$size_vertical] 
위치 [$size_position]
[2]
가로(cm) [$size_horizon2] 
세로(cm) [$size_vertical2] 
위치 [$size_position2]
[3]
가로(cm) [$size_horizon3] 
세로(cm) [$size_vertical3] 
위치 [$size_position3]
[4]
가로(cm) [$size_horizon4] 
세로(cm) [$size_vertical4] 
위치 [$size_position4]
[5]
가로(cm) [$size_horizon5] 
세로(cm) [$size_vertical5] 
위치 [$size_position5]
[6]
가로(cm) [$size_horizon6] 
세로(cm) [$size_vertical6] 
위치 [$size_position6]
[7]
가로(cm) [$size_horizon7] 
세로(cm) [$size_vertical7] 
위치 [$size_position7]
[8]
가로(cm) [$size_horizon8] 
세로(cm) [$size_vertical8] 
위치 [$size_position8]
[9]
가로(cm) [$size_horizon9] 
세로(cm) [$size_vertical9] 
위치 [$size_position9]
[10]
가로(cm) [$size_horizon10] 
세로(cm) [$size_vertical10] 
위치 [$size_position10]
[11]
가로(cm) [$size_horizon11] 
세로(cm) [$size_vertical11] 
위치 [$size_position11]
[12]
가로(cm) [$size_horizon12] 
세로(cm) [$size_vertical12] 
위치 [$size_position12]
[13]
가로(cm) [$size_horizon13] 
세로(cm) [$size_vertical13] 
위치 [$size_position13]
[14]
가로(cm) [$size_horizon14] 
세로(cm) [$size_vertical14] 
위치 [$size_position14]
[15]
가로(cm) [$size_horizon15] 
세로(cm) [$size_vertical15] 
위치 [$size_position15]
	 
공사희망일 : [ $userHope ]
	 
주소 : [ ($userAddr1) $userAddr2 $userAddr3]
	 
연락처 : [$phonenumber]";
			 

	 
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


	// echo "<br> Code: ".$respCode;
	$resp = curl_getinfo($curl);
	// die("<pre>".var_export($resp, true)."<pre>");

	echo $response;

	curl_close($curl);

	mysqli_close($con);

	 if($respCode === 200) {
		echo "<script> alert('감사합니다 확인 후 연락드리겠습니다.');</script>";
		echo "<script> location.href='../html/inputpage3.html';</script>";
		 // put here the page you want to go to it. ex: "pagename.php"
   }
   else {
	   echo "전송 실패!!! Response code is not 200";
	   echo "실패 원인 :".mysqli_error($con);
   }  
?>