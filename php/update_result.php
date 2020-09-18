<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");
	 
	 $userBuilding = $_POST["userBuilding"];
	 $size_horizon = $_POST["size_horizon"] ;
	 $size_horizon2 = $_POST["size_horizon2"]; //not sent
	 $size_horizon3 = $_POST["size_horizon3"]; //not sent
	 $size_vertical = $_POST["size_vertical"];
	 $size_vertical2 = $_POST["size_vertical2"]; //not sent
	 $size_vertical3 = $_POST["size_vertical3"]; //not sent
	 $size_position = $_POST["size_position"];
	 $size_position2 = $_POST["size_position2"]; //not sent
	 $size_position3 = $_POST["size_position3"]; //not sent
	 $userHope = $_POST["userHope"];
   $userAddr1 = $_POST["userAddr1"];
   $userAddr2 = $_POST["userAddr2"];
   $userAddr3 = $_POST["userAddr3"];
   $userNumber = $_POST["userNumber"];
	 $mDate = date("Y-m-j"); //작성날짜

	 
	//  $sql ="UPDATE UserData SET userName='".$userName;
	//  $sql = $sql."', userAddr='".$userAddr."', mDate='".$mDate."', userNumber='".$userNumber."'";
	 $sql ="UPDATE UserData SET userBuilding ='".$userBuilding."', size_horizon ='".$size_horizon."', size_horizon2='".$size_horizon2."', size_horizon3 ='".$size_horizon3."', size_vertical ='".$size_vertical."',size_vertical2 ='".$size_vertical2."',size_vertical3 ='".$size_vertical3."',size_position ='".$size_position."',size_position2 ='".$size_position2."',size_position3 ='".$size_position3."',userHope ='".$userHope."',userAddr1 ='".$userAddr1."',userAddr2 ='".$userAddr2."',userAddr3 ='".$userAddr3."',userNumber='".$userNumber."',mDate='".$mDate."'";



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
   
	 echo "<br> <a href='userData.php'> <--돌아가기</a> ";
	 ?>
