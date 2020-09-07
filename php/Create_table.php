<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");

    $sql ="
        CREATE TABlE IF NOT EXISTS UserData
        (
					userBuilding VARCHAR(100) NOT NULL ,
					size_horizon INT(100) NOT NULL ,  
					size_vertical INT(100) NOT NULL ,
					size_position VARCHAR(100) NOT NULL ,
					userHope VARCHAR(100) NOT NULL,
					userAddr1 VARCHAR(100) NOT NULL, 
					userAddr2 VARCHAR(100) NOT NULL, 
					userAddr3 VARCHAR(100) NOT NULL, 
					userNumber INT NOT NULL PRIMARY KEY,
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