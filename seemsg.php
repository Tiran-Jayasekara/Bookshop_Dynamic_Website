<?php require_once('connection.php')?>

<?php

$table="";
	$query="SELECT id,name,email,num,message FROM massage";
	$result = mysqli_query($connection,$query);

	$table = '<table>';
	$table .='<tr><th>ID</th><th>Name</th><th>Email</th><th>Number</th>
	<th>Message</th></tr>';
	while($recode = mysqli_fetch_assoc($result)){
		$table .= '<tr><td>'.$recode["id"].'</td>';
		$table .= '<td>'.$recode["name"].'</td>';
		$table .= '<td>'.$recode["email"].'</td>';
		$table .= '<td>'.$recode["num"].'</td>';
		$table .= '<td>'.$recode["message"].'</td>';
		$table .= '</tr>';
		
	}
		
	
?>

<?php
$ID="";
if(!empty($_POST["ID"])){
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$id = $_POST["ID"];
		$query = "DELETE FROM massage WHERE id=$id";
		$result= mysqli_query($connection,$query);
	
		if($result){
			echo mysqli_affected_rows($connection);
			$success = "Your Comment has been Added";
	
		}else{
			$success = "Message was not Sent";

}
}
}
		
?>
<?php

$table1="";
	$query="SELECT id,name,comment FROM comment";
	$result = mysqli_query($connection,$query);

	$table1 = '<table>';
	$table1 .='<tr><th>id</th><th>Name</th><th>Comment</th></tr>';
	while($recode = mysqli_fetch_assoc($result)){
		$table1 .= '<tr><td>'.$recode["id"].'</td>';
		$table1 .= '<td>'.$recode["name"].'</td>';
		$table1 .= '<td>'.$recode["comment"].'</td>';;
		$table1 .= '</tr>';
		
	}
		
	
?>
<?php
$id="";
if(!empty($_POST["id1"])){

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$id = $_POST["id1"];
		$query = "DELETE FROM comment WHERE id=$id";
		$result= mysqli_query($connection,$query);
	
		if($result){
			echo mysqli_affected_rows($connection);
			$success = "Your Comment has been Added";
	
		}else{
			$success = "Message was not Sent";

}
}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>My book Shop</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/seemsg.css">
</head>
<body>
	
	<div class="wrapper">
		<div class="top-bar clearfix">
			<div class="top-bar-links">
				<ul>
					<li><a href="#">WELL COME</a></li>
					<li><a href="#">HAVE A NICE DAY....</a></li>
				</ul>
			</div><!--top-bar-links-->
				<div class="site-search">
					<form method="get" action="index.html">
						<input type="search" name="search-box" value="search">
						<button type="submit"></button>
					</form>
				</div><!--site_search-->

		</div><!--top-bar-->
		<header class="clearfix">
			<div class="logo">
				<img src="img/bookshop1.png" alt="Book Shop">
				<h1>See Customor Message And Comments</h1>
			</div> <!-- logo -->
		</header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="service.php">Services</a></li>
				<li><a href="store.php">Store</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</nav>
<div class="background">
	

		<div class="comment clearfix">
			<h1>Customer Messsage and Comments</h1>
			<div class="tab">
			<?php echo $table?>
			</div>
		</div>
		<div class="delete clearfix">
			<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" >
			<input type="number" name="ID" placeholder ="Messsage ID"><br>
			<button>Delete</button>
			</form>
		
		</div>

		<div class="commen clearfix">
			<div class="tab">
			<?php echo $table1?>
			</div>
		</div>
		<div class="delete clearfix">
			<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" >
			<input type="number" name="id1" placeholder="Comment ID"><br>
			<button>Delete</button>
			</form>
		
		</div>

<!-- 
		<div class="footer clearfix">
			<h5>Created By Tiran Jayasekara</h5>
			<h6>Contact Us 0714055143</h6>
		</div>  footer  -->
</div><!-- background -->
	</div><!--wrapper-->

</body>
</html>
<?php mysqli_close($connection);?>