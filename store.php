<?php include "storephp.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>My book Shop</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/store.css">
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
				<h1>Our Store</h1>
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

		<div class="books clearfix">
			<div class="cr">
				<div class="top">
					<h2>CR BOOK</h2>
					<img src="img/book/cr.jpg" alt="Cr Books">
				</div> <!-- top -->
				<div class="table">
<!--Cr Book-->
					<table>
						<tr>
							<th>Pages</th>
							<th>Price</th>
							<th>Availabe</th>
						</tr>
						<tr>
							<td>Page 40</td>
							<td><?php echo "Rs :".$page_40_price;?></td>
							<td><?php echo $cr40available;?></td>
							<?php
							
							?>
						</tr>
						<tr>
							<td>Page 80</td>
							<td><?php echo "Rs :".$page_80_price;?></td>
							<td><?php echo $cr80available;?></td>
						</tr>
						<tr>
							<td>Page 120</td>
							<td><?php echo "Rs :".$page_120_price;?></td>
							<td><?php echo $cr120available;?></td>
						</tr>
						<tr>
							<td>Page 160</td>
							<td><?php echo "Rs :".$page_160_price;?></td>
							<td><?php echo $cr160available;?></td>
						</tr>
						<tr>
							<td>Page 200</td>
							<td><?php echo "Rs :".$page_200_price;?></td>
							<td><?php echo $cr200available;?></td>
						</tr>
						<tr>
							<td>Page 400</td>
							<td><?php echo "Rs :".$page_400_price;?></td>
							<td><?php echo $cr400available;?></td>
						</tr>
					</table>
				</div><!-- table -->
			</div> <!-- cr -->
		</div><!-- books -->

<!--EXERCISE BOOK-->
		<div class="books clearfix">
			<div class="cr">
				<div class="top">
					<h2>EXERCISE BOOK</h2>
					<img src="img/book/excersice.jpg" alt="Cr Books">
				</div> <!-- top -->
				<div class="table">
					<table>
						<tr>
							<th>Pages</th>
							<th>Price</th>
							<th>Availabe</th>
						</tr>
						<tr>
							<td>Page 40</td>
							<td><?php echo "Rs :".$page_40_price1;?></td>
							<td><?php echo $cr40_1available;?></td>
						</tr>
						<tr>
							<td>Page 80</td>
							<td><?php echo "Rs :".$page_80_price1;?></td>
							<td><?php echo $cr80_1available;?></td>
						</tr>
						<tr>
							<td>Page 120</td>
							<td><?php echo "Rs :".$page_120_price1;?></td>
							<td><?php echo $cr120_1available;?></td>
						</tr>
						<tr>
							<td>Page 160</td>
							<td><?php echo "Rs :".$page_160_price1;?></td>
							<td><?php echo $cr160_1available;?></td>
						</tr>
						<tr>
							<td>Page 200</td>
							<td><?php echo "Rs :".$page_200_price1;?></td>
							<td><?php echo $cr200_1available;?></td>
						</tr>
						<tr>
							<td>Page 400</td>
							<td><?php echo "Rs :".$page_400_price1;?></td>
							<td><?php echo $cr400_1available;?></td>
						</tr>
					</table>
				</div><!-- table -->
			</div> <!-- cr -->
		</div><!-- books -->

<!--list Item 1-->

		<div class="books clearfix">
			<div class="cr clearfix">
				<div class="to clearfix">
					<h2>PENS.PENCIL<br>ERACER.ETC</h2>
					<img src="img/book/pen.jpg" alt="Cr Books">
					<img src="img/book/pencil.jpg" alt="Cr Books">
				</div> <!-- top -->
				<div class="table">
					<table>
						<tr>
							<th>Items</th>
							<th>Price</th>
							<th>Availabe</th>
						</tr>
						<tr>
							<td>Blue Pen</td>
							<td><?php echo "Rs :". $blue_pen_price ;?></td>
							<td><?php echo $avvblue_pen;?></td>
						</tr>
						<tr>
							<td>Black Pen</td>
							<td><?php echo "Rs :".$black_pen_price ;?></td>
							<td><?php echo $avvblack_pen;?></td>
						</tr>
						<tr>
							<td>Red pen</td>
							<td><?php echo "Rs :". $red_pen_price ?></td>
							<td><?php echo $avvred_pen;?></td>
						</tr>
						<tr>
							<td>Color Pen</td>
							<td><?php echo "Rs :".$color_pen_price ;?></td>
							<td><?php echo $avvcolor_pen;?></td>
						</tr>
						<tr>
							<td>Highlight Pen</td>
							<td><?php echo "Rs :".$highlight_pen_price ;?></td>
							<td><?php echo $avvhighlight_pen;?></td>
						</tr>
						<tr>
							<td>Pencil</td>
							<td><?php echo "Rs :".$pencil_price ;?></td>
							<td><?php echo $avvpencil;?></td>
						</tr>

						<tr>
							<td>Eracer</td>
							<td><?php echo "Rs :".$eraser_price ;?></td>
							<td><?php echo $avveraser;?></td>
						</tr>

						<tr>
							<td>Cutter</td>
							<td><?php echo "Rs :".$cutter_price ;?></td>
							<td><?php echo $avvcutter;?></td>
						</tr>

						<tr>
							<td>Pencil-Box</td>
							<td><?php echo "Rs :".$pencil_box_price ;?></td>
							<td><?php echo $avvpencil_box;?></td>
						</tr>

						<tr>
							<td>Glue-bottle</td>
							<td><?php echo "Rs :".$glue_price ;?></td>
							<td><?php echo $avvglue;?></td>
						</tr>

						<tr>
							<td>Sellotape</td>
							<td><?php echo "Rs :".$sellotape_price ;?></td>
							<td><?php echo $avvsellotape;?></td>
						</tr>

						<tr>
							<td>Stepler</td>
							<td><?php echo "Rs :".$stepler_price ;?></td>
							<td><?php echo $avvstepler;?></td>
						</tr>

						<tr>
							<td>Stepler Pin</td>
							<td><?php echo "Rs :".$stepler_pin_price ;?></td>
							<td><?php echo $avvstepler_pin;?></td>
						</tr>

					</table>
				</div><!-- table -->
			</div> <!-- cr -->
		</div><!-- books -->


