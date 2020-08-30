<?php
  $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");
	$sql = "SELECT * FROM roocam WHERE userNumber='".$_GET['userNumber']."'";

	$ret = mysqli_query($con, $sql); 
	if($ret) {
		$count = mysqli_num_rows($ret);
		if ($count==0) {
			echo $_GET['userNumber']." 전화번호의 견적 내용이 없음!!"."<br>";
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
   $userNumber = $row['userNumber'];
   $userName = $row["userName"];
   
?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=euc-kr">
</HEAD>
<BODY>

<h1> 회원삭제 </h1>
<FORM METHOD="post"  ACTION="delete_result.php">
	전화번호 : <INPUT TYPE ="text" NAME="userNumber" VALUE=<?php echo $userNumber ?> READONLY> <br>
	이름 : <INPUT TYPE ="text" NAME="userName" VALUE=<?php echo $userName ?> READONLY> <br> 
	<BR><BR>
	정말 삭제하시겠습니까?	
	<INPUT TYPE="submit"  VALUE="삭제하기">
</FORM>

</BODY>
</HTML>