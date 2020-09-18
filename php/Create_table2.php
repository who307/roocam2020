<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");

    $sql ="
        CREATE TABlE IF NOT EXISTS Requests
        (
					partner VARCHAR(100) NOT NULL ,
					company_name VARCHAR(100) NOT NULL ,
					user_name VARCHAR(100) NOT NULL ,
					phone_number INT(100) NOT NULL ,  
					email VARCHAR(100) NOT NULL,
          mDate DATE
        )
        ";
    
    $ret = mysqli_query($con, $sql);

    if($ret) {
        echo "테이블이 생성되었습니다.";
    }
    else {
        echo "userTBL 생성 실패!!!","<BR>";
        echo "실패 : " , mysqli_error($con);
    }
    
    mysqli_close($con);
?>