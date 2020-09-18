<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");
	 $sql = "SELECT * FROM UserData WHERE userNumber='".$_GET['userNumber']."'";

	 $ret = mysqli_query($con, $sql); 
   if($ret) {
	   $count = mysqli_num_rows($ret);
	   if ($count==0) {
		   echo $_GET['userNumber']." 아이디의 회원이 없음!!!"."<br>";
		   echo "<br> <a href='userData.php'> <--돌아가기</a> ";
		   exit();	
	   }		   
   }
   else {
	   echo "데이터 검색 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
		 echo "<br> <a href='userData.php'> <--돌아가기</a> ";
	   exit();
	 }   
   $row = mysqli_fetch_array($ret);
   $userNumber = $row["userNumber"];
   $userAddr = $row["userAddr"];
	 $userBuilding = $row["userBuilding"];
	 $size_horizon = $row["size_horizon"]; //가로사이즈
	 $size_horizon2 = $row["size_horizon2"]; //가로사이즈
	 $size_horizon3 = $row["size_horizon3"]; //가로사이즈
	 $size_vertical = $row["size_vertical"]; //세로사이즈
	 $size_vertical2 = $row["size_vertical2"]; //세로사이즈
	 $size_vertical3 = $row["size_vertical3"]; //세로사이즈
	 $size_position = $row["size_position"]; //위치
	 $size_position2 = $row["size_position2"]; //위치
	 $size_position3 = $row["size_position3"]; //위치
	 $userHope =	$row["userHope"]; //공사 희망일
	 $userAddr1 = $row["userAddr1"]; // 시/도
	 $userAddr2 =	$row["userAddr2"]; // 시/군/구
	 $userAddr3 =	$row["userAddr3"]; // 상세주소
	 $mDate = $row["mDate"];       
?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=euc-kr">
</HEAD>
<BODY>
<h1> 견적서 수정 </h1>
<FORM METHOD="post"  ACTION="../php/update_result.php">
	연락처 : <INPUT TYPE ="text" NAME="userNumber" VALUE=<?php echo $userNumber ?> READONLY>※수정NO <br>
	건물유형: <select NAME ="userBuilding" VALUE=<?php echo $userBuilding ?>> <br>
						<option value="주택">주택
						<option value="빌라">빌라
						<option value="아파트">아파트
					</select><br>
	가로사이즈[1](cm): <INPUT TYPE ="text" NAME="size_horizon" VALUE=<?php echo $size_horizon ?> ><br>
	가로사이즈[2](cm): <INPUT TYPE ="text" NAME="size_horizon2" VALUE=<?php echo $size_horizon2 ?> ><br>
	가로사이즈[3](cm): <INPUT TYPE ="text" NAME="size_horizon3" VALUE=<?php echo $size_horizon3 ?> ><br>
	세로사이즈[1](cm): <INPUT TYPE ="text" NAME="size_vertical" VALUE=<?php echo $size_vertical ?> ><br>
	세로사이즈[2](cm): <INPUT TYPE ="text" NAME="size_vertical2" VALUE=<?php echo $size_vertical2 ?> ><br>
	세로사이즈[3](cm): <INPUT TYPE ="text" NAME="size_vertical3" VALUE=<?php echo $size_vertical3 ?> ><br>
	위치[1]: <select NAME ="size_position" VALUE=<?php echo $size_position ?>>
						<option value="베란다">베란다
						<option value="거실">거실
						<option value="방">방
						<option value="화장실">화장실
						<option value="기타">기타
					</select><br>
	위치[2]: <select NAME ="size_position2" VALUE=<?php echo $size_position2 ?>> 
						<option value="베란다">베란다
						<option value="거실">거실
						<option value="방">방
						<option value="화장실">화장실
						<option value="기타">기타
					</select><br>
	위치[3]: <select NAME ="size_position3" VALUE=<?php echo $size_position3 ?>> 
						<option value="베란다">베란다
						<option value="거실">거실
						<option value="방">방
						<option value="화장실">화장실
						<option value="기타">기타
					</select><br>
	공사 희망일: <select NAME ="userHope" VALUE=<?php echo $userHope ?>> <br>
						<option value="1~2개월">1~2개월
						<option value="3개월 이후">3개월 이후
						<option value="상담 후 결정">상담 후 결정
					</select> <br>
	우편번호: <INPUT TYPE ="text" NAME="userAddr1" VALUE=<?php echo $userAddr1 ?> ><br>
	주    소: <INPUT TYPE ="text" NAME="userAddr2" VALUE=<?php echo $userAddr2 ?> ><br>
	상세주소: <INPUT TYPE ="text" NAME="userAddr3" VALUE=<?php echo $userAddr3 ?> ><br>
	견적서 작성날짜: <INPUT TYPE ="text" NAME="mDate" VALUE=<?php echo $mDate ?> READONLY>※수정NO<br>
	<BR><BR>
	<INPUT TYPE="submit"  VALUE="견적서 수정">
</FORM>

</BODY>
</HTML>