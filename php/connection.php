<?php

	$connection = mysqli_connect('sql109.byethost7.com','b7_30521275','Tiran.6336','b7_30521275_user');
	
	if(mysqli_connect_errno()){
		echo "database connection error".mysqli_connect_error();
	}else{
		//echo "database connection successfull";
	}


?>