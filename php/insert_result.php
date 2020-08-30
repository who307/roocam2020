<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");

   $userName = $_POST["userName"];
   $userNumber = $_POST["userNumber"];
   $userAddr = $_POST["userAddr"];
	 $mDate = date("Y-m-j"); //가입일
   
   $sql =" INSERT INTO roocam VALUES('".$userName."','".$userNumber."','".$userAddr."','".$mDate."')";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 견적서(이름,번호,지역)  </h1>";
   if($ret) {
	   echo "전송 성공.";
   }
   else {
	   echo "전송 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
	 mysqli_close($con);   

	 echo "<br> <a href='../index.html'> <--돌아가기</a> ";
	
	 header("Content-Type: application/json; charset=utf-8");

$userid      = "roocam"; // 사용자 ID
$api_key     = "api key" ; // API KEY
$template_id = "@roocam02" ; // 플러스 친구 템플릿 ID
$subject = "알림톡제목입니다"; //제목?
$msg_content = "안녕하세요.알림톡입니다 성공했습니다"; //알림톡메세지내용?
$sms_content = "안녕하세요.알림톡입니다 성공했습니다"; //sms메세지내용?


// $use_sms = boolean(); ???성공여부??? boolean값으로 어떻게 써야하나?..
// $messages = array(
// 	"no" => "0", // 메세지번호 ?? 뭔소리인지모르겠습니다.
// 	"tel_num" => $userNumber, // 받는 이 번호
// 	"msg_content" => $msg_content, // 받는 이 번호
// );

$headers = array("Content-Type: application/json; charset=utf-8");
		
$parameters = array(
        "userid" => $userid, 
        "api_key" => $api_key,
        "template_id" => $template_id,
        "subject" => $subject,
        "messages" => [
					"no" => "0", //메세지번호 ??
					"tel_num" => "$userNumber", //받는 이 번호 
					"reserve_time" => "$reserve_time", // 예약시간
					"custom_key" => "$custom_key",
					"msg_content" => "$msg_content",
					"sms_content" => "$sms_content",
					]
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

?>