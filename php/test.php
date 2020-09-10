<?php

	 header("Content-type: application/json");
	 
	 $userid = "roocam"; 
	 $api_key = "uukte5x8y739t6pq1uc3pvwjedsu4mlvsoalle4p"; 
	 $template_id = "50043"; 
	 $phone = "01073258890";
	 $msg = "견적 3개가 입찰되었습니다!

	 업체: [업체명1]
	 가격: [가격1]
	 
	 업체: [업체명2]
	 가격: [가격2]
	 
	 업체: [업체명3]
	 가격: [가격3]
	 
	 시공을 원하시면 아래 번호로 연락주세요!
	 대표번호 : [전화번호]";
	
	 $headers = array("Content-Type: application/json; charset=utf-8");

			 
	 $parameters = array(
					"userid" => $userid, 
					"api_key" => $api_key,
					"template_id" => $template_id,
					"messages" =>[
					{
						"no" => "0",
						"tel_num" => $phone,
						"msg_content" => $msg,
						"sms_content" => $msg,
						"use_sms" => "0",
					}
				],
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

	 if($ret) {
		echo "<script> alert('감사합니다 확인 후 연락드리겠습니다.');</script>";
		echo "<script> location.href='../index.html';</script>";
   }
   else {
	   echo "전송 실패!!!";
	   echo "실패 원인 :".mysqli_error($con);
   }  

	 mysqli_close($con);

?>