<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");

   $userNumber = $_POST["userNumber"];
   $userName = $_POST["userName"];
   $userAddr = $_POST["userAddr"];
	 $mDate = $_POST["mDate"]; 

  //  $sql ="UPDATE roocam SET userName='".$userName;
  //  $sql = $sql."', addr='".$addr."', gender='".$gender."',email='".$email;
	//  $sql = $sql."', mDate='".$mDate."' WHERE userID='".$userID."'";
	 
	 $sql ="UPDATE roocam SET userName='".$userName;
	 $sql = $sql."', userAddr='".$userAddr."', mDate='".$mDate."', userNumber='".$userNumber."'";


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
