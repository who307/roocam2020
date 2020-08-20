<?php session_start(); ?>
<?php	
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");

	 $userID = $row["userID"];
	 $userPW = $row["userPW"];


	//POST로 받아온 아이다와 비밀번호가 비었다면 알림창을 띄우고 전 페이지로 돌아갑니다.
	if($_POST["user_ID"] == "" || $_POST["user_PW"] == ""){
		echo '<script> alert("아이디나 패스워드 입력하세요"); history.back(); </script>';
	}else if($_POST["user_ID"] == $row["userID"] || $_POST["user_PW"] == $row["userPW"]){
			echo '<script> alert("환영합니다."); </script>';
	}else{		
		echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
	}
?>