<!--list Item 2-->
		<div class="books clearfix">
			<div class="cr clearfix">
				<div class="to clearfix">
					<h2>A4  MARKER<BR>RULER   ETC </h2>
					<img src="img/book/item.jpg" alt="Cr Books">
					<img src="img/book/item1.jpg" alt="Cr Books">
				</div> <!-- top -->
				<div class="table">
					<table>
						<tr>
							<th>Items</th>
							<th>Price</th>
							<th>Availabe</th>
						</tr>
						<tr>
							<td>Rubber Stamp</td>
							<td><?php echo "Rs :". $blue_pen_price1 ;?></td>
							<td><?php echo $avvblue_pen1;?></td>
						</tr>
						<tr>
							<td>Push Pin</td>
							<td><?php echo "Rs :".$black_pen_price1 ;?></td>
							<td><?php echo $avvblack_pen1;?></td>
						</tr>
						<tr>
							<td>Paper Clips</td>
							<td><?php echo "Rs :". $red_pen_price1 ?></td>
							<td><?php echo $avvred_pen1;?></td>
						</tr>
						<tr>
							<td>Marker</td>
							<td><?php echo "Rs :".$color_pen_price1 ;?></td>
							<td><?php echo $avvcolor_pen1;?></td>
						</tr>
						<tr>
							<td>Bulldog Clips</td>
							<td><?php echo "Rs :".$highlight_pen_price1 ;?></td>
							<td><?php echo $avvhighlight_pen1;?></td>
						</tr>
						<tr>
							<td>Calculater</td>
							<td><?php echo "Rs :".$pencil_price1 ;?></td>
							<td><?php echo $avvpencil1;?></td>
						</tr>

						<tr>
							<td>Scissors</td>
							<td><?php echo "Rs :".$eraser_price1 ;?></td>
							<td><?php echo $avveraser1;?></td>
						</tr>

						<tr>
							<td>Note Book</td>
							<td><?php echo "Rs :".$cutter_price1 ;?></td>
							<td><?php echo $avvcutter1;?></td>
						</tr>

						<tr>
							<td>A4 Paper</td>
							<td><?php echo "Rs :".$pencil_box_price1 ;?></td>
							<td><?php echo $avvpencil_box1;?></td>
						</tr>

						<tr>
							<td>Envelop</td>
							<td><?php echo "Rs :".$glue_price1 ;?></td>
							<td><?php echo $avvglue1;?></td>
						</tr>

						<tr>
							<td>Ruler</td>
							<td><?php echo "Rs :".$sellotape_price1 ;?></td>
							<td><?php echo $avvsellotape1;?></td>
						</tr>

						<tr>
							<td>Sticky Notes</td>
							<td><?php echo "Rs :".$stepler_price1 ;?></td>
							<td><?php echo $avvstepler1;?></td>
						</tr>

						<tr>
							<td>Full Scape Paper</td>
							<td><?php echo "Rs :".$stepler_pin_price1 ;?></td>
							<td><?php echo $avvstepler_pin1;?></td>
						</tr>

					</table>
				</div><!-- table -->
			</div> <!-- cr -->
		</div><!-- books -->

<!-- Binding -->

		<div class="books clearfix">
			<div class="cr">
				<div class="top">
					<h2>BINDUNG</h2>
					<img src="img/book/binding.png" alt="Binding">
				</div> <!-- top -->
				<div class="table">
					<table>
						<tr>
							<th>Type</th>
							<th>Price</th>
							<th>Availabe</th>
						</tr>
						<tr>
							<td>Case Binding</td>
							<td><?php echo "Rs :".$case_bind_price;?></td>
							<td><?php echo $avvcase_bind;?></td>
						</tr>
						<tr>
							<td>Spiral Binding</td>
							<td><?php echo "Rs :".$spiral_price;?></td>
							<td><?php echo $avvspiral;?></td>
						</tr>
						<tr>
							<td>Perfect Binding</td>
							<td><?php echo "Rs :".$perfect_price;?></td>
							<td><?php echo $avvperfect;?></td>
						</tr>
						<tr>
							<td>Saddle Stitch Binding</td>
							<td><?php echo "Rs :".$saddle_price;?></td>
							<td><?php echo $avvsaddle;?></td>
						</tr>
						<tr>
							<td>Thermal Binding</td>
							<td><?php echo "Rs :".$thermal_price;?></td>
							<td><?php echo $avvthermal;?></td>
						</tr>
					</table>
				</div><!-- table -->
			</div> <!-- cr -->
		</div><!-- books -->

	<div class="update clearfix">
			
		<a href="login.php"><button>Update Store</button></a>
		</div><!--  footer -->

	<div class="footer clearfix">
			<h5>Created By Tiran Jayasekara</h5>
			<h6>Contact Us 0714055143</h6>
		</div><!--  footer -->


		</div><!-- background -->
	</div><!--wrapper-->

</body>
</html>


