<?php

	$connecti2on = mysqli_connect('sql112.byethost31.com','b31_30519772','Tiran.2385','b31_30519772_user');
	
	if(mysqli_connect_errno()){
		echo "database connection error".mysqli_connect_error();
	}else{
		//echo "database connection successfull";
	}


?>