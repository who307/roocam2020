<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="EUC-KR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="CSS/main1.css">
<!--===============================================================================================-->
    <title>루캠</title>
    <style>
        tbody{
            font-size : 20px;
        }
        </style>
</head>
<body>
<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");

$sql = "SELECT * FROM UserData";
$ret = mysqli_query($con, $sql);

if($ret) {
    echo mysqli_num_rows($ret), "건이 검색됨.<br><br>";
}

else {
    echo "검색실패!"."<BR>";
    echo "실패 이유 :".mysqli_error($con);
    exit();
}

echo"<h1> 견적서 조회<h1>";
echo"<table border=1>";
echo "<tr>";
echo"<th>연락처</th>
		<th>건물유형</th>
 <th>가로사이즈(cm)</th> <th>세로사이즈(cm)</th> <th>위치</th> 
<th>공사 희망일</th>
<th>주소( 시/도 )</th>
<th>주소( 시/군/구 )</th>
<th>주소( 상세주소 )</th>
<th>견적서 작성날짜</th>
<th>삭제</th>";

echo "</tr>";

while($row = mysqli_fetch_array($ret)) {
    echo "<tr>";
		echo "<td>", $row['userNumber'], "</TD>";
		echo "<td>", $row['userBuilding'], "</TD>";
		echo "<td>", $row['size_horizon'], "</TD>"; //가로사이즈
		echo "<td>", $row['size_vertical'], "</TD>"; //세로사이즈
		echo "<td>", $row['size_position'], "</TD>"; //위치
		echo "<td>", $row['userHope'], "</TD>"; //공사 희망일
		echo "<td>", $row['userAddr1'], "</TD>"; // 시/도
		echo "<td>", $row['userAddr2'], "</TD>"; // 시/군/구
		echo "<td>", $row['userAddr3'], "</TD>"; // 상세주소
		echo "<td>", $row['mDate'], "</TD>"; // 견적서 작성날짜
		// echo "<td>", "<a href= '../php/update.php?userNumber=", $row['userNumber'], "'>수정 </a></td>";
    echo "<td>", "<a href= '../php/delete.php?userNumber=", $row['userNumber'], "'>삭제 </a></td>";
    echo"</tr>";
}
mysqli_close($con);
echo "</table>";

echo "<br> <a href='../index.html'> <--돌아가기</a> ";

?>

</body>
</html>
