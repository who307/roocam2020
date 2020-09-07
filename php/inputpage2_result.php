<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");

	 $userBuilding = $_POST["userBuilding"];
	 $size_horizon = $_POST["size_horizon"];
	 $size_vertical = $_POST["size_vertical"];
	 $size_position = $_POST["size_position"];
	 $userHope = $_POST["userHope"];
   $userAddr1 = $_POST["userAddr1"];
   $userAddr2 = $_POST["userAddr2"];
   $userAddr3 = $_POST["userAddr3"];
   $userNumber = $_POST["userNumber"];
	 $mDate = date("Y-m-j"); //작성날짜
    
   $sql =" INSERT INTO UserData VALUES('".$userBuilding."','".$size_horizon."','".$size_vertical."','".$size_position."','".$userHope."','".$userAddr1."','".$userAddr2."','".$userAddr3."','".$userNumber."','".$mDate."')";
   
   $ret = mysqli_query($con, $sql);
 
   if($ret) {
		echo "<script> alert('감사합니다 확인 후 연락드리겠습니다.');</script>";
		echo "<script> location.href='../index.html';</script>";
   }
   else {
	   echo "전송 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 

	 mysqli_close($con);   

	//  header("Content-Type: application/json; charset=utf-8");

	//  $userid      = "roocam"; // 사용자 ID
	//  $api_key     = "api key" ; // API KEY
	//  $template_id = "@roocam02" ; // 플러스 친구 템플릿 ID
	//  $subject = "창호 전문업체 루캠입니다."; //제목?
	//  $msg_content = "안녕하세요.알림톡입니다 성공했습니다"; //알림톡메세지내용?
	//  $sms_content = "안녕하세요.알림톡입니다 성공했습니다"; //sms메세지내용?
	 
	 
	//  $headers = array("Content-Type: application/json; charset=utf-8");
			 
	//  $parameters = array(
	// 				 "userid" => $userid, 
	// 				 "api_key" => $api_key,
	// 				 "template_id" => $template_id,
	// 				 "subject" => $subject,
	// 				 "messages" => [
	// 					 "no" => "0", 
	// 					 "tel_num" => "$userNumber",
	// 					 "reserve_time" => "$reserve_time",
	// 					 "custom_key" => "$custom_key",
	// 					 "msg_content" => "$msg_content",
	// 					 "sms_content" => "$sms_content",
	// 					 ]
	// 		 );
	 
	//  $curl = curl_init();
	 
	//  curl_setopt($curl, CURLOPT_URL, "https://jupiter.lunasoft.co.kr/api/AlimTalk/message/send");
	//  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	//  curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($parameters));
	//  curl_setopt($curl, CURLOPT_POST, true);
	//  curl_setopt($curl, CURLOPT_NOSIGNAL, true);
	//  curl_setopt($curl, CURLOPT_VERBOSE, false);
	//  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	//  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	//  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	//  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	 
	//  $response = curl_exec($curl);
	//  print_r($response);
	
?>