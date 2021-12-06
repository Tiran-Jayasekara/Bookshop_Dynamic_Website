<?php

	$connection = mysqli_connect('localhost','root','','user');
	
	if(mysqli_connect_errno()){
		echo "database connection error".mysqli_connect_error();
	}else{
		//echo "database connection successfull";
	}


?>