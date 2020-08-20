<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");

   $userID = $_POST["userID"];
   $userPW = $_POST["userPW"];
   $userName = $_POST["userName"];
   $addr = $_POST["addr"];
   $gender = $_POST["gender"];
   $email = $_POST["email"];
	 $mDate = $_POST["mDate"]; 

   $sql ="UPDATE roocam SET userName='".$userName;
   $sql = $sql."', addr='".$addr."', gender='".$gender."',email='".$email;
   $sql = $sql."', mDate='".$mDate."' WHERE userID='".$userID."'";

   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 정보수정 </h1>";
   if($ret) {
	   echo "성공적으로 수정되었습니다..";
   }
   else {
	   echo "수정실패!!!"."<br>";
	   echo "실패원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
	 echo "<br> <a href='../index.html'> <--돌아가기</a> ";
	 ?>
