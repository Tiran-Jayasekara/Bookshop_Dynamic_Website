<?php require_once('connection.php')?>
<?php
$success="";
if(!empty($_POST["name"])&& !empty($_POST["number"])){

$name=$email=$number=$msg=$success=$unsuccess="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$number = $_POST["number"];
	$msg = $_POST["msg"];


		$query = "INSERT INTO massage(name,email,num,message) VALUES ('{$name}','{$email}','{$number}','{$msg}')";
		$result= mysqli_query($connection,$query);
	
		if($result){
			//echo mysqli_affected_rows($connection);
			$success = "Your Message has been sent";
	
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
	<link rel="stylesheet" type="text/css" href="css/contact.css">
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
				<h1>Contact Us</h1>
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
<div class="back">
		<div class="login clearfix">	
			<div class="loginform clearfix">
			<h4>Send Your Msg</h4>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" class="contact clearfix" method="POST">
				<input type="text" name="name" placeholder="Name">
				<input type="text" name="email" placeholder="Email">
				<input type="number" name="number" placeholder="Number">
				<textarea name="msg" cols="30" rows="10" placeholder="Enter Your Msg"></textarea>
				<button>Send</button>
			</form>

		</div><!-- loginform -->

		<div class="contactus clearfix">
				<h3></h3>
				<p>Tiran Jayasekara<br>Udadumbara<br>Tiran.jayasekara.999@gmail.com<br>0714055143</p>

				<div class="socialmedia">
				<ul>
					<li><a href="#"><i class="fa fa-whatsapp fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/tiran.jayasekara.16"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-rss fa-fw" aria-hidden="true"></i></a></li>
				</ul>
			</div> <!-- socialmedia -->
			<div class="msg"><?php echo $success ?></div>
</div><!-- background -->
		</div><!-- contactus -->
		</div> <!-- login -->
		<div class="footer clearfix">
			<h5>Created By Tiran Jayasekara</h5>
			<a href="login1.php"><h6>See Customor Message And Comments</h6></a>

		</div><!--  footer -->
		
	</div><!--wrapper-->

</body>
</html>
<?php mysqli_close($connection);?>