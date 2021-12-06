<?php require_once('connection.php')?>

<?php

$table="";
	$query="SELECT name,comment FROM comment";
	$result = mysqli_query($connection,$query);

	$table = '<table>';
	$table .='<tr><th>Name</th><th>Comment</th></tr>';
	while($recode = mysqli_fetch_assoc($result)){
		$table .= '<tr><td>'.$recode["name"].'</td>';
		$table .= '<td>'.$recode["comment"].'</td>';;
		$table .= '</tr>';
		
	}
		
	
?>

<?php
$success="";
if(!empty($_POST["name4"])&& !empty($_POST["msg4"])){

$name=$comment=$success=$unsuccess="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = $_POST["name4"];
	$comment = $_POST["msg4"];


		$query = "INSERT INTO comment(name,comment) VALUES ('{$name}','{$comment}')";
		$result= mysqli_query($connection,$query);
	
		if($result){
			//echo mysqli_affected_rows($connection);
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
	<link rel="stylesheet" type="text/css" href="css/about.css">
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
				<h1>About Us</h1>
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
		<div class="login clearfix">	
			<div class="loginform clearfix">
			<h4>Add Your Comment</h4>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" class="contact clearfix" method="POST">
				<input type="text" name="name4" placeholder="Name">
				<textarea name="msg4" cols="30" rows="10" placeholder="First Enter Your Comment and Click (Send) button,and After Click (Refresh This Page) button to add your Comment to this Site.."></textarea>
				<button>Send</button>
				<button>Refresh This Page</button>
			</form>

		</div><!-- loginform -->

		<div class="contactus clearfix">
				<h3>Eagle Book Shop</h3>
				<div class="details clearfix">
					<div class="head">
					</div>
					<div class="deta">
					<p><br>Tiran jayasekara<br>Tiran.jayasekara.999@gmail.com<br>0714055143<br>No 119 Udadumbara rode Kandy</p>
					</div>
				</div>
				

				<div class="socialmedia">
				<ul>
					<li><a href="#"><i class="fa fa-whatsapp fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/tiran.jayasekara.16"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-rss fa-fw" aria-hidden="true"></i></a></li>
				</ul>
			</div> <!-- socialmedia -->
			<div class="msg clearfix"><?php echo $success ?></div>
</div><!-- background -->
		</div><!-- contactus -->
		</div> <!-- login -->
<div class="background">
	

		<div class="comment clearfix">
			<h1>Customer Satisfy</h1>
			<div class="tab">
			<?php echo $table?>
			</div>
		</div>
<!-- <div class="delete">
	<a href=""><button>Delete</button></a>
</div> -->
		
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