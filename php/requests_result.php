<?php

	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");

	 $partner = $_POST["partner"];
	 $company_name = $_POST["company_name"];
	 $user_name = $_POST["user_name"];
	 $phone_number = $_POST["phone_number"];
	 $email = $_POST["email"];
	 $mDate = date("Y-m-j"); //작성날짜
    
   $sql =" INSERT INTO company VALUES('".$partner."','".$company_name."','".$user_name."','".$phone_number."','".$email."','".$mDate."')";
   
   $ret = mysqli_query($con, $sql);
 

	 if($ret) {
		echo "<script> alert('감사합니다 확인 후 연락드리겠습니다.');</script>";
		echo "<script> location.href='../html/inputpage3.html';</script>";
   }
   else {
	   echo "전송 실패!!!";
	   echo "실패 원인 :".mysqli_error($con);
   }  

	 mysqli_close($con);

?>