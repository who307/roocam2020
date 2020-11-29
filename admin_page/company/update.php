<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");
	 $sql = "SELECT * FROM UserData WHERE userNumber='".$_GET['userNumber']."'";

	 $ret = mysqli_query($con, $sql); 
   if($ret) {
	   $count = mysqli_num_rows($ret);
	   if ($count==0) {
		   echo $_GET['userNumber']." 아이디의 회원이 없음!!!"."<br>";
		   echo "<br> <a href='tables.php'> <--돌아가기</a> ";
		   exit();	
	   }		   
   }
   else {
	   echo "데이터 검색 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
		 echo "<br> <a href='tables.php'> <--돌아가기</a> ";
	   exit();
	 }   
   $row = mysqli_fetch_array($ret);
   $userNumber = $row["userNumber"];
   $userBuilding = $row["userBuilding"];
   $userHope =	$row["userHope"]; //공사 희망일
	 $userAddr1 = $row["userAddr1"]; // 시/도
	 $userAddr2 =	$row["userAddr2"]; // 시/군/구
	 $userAddr3 =	$row["userAddr3"]; // 상세주소
	 $mDate = $row["mDate"];  
	 $size_horizon = $row["size_horizon"]; //가로사이즈
	 $size_vertical = $row["size_vertical"]; //세로사이즈
   $size_position = $row["size_position"]; //위치
   $size_horizon2 = $row["size_horizon2"];
	 $size_vertical2 = $row["size_vertical2"];
   $size_position2 = $row["size_position2"];
   $size_horizon3 = $row["size_horizon3"];
	 $size_vertical3 = $row["size_vertical3"];
   $size_position3 = $row["size_position3"];
   $size_horizon4 = $row["size_horizon4"];
	 $size_vertical4 = $row["size_vertical4"];
   $size_position4 = $row["size_position4"];
   $size_horizon5 = $row["size_horizon5"];
	 $size_vertical5 = $row["size_vertical5"];
   $size_position5 = $row["size_position5"];
   $size_horizon6 = $row["size_horizon6"];
	 $size_vertical6 = $row["size_vertical6"];
   $size_position6 = $row["size_position6"];
   $size_horizon7 = $row["size_horizon7"];
	 $size_vertical7 = $row["size_vertical7"];
   $size_position7 = $row["size_position7"];
   $size_horizon8 = $row["size_horizon8"];
	 $size_vertical8 = $row["size_vertical8"];
   $size_position8 = $row["size_position8"];
   $size_horizon9 = $row["size_horizon9"];
	 $size_vertical9 = $row["size_vertical9"];
   $size_position9 = $row["size_position9"];
   $size_horizon10 = $row["size_horizon10"];
	 $size_vertical10 = $row["size_vertical10"];
   $size_position10 = $row["size_position10"];
   $size_horizon11 = $row["size_horizon11"];
	 $size_vertical11 = $row["size_vertical11"];
   $size_position11 = $row["size_position11"];
   $size_horizon12 = $row["size_horizon12"];
	 $size_vertical12 = $row["size_vertical12"];
   $size_position12 = $row["size_position12"];
   $size_horizon13 = $row["size_horizon13"];
	 $size_vertical13 = $row["size_vertical13"];
   $size_position13 = $row["size_position13"];
   $size_horizon14 = $row["size_horizon14"];
	 $size_vertical14 = $row["size_vertical14"];
   $size_position14 = $row["size_position14"];
   $size_horizon15 = $row["size_horizon15"];
	 $size_vertical15 = $row["size_vertical15"];
   $size_position15 = $row["size_position15"];
     
?>

<HTML>

<HEAD>
	<META http-equiv="content-type" content="text/html; charset=euc-kr">
	<!--favicon 적용-->
	<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
  	<link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
  	<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">

	<TITLE>견적서 수정 - 윈플</TITLE>
	<STYLE>
		.box {
			width: 400px;
			overflow-y: scroll;
			height: 300px;
		}
	</STYLE>
</HEAD>

