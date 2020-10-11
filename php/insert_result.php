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

?>