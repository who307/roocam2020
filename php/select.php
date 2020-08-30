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

$sql = "SELECT * FROM roocam";
$ret = mysqli_query($con, $sql);

if($ret) {
    echo mysqli_num_rows($ret), "건이 검색됨.<br><br>";
}

else {
    echo "검색실패!"."<BR>";
    echo "실패 이유 :".mysqli_error($con);
    exit();
}

echo"<h1> 회원 검색 결과<h1>";
echo"<table border=1>";
echo "<tr>";
echo"<th>전화번호</th> <th>이름</th> <th>지역</th> <th>보낸날짜</th> <th>수정</th> <th>삭제</th>";
echo "</tr>";

while($row = mysqli_fetch_array($ret)) {
    echo "<tr>";
		echo "<td>", $row['userNumber'], "</TD>";
		echo "<td>", $row['userName'], "</TD>";
    echo "<td>", $row['userAddr'], "</TD>";
		echo "<td>", $row['mDate'], "</TD>";
		echo "<td>", "<a href= '../php/update.php?userNumber=", $row['userNumber'], "'>수정 </a></td>";
    echo "<td>", "<a href= '../php/delete.php?userNumber=", $row['userNumber'], "'>삭제 </a></td>";
    echo"</tr>";
}
mysqli_close($con);
echo "</table>";

echo "<br> <a href='../index.html'> <--돌아가기</a> ";

?>

</body>
</html>
