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
   
	 echo "<br> <a href='tables.php'> <--돌아가기</a> ";
?>

<HTML>

<HEAD>
  <META http-equiv="content-type" content="text/html; charset=euc-kr">
  <!--favicon 적용-->
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">

  <TITLE>견적서 삭제 - 윈플</TITLE>
</HEAD>

</HTML>