<BODY>
	<h1> 견적서 수정 </h1>
	<FORM METHOD="post" ACTION="../production/update_result.php">
		연락처 : <INPUT TYPE="text" NAME="userNumber" VALUE=<?php echo $userNumber ?> READONLY>※수정NO <br>
		공사 희망일: <select id="userHope" NAME="userHope"><br>
			<option value="1~2개월">1~2개월
			<option value="3개월 이후">3개월 이후
			<option value="상담 후 결정">상담 후 결정
		</select>
		<script> document.getElementById("userHope").value = "<?=$userHope?>"; </script> <br>
		우편번호: <INPUT TYPE="text" NAME="userAddr1" VALUE=<?php echo $userAddr1 ?>><br>
		주 소: <INPUT TYPE="text" NAME="userAddr2" VALUE=<?php echo $userAddr2 ?>><br>
		상세주소: <INPUT TYPE="text" NAME="userAddr3" VALUE=<?php echo $userAddr3 ?>><br>
		견적서 작성날짜: <INPUT TYPE="text" NAME="mDate" VALUE=<?php echo $mDate ?> READONLY>※수정NO<br>
		건물유형: <select id="userBuilding" NAME="userBuilding"> <br>
			<option value="주택">주택
			<option value="빌라">빌라
			<option value="아파트">아파트
		</select>
		<script> document.getElementById("userBuilding").value = "<?=$userBuilding?>"; </script> <br>
		<div class="box">
			가로사이즈[1](cm): <INPUT TYPE="text" NAME="size_horizon" VALUE=<?php echo $size_horizon ?>><br>
			세로사이즈[1](cm): <INPUT TYPE="text" NAME="size_vertical" VALUE=<?php echo $size_vertical ?>><br>
			위치[1]: <select id="size_position" NAME="size_position"> <br>
				<option value="베란다">베란다
				<option value="거실">거실
				<option value="방">방
				<option value="화장실">화장실
				<option value="기타">기타
			</select>
			<script> document.getElementById("size_position").value = "<?=$size_position?>"; </script> <br>
			가로사이즈[2](cm): <INPUT TYPE="text" NAME="size_horizon2" VALUE=<?php echo $size_horizon2 ?>><br>
			세로사이즈[2](cm): <INPUT TYPE="text" NAME="size_vertical2" VALUE=<?php echo $size_vertical2 ?>><br>
			위치[2]: <select id="size_position2" NAME="size_position2">
				<option value="베란다">베란다
				<option value="거실">거실
				<option value="방">방
				<option value="화장실">화장실
				<option value="기타">기타
			</select>
			<script> document.getElementById("size_position2").value = "<?=$size_position2?>"; </script> <br>

			가로사이즈[3](cm): <INPUT TYPE="text" NAME="size_horizon3" VALUE=<?php echo $size_horizon3 ?>><br>
			세로사이즈[3](cm): <INPUT TYPE="text" NAME="size_vertical3" VALUE=<?php echo $size_vertical3 ?>><br>
			위치[3]: <select id="size_position3" NAME="size_position3">
				<option value="베란다">베란다
				<option value="거실">거실
				<option value="방">방
				<option value="화장실">화장실
				<option value="기타">기타
			</select>
			<script> document.getElementById("size_position3").value = "<?=$size_position3?>"; </script> <br>

			가로사이즈[4](cm): <INPUT TYPE="text" NAME="size_horizon4" VALUE=<?php echo $size_horizon4 ?>><br>
			세로사이즈[4](cm): <INPUT TYPE="text" NAME="size_vertical4" VALUE=<?php echo $size_vertical4 ?>><br>
			위치[4]: <select id="size_position4" NAME="size_position4">
				<option value="베란다">베란다
				<option value="거실">거실
				<option value="방">방
				<option value="화장실">화장실
				<option value="기타">기타
			</select>
			<script> document.getElementById("size_position4").value = "<?=$size_position4?>"; </script> <br>

			가로사이즈[5](cm): <INPUT TYPE="text" NAME="size_horizon5" VALUE=<?php echo $size_horizon5 ?>><br>
			세로사이즈[51](cm): <INPUT TYPE="text" NAME="size_vertical5" VALUE=<?php echo $size_vertical5 ?>><br>
			위치[5]: <select id="size_position5" NAME="size_position5">
				<option value="베란다">베란다
				<option value="거실">거실
				<option value="방">방
				<option value="화장실">화장실
				<option value="기타">기타
			</select>
			<script> document.getElementById("size_position5").value = "<?=$size_position5?>"; </script> <br>

			가로사이즈[6](cm): <INPUT TYPE="text" NAME="size_horizon6" VALUE=<?php echo $size_horizon6 ?>><br>
			세로사이즈[6](cm): <INPUT TYPE="text" NAME="size_vertical6" VALUE=<?php echo $size_vertical6 ?>><br>
			위치[6]: <select id="size_position6" NAME="size_position6">
				<option value="베란다">베란다
				<option value="거실">거실
				<option value="방">방
				<option value="화장실">화장실
				<option value="기타">기타
			</select>
			<script> document.getElementById("size_position6").value = "<?=$size_position6?>"; </script> <br>

			가로사이즈[7](cm): <INPUT TYPE="text" NAME="size_horizon7" VALUE=<?php echo $size_horizon7 ?>><br>
			세로사이즈[7](cm): <INPUT TYPE="text" NAME="size_vertical7" VALUE=<?php echo $size_vertical7 ?>><br>
			위치[7]: <select id="size_position7" NAME="size_position7">
				<option value="베란다">베란다
				<option value="거실">거실
				<option value="방">방
				<option value="화장실">화장실
				<option value="기타">기타
			</select>
			<script> document.getElementById("size_position7").value = "<?=$size_position7?>"; </script> <br>

			가로사이즈[8](cm): <INPUT TYPE="text" NAME="size_horizon8" VALUE=<?php echo $size_horizon8 ?>><br>
			세로사이즈[8](cm): <INPUT TYPE="text" NAME="size_vertical8" VALUE=<?php echo $size_vertical8 ?>><br>
			위치[8]: <select id="size_position8" NAME="size_position8">
				<option value="베란다">베란다
				<option value="거실">거실
				<option value="방">방
				<option value="화장실">화장실
				<option value="기타">기타
			</select>
			<script> document.getElementById("size_position8").value = "<?=$size_position8?>"; </script> <br>

			가로사이즈[9](cm): <INPUT TYPE="text" NAME="size_horizon9" VALUE=<?php echo $size_horizon9 ?>><br>
			세로사이즈[9](cm): <INPUT TYPE="text" NAME="size_vertical9" VALUE=<?php echo $size_vertical9 ?>><br>
			위치[9]: <select id="size_position9" NAME="size_position9">
				<option value="베란다">베란다
				<option value="거실">거실
				<option value="방">방
				<option value="화장실">화장실
				<option value="기타">기타
			</select>
			<script> document.getElementById("size_position9").value = "<?=$size_position9?>"; </script> <br>

			가로사이즈[10](cm): <INPUT TYPE="text" NAME="size_horizon10" VALUE=<?php echo $size_horizon10 ?>><br>
			세로사이즈[10](cm): <INPUT TYPE="text" NAME="size_vertical10" VALUE=<?php echo $size_vertical10 ?>><br>
			위치[10]: <select id="size_position10" NAME="size_position10">>
				<option value="베란다">베란다
				<option value="거실">거실
				<option value="방">방
				<option value="화장실">화장실
				<option value="기타">기타
			</select>
			<script> document.getElementById("size_position10").value = "<?=$size_position10?>"; </script> <br>

			가로사이즈[11](cm): <INPUT TYPE="text" NAME="size_horizon11" VALUE=<?php echo $size_horizon11 ?>><br>
			세로사이즈[11](cm): <INPUT TYPE="text" NAME="size_vertical11" VALUE=<?php echo $size_vertical11 ?>><br>
			위치[11]: <select id="size_position11" NAME="size_position11">
				<option value="베란다">베란다
				<option value="거실">거실
				<option value="방">방
				<option value="화장실">화장실
				<option value="기타">기타
			</select>
			<script> document.getElementById("size_position11").value = "<?=$size_position11?>"; </script> <br>

			가로사이즈[12](cm): <INPUT TYPE="text" NAME="size_horizon12" VALUE=<?php echo $size_horizon12 ?>><br>
			세로사이즈[12](cm): <INPUT TYPE="text" NAME="size_vertical12" VALUE=<?php echo $size_vertical12 ?>><br>
			위치[12]: <select id="size_position12" NAME="size_position12">
				<option value="베란다">베란다
				<option value="거실">거실
				<option value="방">방
				<option value="화장실">화장실
				<option value="기타">기타
			</select>
			<script> document.getElementById("size_position12").value = "<?=$size_position12?>"; </script> <br>

			가로사이즈[13](cm): <INPUT TYPE="text" NAME="size_horizon13" VALUE=<?php echo $size_horizon13 ?>><br>
			세로사이즈[13](cm): <INPUT TYPE="text" NAME="size_vertical13" VALUE=<?php echo $size_vertical13 ?>><br>
			위치[13]: <select id="size_position13" NAME="size_position13">
				<option value="베란다">베란다
				<option value="거실">거실
				<option value="방">방
				<option value="화장실">화장실
				<option value="기타">기타
			</select>
			<script> document.getElementById("size_position13").value = "<?=$size_position13?>"; </script> <br>

			가로사이즈[14](cm): <INPUT TYPE="text" NAME="size_horizon14" VALUE=<?php echo $size_horizon14 ?>><br>
			세로사이즈[14](cm): <INPUT TYPE="text" NAME="size_vertical14" VALUE=<?php echo $size_vertical14 ?>><br>
			위치[14]: <select id="size_position14" NAME="size_position14">
				<option value="베란다">베란다
				<option value="거실">거실
				<option value="방">방
				<option value="화장실">화장실
				<option value="기타">기타
			</select>
			<script> document.getElementById("size_position14").value = "<?=$size_position14?>"; </script> <br>

			가로사이즈[15](cm): <INPUT TYPE="text" NAME="size_horizon15" VALUE=<?php echo $size_horizon15 ?>><br>
			세로사이즈[15](cm): <INPUT TYPE="text" NAME="size_vertical15" VALUE=<?php echo $size_vertical15 ?>><br>
			위치[15]: <select id="size_position15" NAME="size_position15">
				<option value="베란다">베란다
				<option value="거실">거실
				<option value="방">방
				<option value="화장실">화장실
				<option value="기타">기타
			</select>
			<script> document.getElementById("size_position15").value = "<?=$size_position15?>"; </script> <br>

		</div>
		<BR><BR>
		<INPUT TYPE="submit" VALUE="견적서 수정">
	</FORM>

</BODY>

</HTML>