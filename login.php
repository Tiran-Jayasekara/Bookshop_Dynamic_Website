<?php require_once('connection.php')?>
<?php

$name=$password=$errname=$correct=$empty="";
if($_SERVER["REQUEST_METHOD"] == "POST" ){
	$name = $_POST["name"];
	$password = $_POST["password"];
}
if(!empty($name)&&!empty($password)){

	$query="SELECT name,password FROM login WHERE id=1";
	$result = mysqli_query($connection,$query);
	
	if($result){
		//echo "found".mysqli_num_rows($result);
	}
	$name1=$password1="";
	while($recode = mysqli_fetch_assoc($result)){

		$name1 =  $recode["name"];
		$password1 =  $recode["password"];
	}
	
	if($name1 == $name && $password1 == $password){
	$correct = "Login Success"."<br>"."Go To Update Page >>";
	}else{
	$errname = "User Name Or Password Is Invalid";
}
}

?>




<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
	<div class="container">
	<img src="img/admin1.png"/>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
			<div class="form-input">
				<input type="text" name="name" placeholder="Admin User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Admin Password"/>
			</div>
			<input type="submit" value="LOGIN" class="btn-login"/><br>
			<div class="link">
				<a href="update.php"><?php echo $correct;?></a>
				<a href="login.php"><?php echo $errname;?></a>
			</div>
			
		</form>
	</div>
</body>
</html>