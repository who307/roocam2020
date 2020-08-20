<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");

   $userID = $_POST["userID"];
   $userPW = $_POST["userPW"];
   $userName = $_POST["userName"];
   $addr = $_POST["addr"];
   $gender = $_POST["gender"];
   $email = $_POST["email"];
	 $mDate = date("Y-m-j"); //가입일
   
   $sql =" INSERT INTO roocam VALUES('".$userID."','".$userPW."','".$userName."','".$addr."','".$gender."','".$email."','".$mDate."')";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 회원가입 결과 </h1>";
   if($ret) {
	   echo "회원가입 성공.";
   }
   else {
	   echo "회원가입 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
	 mysqli_close($con);   

   echo "<br> <a href='../index.html'> <--돌아가기</a> ";

?>
