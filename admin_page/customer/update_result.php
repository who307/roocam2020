<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");
	 
	 $userBuilding = $_POST["userBuilding"];
	 $userHope = $_POST["userHope"];
   $userAddr1 = $_POST["userAddr1"];
   $userAddr2 = $_POST["userAddr2"];
   $userAddr3 = $_POST["userAddr3"];
   $userNumber = $_POST["userNumber"];
	 $mDate = $_POST["mDate"]; 
	 $size_horizon = $_POST["size_horizon"] ;
	 $size_vertical = $_POST["size_vertical"];
	 $size_position = $_POST["size_position"];
	 $size_horizon2 = $_POST["size_horizon2"] ;
	 $size_vertical2 = $_POST["size_vertical2"];
	 $size_position2 = $_POST["size_position2"];
	 $size_horizon3 = $_POST["size_horizon3"] ;
	 $size_vertical3 = $_POST["size_vertical3"];
	 $size_position3 = $_POST["size_position3"];
	 $size_horizon4 = $_POST["size_horizon4"] ;
	 $size_vertical4 = $_POST["size_vertical4"];
	 $size_position4 = $_POST["size_position4"];
	 $size_horizon5 = $_POST["size_horizon5"] ;
	 $size_vertical5 = $_POST["size_vertical5"];
	 $size_position5 = $_POST["size_position5"];
	 $size_horizon6 = $_POST["size_horizon6"] ;
	 $size_vertical6 = $_POST["size_vertical6"];
	 $size_position6 = $_POST["size_position6"];
	 $size_horizon7 = $_POST["size_horizon7"] ;
	 $size_vertical7 = $_POST["size_vertical7"];
	 $size_position7 = $_POST["size_position7"];
	 $size_horizon8 = $_POST["size_horizon8"] ;
	 $size_vertical8 = $_POST["size_vertical8"];
	 $size_position8 = $_POST["size_position8"];
	 $size_horizon9 = $_POST["size_horizon9"] ;
	 $size_vertical9 = $_POST["size_vertical9"];
	 $size_position9 = $_POST["size_position9"];
	 $size_horizon10 = $_POST["size_horizon10"] ;
	 $size_vertical10 = $_POST["size_vertical10"];
	 $size_position10 = $_POST["size_position10"];
	 $size_horizon11 = $_POST["size_horizon11"] ;
	 $size_vertical11 = $_POST["size_vertical11"];
	 $size_position11 = $_POST["size_position11"];
	 $size_horizon12 = $_POST["size_horizon12"] ;
	 $size_vertical12 = $_POST["size_vertical12"];
	 $size_position12 = $_POST["size_position12"];
	 $size_horizon13 = $_POST["size_horizon13"] ;
	 $size_vertical13 = $_POST["size_vertical13"];
	 $size_position13 = $_POST["size_position13"];
	 $size_horizon14 = $_POST["size_horizon14"] ;
	 $size_vertical14 = $_POST["size_vertical14"];
	 $size_position14 = $_POST["size_position14"];
	 $size_horizon15 = $_POST["size_horizon15"] ;
	 $size_vertical15 = $_POST["size_vertical15"];
	 $size_position15 = $_POST["size_position15"];
	 
	 
	//  $sql ="UPDATE UserData SET userName='".$userName;
	//  $sql = $sql."', userAddr='".$userAddr."', mDate='".$mDate."', userNumber='".$userNumber."'";
	 $sql = "UPDATE UserData SET userBuilding ='".$userBuilding."', size_horizon ='".$size_horizon."', size_horizon2='".$size_horizon2."', size_horizon3 ='".$size_horizon3."', size_vertical ='".$size_vertical."',size_vertical2 ='".$size_vertical2."',size_vertical3 ='".$size_vertical3."',size_position ='".$size_position."',size_position2 ='".$size_position2."',size_position3 ='".$size_position3."', size_horizon4 ='".$size_horizon4."', size_horizon5='".$size_horizon5."', size_horizon6 ='".$size_horizon6."', size_vertical4 ='".$size_vertical4."',size_vertical5 ='".$size_vertical5."',size_vertical6 ='".$size_vertical6."',size_position4 ='".$size_position4."',size_position5 ='".$size_position5."',size_position6 ='".$size_position6."', size_horizon7 ='".$size_horizon7."', size_horizon8='".$size_horizon8."', size_horizon9 ='".$size_horizon9."', size_vertical7 ='".$size_vertical7."',size_vertical8 ='".$size_vertical8."',size_vertical9 ='".$size_vertical9."',size_position7 ='".$size_position7."',size_position8 ='".$size_position8."',size_position9 ='".$size_position9."', size_horizon10 ='".$size_horizon10."', size_horizon11='".$size_horizon11."', size_horizon12 ='".$size_horizon12."', size_vertical10 ='".$size_vertical10."',size_vertical11 ='".$size_vertical11."',size_vertical12 ='".$size_vertical12."',size_position10 ='".$size_position10."',size_position11 ='".$size_position11."',size_position12 ='".$size_position12."', size_horizon13 ='".$size_horizon13."', size_horizon14='".$size_horizon14."', size_horizon15 ='".$size_horizon15."', size_vertical13 ='".$size_vertical13."',size_vertical14 ='".$size_vertical14."',size_vertical15 ='".$size_vertical15."',size_position13 ='".$size_position13."',size_position14 ='".$size_position14."',size_position15 ='".$size_position15."',userHope ='".$userHope."',userAddr1 ='".$userAddr1."',userAddr2 ='".$userAddr2."',userAddr3 ='".$userAddr3;
	 $sql = $sql."',mDate='".$mDate."' WHERE userNumber='".$userNumber."'";



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
   
	 echo "<br> <a href='../customer/tables.php'> <--돌아가기</a> ";
	 ?>
<HTML>

<HEAD>
	<META http-equiv="content-type" content="text/html; charset=euc-kr">
	<!--favicon 적용-->
	<link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
	<TITLE>견적서 수정 - 윈플</TITLE>
</HEAD>

</HTML>