<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");
   
   $userNumber = $_POST["userNumber"];
     
   $sql ="DELETE FROM UserData WHERE userNumber='".$userNumber."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 회원삭제 </h1>";
   if($ret) {
	   echo $userNumber." 성공적으로 삭제가 되었습니다.";
   }
   else {
	   echo "삭제 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
	 echo "<br> <a href='./tables.php'> <--돌아가기</a> ";
?>
