<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");

    $sql ="
        CREATE TABlE IF NOT EXISTS UserData
        (
					userBuilding VARCHAR(100) NOT NULL ,
					size_horizon INT(100) NOT NULL ,  
					size_horizon2 INT(100) NOT NULL,
					size_horizon3 INT(100) NOT NULL,
					size_horizon4 INT(100) NOT NULL,
					size_horizon5 INT(100) NOT NULL,
					size_horizon6 INT(100) NOT NULL,
					size_horizon7 INT(100) NOT NULL,
					size_horizon8 INT(100) NOT NULL,
					size_horizon9 INT(100) NOT NULL,
					size_horizon10 INT(100) NOT NULL,
					size_horizon11 INT(100) NOT NULL,
					size_horizon12 INT(100) NOT NULL,
					size_horizon13 INT(100) NOT NULL,
					size_horizon14 INT(100) NOT NULL,
					size_horizon15 INT(100) NOT NULL,
					size_vertical INT(100) NOT NULL ,
					size_vertical2 INT(100) NOT NULL ,
					size_vertical3 INT(100) NOT NULL ,
					size_vertical4 INT(100) NOT NULL ,
					size_vertical5 INT(100) NOT NULL ,
					size_vertical6 INT(100) NOT NULL ,
					size_vertical7 INT(100) NOT NULL ,
					size_vertical8 INT(100) NOT NULL ,
					size_vertical9 INT(100) NOT NULL ,
					size_vertical10 INT(100) NOT NULL ,
					size_vertical11 INT(100) NOT NULL ,
					size_vertical12 INT(100) NOT NULL ,
					size_vertical13 INT(100) NOT NULL ,
					size_vertical14 INT(100) NOT NULL ,
					size_vertical15 INT(100) NOT NULL ,
					size_position VARCHAR(100) NOT NULL ,
					size_position2 VARCHAR(100) NOT NULL ,
					size_position3 VARCHAR(100) NOT NULL ,
					size_position4 VARCHAR(100) NOT NULL ,
					size_position5 VARCHAR(100) NOT NULL ,
					size_position6 VARCHAR(100) NOT NULL ,
					size_position7 VARCHAR(100) NOT NULL ,
					size_position8 VARCHAR(100) NOT NULL ,
					size_position9 VARCHAR(100) NOT NULL ,
					size_position10 VARCHAR(100) NOT NULL ,
					size_position11 VARCHAR(100) NOT NULL ,
					size_position12 VARCHAR(100) NOT NULL ,
					size_position13 VARCHAR(100) NOT NULL ,
					size_position14 VARCHAR(100) NOT NULL ,
					size_position15 VARCHAR(100) NOT NULL ,
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