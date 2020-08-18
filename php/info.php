<?php
	 $con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 실패!!");
	 phpinfo();
   mysqli_close($con);
?>
