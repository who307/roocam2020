<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");
	 $sql = "SELECT * FROM roocam WHERE userNumber='".$_GET['userNumber']."'";

	 $ret = mysqli_query($con, $sql); 
   if($ret) {
	   $count = mysqli_num_rows($ret);
	   if ($count==0) {
		   echo $_GET['userumber']." 아이디의 회원이 없음!!!"."<br>";
		   echo "<br> <a href='../index.html'> <--초기 화면</a> ";
		   exit();	
	   }		   
   }
   else {
	   echo "데이터 검색 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
		 echo "<br> <a href='../index.html'> <--초기 화면</a> ";
	   exit();
	 }   
   $row = mysqli_fetch_array($ret);
   $userNumber = $row["userNumber"];
   $userName = $row["userName"];
   $userAddr = $row["userAddr"];
   $mDate = $row["mDate"];      
?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=euc-kr">
</HEAD>
<BODY>
<h1> 견적서 수정 </h1>
<FORM METHOD="post"  ACTION="../php/update_result.php">
	이름 : <INPUT TYPE ="text" NAME="userName" VALUE=<?php echo $userName ?>> <br> 
	전화번호 : <INPUT TYPE ="text" NAME="userNumber" VALUE=<?php echo $userNumber ?> READONLY> <br>
	지역 : <INPUT TYPE ="text" NAME="userAddr" VALUE=<?php echo $userAddr ?>> <br>
	보낸날짜 : <INPUT TYPE ="text" NAME="mDate" VALUE=<?php echo $mDate ?> READONLY><br>
	<BR><BR>
	<INPUT TYPE="submit"  VALUE="견적서 수정">
</FORM>

</BODY>
</HTML>