<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");
	 $sql = "SELECT * FROM roocam WHERE userID='".$_GET['userID']."'";

	 $ret = mysqli_query($con, $sql); 
   if($ret) {
	   $count = mysqli_num_rows($ret);
	   if ($count==0) {
		   echo $_GET['userID']." 아이디의 회원이 없음!!!"."<br>";
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
   $userID = $row["userID"];
   $userPW = $row["userPW"];
   $userName = $row["userName"];
   $addr = $row["addr"];
   $gender = $row["gender"];
   $email = $row["email"];
   $mDate = $row["mDate"];      
?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=euc-kr">
</HEAD>
<BODY>

<h1> 회원 정보 수정 </h1>
<FORM METHOD="post"  ACTION="../php/update_result.php">
	아이디 : <INPUT TYPE ="text" NAME="userID" VALUE=<?php echo $userID ?> READONLY> <br>
	이름 : <INPUT TYPE ="text" NAME="userName" VALUE=<?php echo $userName ?>> <br> 
	비밀번호 : <INPUT TYPE ="text" NAME="userPW" VALUE=<?php echo $userPW ?>> <br>
	지역 : <INPUT TYPE ="text" NAME="addr" VALUE=<?php echo $addr ?>> <br>
	성별 : <INPUT TYPE ="text" NAME="gender" VALUE=<?php echo $gender ?>> <br>
	이메일 : <INPUT TYPE ="text" NAME="email" VALUE=<?php echo $email ?>> <br>
	회원가입일 : <INPUT TYPE ="text" NAME="mDate" VALUE=<?php echo $mDate ?> READONLY><br>
	<BR><BR>
	<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>

</BODY>
</HTML>