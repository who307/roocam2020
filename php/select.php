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

$sql = "
SELECT * FROM roocam
";
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
echo"<th>아이디</th> <th>이름</th> <th>비밀번호</th> <th>지역</th> <th>성별</th> <th>이메일</th> <th>가입일</th> <th>수정</th> <th>삭제</th>";
echo "</tr>";

while($row = mysqli_fetch_array($ret)) {
    echo "<tr>";
    echo "<td class=\"column100 column1\">", $row['userID'], "</TD>";
		echo "<td>", $row['id'], "</TD>";
		echo "<td>", $row['name'], "</TD>";
    echo "<td>", $row['pw'], "</TD>";
    echo "<td>", $row['addr'], "</TD>";
    echo "<td>", $row['gender'], "</TD>";
    echo "<td>", $row['email'], "</TD>";
    echo "<td>", $row['mDate'], "</TD>";
    echo"</tr>";
}

mysqli_close($con);
echo "</table>";



?>

</body>
</html>
