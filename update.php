<?php require_once('connection.php')?>
<?php



										/*CR Book quentity Display*/
										/*CR Book quentity Display*/
										/*CR Book quentity Display*/


	$query="SELECT page_40,page_80,page_120,page_160,page_200,page_400 FROM cr_book WHERE id='1'";
	$result = mysqli_query($connection,$query);
	
	$page_40=$page_80=$page_120=$page_160=$page_200=$page_400=$price="";
	/*$cr40available=$cr80available=$cr120available=$cr160available=$cr200available=$cr400available="";*/
	if($result){
		//echo "found".mysqli_num_rows($result);
	}
	while($recode = mysqli_fetch_assoc($result)){

		$page_40 =  $recode["page_40"];
		$page_80 =  $recode["page_80"];
		$page_120 = $recode["page_120"];
		$page_160 = $recode["page_160"];
		$page_200 = $recode["page_200"];
		$page_400 = $recode["page_400"];
 
		
		
	}
?>

									<!-- /*CR Book Price Display*/ -->
									<!-- /*CR Book Price Display*/ -->
									<!-- /*CR Book Price Display*/ -->
<?php

	$query3="SELECT page_40,page_80,page_120,page_160,page_200,page_400 FROM cr_book WHERE id='3'";
	$result3 = mysqli_query($connection,$query3);
	
	$page_40_price=$page_80_price=$page_120_price=$page_160_price=$page_200_price=$page_400_price="";
	
	if($result3){
		//echo "found".mysqli_num_rows($result);
	}
	while($recode3 = mysqli_fetch_assoc($result3)){

		$page_40_price =  $recode3["page_40"];
		$page_80_price =  $recode3["page_80"];
		$page_120_price = $recode3["page_120"];
		$page_160_price = $recode3["page_160"];
		$page_200_price = $recode3["page_200"];
		$page_400_price = $recode3["page_400"];
		
		
	}
?>


							<!-- Exercise Book Quentity Display -->
							<!-- Exercise Book Quentity Display -->
							<!-- Exercise Book Quentity Display -->


	<?php

	$query4="SELECT page_40,page_80,page_120,page_160,page_200,page_400 FROM cr_book WHERE id='4'";
	$result4 = mysqli_query($connection,$query4);
	
	$page_40_price1=$page_80_price1=$page_120_price1=$page_160_price1=$page_200_price1=$page_400_price1="";
	
	if($result4){
		//echo "found".mysqli_num_rows($result);
	}
	while($recode4 = mysqli_fetch_assoc($result4)){

		$page_40_price1 =  $recode4["page_40"];
		$page_80_price1 =  $recode4["page_80"];
		$page_120_price1 = $recode4["page_120"];
		$page_160_price1 = $recode4["page_160"];
		$page_200_price1 = $recode4["page_200"];
		$page_400_price1 = $recode4["page_400"];
		
		
	}
	?>


							<!-- Exercise Book Price Display -->
							<!-- Exercise Book Price Display -->
							<!-- Exercise Book Price Display -->

<?php

	$query1="SELECT page_40,page_80,page_120,page_160,page_200,page_400 FROM cr_book WHERE id='2'";
	$result1 = mysqli_query($connection,$query1);
	
	$page_40_1=$page_80_1=$page_120_1=$page_160_1=$page_200_1=$page_400_1="";
	/*$cr40_1available=$cr80_1available=$cr120_1available=$cr160_1available=$cr200_1available=$cr400_1available="";*/
	if($result1){
		//echo "found".mysqli_num_rows($result);
	}
	while($recode1 = mysqli_fetch_assoc($result1)){

		$page_40_1 =  $recode1["page_40"];
		$page_80_1 =  $recode1["page_80"];
		$page_120_1 = $recode1["page_120"];
		$page_160_1 = $recode1["page_160"];
		$page_200_1 = $recode1["page_200"];
		$page_400_1 = $recode1["page_400"];
		
		
	}
?>


													<!--Item List 1 Quentity Display-->
													<!--Item List 1 Quentity Display-->
													<!--Item List 1 Quentity Display-->
<?php

	$query2 = "SELECT blue_pen,black_pen,red_pen,color_pen,highlight_pen,pencil,eraser,cutter,pencil_box,glue,sellotape,stepler,stepler_pin FROM items WHERE id =1";

	$result2 = mysqli_query($connection,$query2);
	
	$blue_pen=$black_pen=$red_pen=$color_pen=$highlight_pen=$pencil=$eraser=$cutter="";
	$pencil_box=$glue=$sellotape=$stepler=$stepler_pin ="";
	
	if($result2){
		//echo "found".mysqli_num_rows($result2);
	}
	while($recode2 = mysqli_fetch_assoc($result2)){

		$blue_pen =  $recode2["blue_pen"];
		$black_pen =  $recode2["black_pen"];
		$red_pen = $recode2["red_pen"];
		$color_pen = $recode2["color_pen"];
		$highlight_pen = $recode2["highlight_pen"];
		$pencil = $recode2["pencil"];
		$eraser =  $recode2["eraser"];
		$cutter =  $recode2["cutter"];
		$pencil_box = $recode2["pencil_box"];
		$glue = $recode2["glue"];
		$sellotape = $recode2["sellotape"];
		$stepler = $recode2["stepler"];
		$stepler_pin = $recode2["stepler_pin"];
		
		
	}
?>

												    <!--Item List 1 Price Display-->
													<!--Item List 1 Price Display-->
													<!--Item List 1 Price Display-->
<?php

	$query5 = "SELECT blue_pen,black_pen,red_pen,color_pen,highlight_pen,pencil,eraser,cutter,pencil_box,glue,sellotape,stepler,stepler_pin FROM items WHERE id=2";

	$result5 = mysqli_query($connection,$query5);
	
	$blue_pen_price =$black_pen_price =$red_pen_price =$color_pen_price =$highlight_pen_price =$pencil_price =$eraser_price =$cutter_price ="";
	$pencil_box_price =$glue_price =$sellotape_price =$stepler_price =$stepler_pin_price  ="";

	
	if($result5){
		//echo "found".mysqli_num_rows($result2);
	}
	while($recode5 = mysqli_fetch_assoc($result5)){

		$blue_pen_price =  $recode5["blue_pen"];
		$black_pen_price  =  $recode5["black_pen"];
		$red_pen_price  = $recode5["red_pen"];
		$color_pen_price  = $recode5["color_pen"];
		$highlight_pen_price  = $recode5["highlight_pen"];
		$pencil_price  = $recode5["pencil"];
		$eraser_price  =  $recode5["eraser"];
		$cutter_price  =  $recode5["cutter"];
		$pencil_box_price  = $recode5["pencil_box"];
		$glue_price  = $recode5["glue"];
		$sellotape_price  = $recode5["sellotape"];
		$stepler_price  = $recode5["stepler"];
		$stepler_pin_price  = $recode5["stepler_pin"];
		
		
	}
?>



													<!--Item List 2 Quentity Display-->
													<!--Item List 2 Quentity Display-->
													<!--Item List 2 Quentity Display-->
<?php

	$query6 = "SELECT blue_pen,black_pen,red_pen,color_pen,highlight_pen,pencil,eraser,cutter,pencil_box,glue,sellotape,stepler,stepler_pin FROM items WHERE id =3";

	$result6 = mysqli_query($connection,$query6);
	
	$blue_pen1=$black_pen1=$red_pen1=$color_pen1=$highlight_pen1=$pencil1=$eraser1=$cutter1="";
	$pencil_box1=$glue1=$sellotape1=$stepler1=$stepler_pin1 ="";
	
	if($result6){
		//echo "found".mysqli_num_rows($result2);
	}
	while($recode6 = mysqli_fetch_assoc($result6)){

		$blue_pen1 =  $recode6["blue_pen"];
		$black_pen1 =  $recode6["black_pen"];
		$red_pen1 = $recode6["red_pen"];
		$color_pen1 = $recode6["color_pen"];
		$highlight_pen1 = $recode6["highlight_pen"];
		$pencil1 = $recode6["pencil"];
		$eraser1 =  $recode6["eraser"];
		$cutter1 =  $recode6["cutter"];
		$pencil_box1 = $recode6["pencil_box"];
		$glue1 = $recode6["glue"];
		$sellotape1 = $recode6["sellotape"];
		$stepler1 = $recode6["stepler"];
		$stepler_pin1= $recode6["stepler_pin"];
		
		
	}

?>
 													<!--Item List 2 Price Display-->
													<!--Item List 2 Price Display-->
													<!--Item List 2 Price Display-->
<?php

	$query7 = "SELECT blue_pen,black_pen,red_pen,color_pen,highlight_pen,pencil,eraser,cutter,pencil_box,glue,sellotape,stepler,stepler_pin FROM items WHERE id=4";

	$result7 = mysqli_query($connection,$query7);
	
	$blue_pen_price1 =$black_pen_price1 =$red_pen_price1 =$color_pen_price1 =$highlight_pen_price1 =$pencil_price1 =$eraser_price1 =$cutter_price1 ="";
	$pencil_box_price1 =$glue_price1 =$sellotape_price1 =$stepler_price1 =$stepler_pin_price1  ="";

	
	if($result7){
		//echo "found".mysqli_num_rows($result2);
	}
	while($recode7 = mysqli_fetch_assoc($result7)){

		$blue_pen_price1 =  $recode7["blue_pen"];
		$black_pen_price1  =  $recode7["black_pen"];
		$red_pen_price1  = $recode7["red_pen"];
		$color_pen_price1  = $recode7["color_pen"];
		$highlight_pen_price1  = $recode7["highlight_pen"];
		$pencil_price1  = $recode7["pencil"];
		$eraser_price1  =  $recode7["eraser"];
		$cutter_price1  =  $recode7["cutter"];
		$pencil_box_price1  = $recode7["pencil_box"];
		$glue_price1  = $recode7["glue"];
		$sellotape_price1  = $recode7["sellotape"];
		$stepler_price1  = $recode7["stepler"];
		$stepler_pin_price1  = $recode7["stepler_pin"];
		
		
	}

?>


										<!-- Binding Quentity Display-->
										<!-- Binding Quentity Display-->
										<!-- Binding Quentity Display-->
<?php
	
	$query8 = "SELECT case_bind,spiral,perfect,saddle,thermal FROM binding WHERE id=1";

	$result8 = mysqli_query($connection,$query8);

	$case_bind=$spiral=$perfect=$saddle=$thermal= "";
	if($result8){
		//echo "found".mysqli_num_rows($result2);
	}
	while($recode = mysqli_fetch_assoc($result8)){

		$case_bind =  $recode["case_bind"];
		$spiral  =  $recode["spiral"];
		$perfect = $recode["perfect"];
		$saddle  = $recode["saddle"];
		$thermal  = $recode["thermal"];
		
		
	}
?>





										<!-- Binding Quentity Display-->
										<!-- Binding Quentity Display-->
										<!-- Binding Quentity Display-->
<?php
	
	$query9 = "SELECT case_bind,spiral,perfect,saddle,thermal FROM binding WHERE id=2";

	$result9 = mysqli_query($connection,$query9);

	$case_bind_price=$spiral_price=$perfect_price=$saddle_price=$thermal_price= "";
	if($result9){
		//echo "found".mysqli_num_rows($result2);
	}
	while($recode = mysqli_fetch_assoc($result9)){

		$case_bind_price =  $recode["case_bind"];
		$spiral_price  =  $recode["spiral"];
		$perfect_price = $recode["perfect"];
		$saddle_price  = $recode["saddle"];
		$thermal_price  = $recode["thermal"];
		
		
	}
?>





														<!-- Update item cr book -->
														<!-- Update item cr book -->
														<!-- Update item cr book -->


<?php
$success=$unsuccess="";
$refresh = "Refresh The Page";
if(!empty($_POST["item"])&& !empty($_POST["quentity"])){
	
$item=$quentity="";
$errinput ="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$item = $_POST["item"];
	$quentity = $_POST["quentity"];


$errinput = $errinput;	

/*cr book item Update*/
switch ($item) {
	case 1:
		$query10 = "UPDATE cr_book SET page_40 = $quentity  WHERE id=1";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;


	case 2 :
		$query10 = "UPDATE cr_book SET page_80 = $quentity  WHERE id=1";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
				//echo mysqli_affected_rows($connection);
				$success = "Update Successful";
		}else{
				$unsuccess = "Database Query Faild";
		}
		break;

	case 3 :
		
		$query10 = "UPDATE cr_book SET page_120 = $quentity  WHERE id=1";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}

		break;

	case 4:
		
		$query10 = "UPDATE cr_book SET page_160 = $quentity  WHERE id=1";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;


	case 5:
		$query10 = "UPDATE cr_book SET page_200 = $quentity  WHERE id=1";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;


	case 6 :
		$query10 = "UPDATE cr_book SET page_400 = $quentity  WHERE id=1";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

	default:
		$errinput = "Item Name Is Wrong";
		break;
	
}


													  /*<!-- Update Price cr book -->
														<!-- Update Price cr book -->
														<!-- Update Price cr book -->*/
switch ($item) {
	case '1rs':
		$query10 = "UPDATE cr_book SET page_40 = $quentity  WHERE id=3";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

	case '2rs':
		$query10 = "UPDATE cr_book SET page_80 = $quentity  WHERE id=3";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

	case '3rs':
		$query10 = "UPDATE cr_book SET page_120 = $quentity  WHERE id=3";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

	case '4rs':
		$query10 = "UPDATE cr_book SET page_160 = $quentity  WHERE id=3";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

	case '5rs':
		$query10 = "UPDATE cr_book SET page_200 = $quentity  WHERE id=3";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			 //mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

	case '6rs':
		$query10 = "UPDATE cr_book SET page_400 = $quentity  WHERE id=3";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;
	
	default:
		$errinput = "Item Name Is Wrong";
		break;
}
}
}

?>







														<!-- Update Exercise book items -->
														<!-- Update Exercise book items -->
														<!-- Update Exercise book items -->




<?php
if(!empty($_POST["item1"])&& !empty($_POST["quentity1"])){

$item1=$quentity1="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$item1 = $_POST["item1"];
	$quentity1 = $_POST["quentity1"];

switch ($item1) {
		case 1:
			$query10 = "UPDATE cr_book SET page_40 = $quentity1  WHERE id=2";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

		case 2:
			$query10 = "UPDATE cr_book SET page_80 = $quentity1  WHERE id=2";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
			break;

		case 3:
			$query10 = "UPDATE cr_book SET page_120 = $quentity1  WHERE id=2";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
			break;

		case 4:
			$query10 = "UPDATE cr_book SET page_160 = $quentity1  WHERE id=2";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
			break;

		case 5:
			$query10 = "UPDATE cr_book SET page_200 = $quentity1  WHERE id=2";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
			break;

		case 6:
			$query10 = "UPDATE cr_book SET page_400 = $quentity1  WHERE id=2";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
			break;
		
		default:
			$errinput = "Item Name Is Wrong";
			break;
	}	


													  /*<!-- Update Exercise book Price -->
														<!-- Update Exercise book Price -->
														<!-- Update Exercise book Price -->
*/
switch ($item1) {
	case '1rs':
		
		$query10 = "UPDATE cr_book SET page_40 = $quentity1  WHERE id=4";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

	case '2rs':
		$query10 = "UPDATE cr_book SET page_80 = $quentity1  WHERE id=4";
		$result10= mysqli_query($connection,$query10);
		
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

	case '3rs':
		$query10 = "UPDATE cr_book SET page_120 = $quentity1  WHERE id=4";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

	case '4rs':
		$query10 = "UPDATE cr_book SET page_160 = $quentity1  WHERE id=4";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

	case '5rs':
		$query10 = "UPDATE cr_book SET page_200 = $quentity1  WHERE id=4";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success="Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

	case '6rs':
		$query10 = "UPDATE cr_book SET page_400 = $quentity1  WHERE id=4";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;
	
	default:
		$errinput = "Item Name Is Wrong";
		break;
}
}
}

?>



														<!-- item list 1 Update item -->
														<!-- item list 1 Update item -->
														<!-- item list 1 Update item -->



<?php
if(!empty($_POST["item2"])&& !empty($_POST["quentity2"])){

$item1=$quentity1="";
$errinput1 ="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$item1 = $_POST["item2"];
	$quentity1 = $_POST["quentity2"];


$errinput1 = $errinput1;
switch ($item1) {
		case 1:
			$query10 = "UPDATE items SET blue_pen = $quentity1  WHERE id=1";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case 2:
			$query10 = "UPDATE items SET black_pen = $quentity1  WHERE id=1";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case 3:
			$query10 = "UPDATE items SET red_pen = $quentity1  WHERE id=1";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case 4:
			$query10 = "UPDATE items SET color_pen = $quentity1  WHERE id=1";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case 5:
			$query10 = "UPDATE items SET highlight_pen = $quentity1  WHERE id=1";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case 6 :
			$query10 = "UPDATE items SET pencil = $quentity1  WHERE id=1";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case 7:
			$query10 = "UPDATE items SET eraser = $quentity1  WHERE id=1";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case 8:
			
			$query10 = "UPDATE items SET cutter = $quentity1  WHERE id=1";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case 9:
			$query10 = "UPDATE items SET pencil_box = $quentity1  WHERE id=1";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case 10:
			$query10 = "UPDATE items SET glue = $quentity1  WHERE id=1";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//$success = mysqli_affected_rows($connection);
				echo "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case 11:
			$query10 = "UPDATE items SET sellotape = $quentity1  WHERE id=1";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
				//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case 12:
			
			$query10 = "UPDATE items SET stepler = $quentity1  WHERE id=1";
			$result10= mysqli_query($connection,$query10);
	
				if($result10){
				//echo mysqli_affected_rows($connection);
				$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case 13:
			$query10 = "UPDATE items SET stepler_pin = $quentity1  WHERE id=1";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;
		
		default:
			# code...
			break;
	}




													/*	<!-- item list 1 Update Price -->
														<!-- item list 1 Update Price -->
														<!-- item list 1 Update Price -->*/


	switch ($item1) {
		case '1rs':
			$query10 = "UPDATE items SET blue_pen = $quentity1  WHERE id=2";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case '2rs':
			$query10 = "UPDATE items SET black_pen = $quentity1  WHERE id=2";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case '3rs':
			$query10 = "UPDATE items SET red_pen = $quentity1  WHERE id=2";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case '4rs':
			$query10 = "UPDATE items SET color_pen = $quentity1  WHERE id=2";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case '5rs':
			$query10 = "UPDATE items SET highlight_pen = $quentity1  WHERE id=2";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case '6rs' :
			$query10 = "UPDATE items SET pencil = $quentity1  WHERE id=2";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case '7rs':
			$query10 = "UPDATE items SET eraser = $quentity1  WHERE id=2";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case '8rs':
			
			$query10 = "UPDATE items SET cutter = $quentity1  WHERE id=2";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case '9rs':
			$query10 = "UPDATE items SET pencil_box = $quentity1  WHERE id=2";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case '10rs':
			$query10 = "UPDATE items SET glue = $quentity1  WHERE id=2";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
				$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case '11rs':
			$query10 = "UPDATE items SET sellotape = $quentity1  WHERE id=2";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
				//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case '12rs':
			
			$query10 = "UPDATE items SET stepler = $quentity1  WHERE id=2";
			$result10= mysqli_query($connection,$query10);
	
				if($result10){
				//echo mysqli_affected_rows($connection);
				$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case '13rs':
			$query10 = "UPDATE items SET stepler_pin = $quentity1  WHERE id=2";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;
		
		default:
			$errinput = "Item Name Is Wrong";
			break;
	}	

}
}
?>






															
														<!-- item list 2 Update item -->
														<!-- item list 2 Update item -->
														<!-- item list 2 Update item -->



<?php
if(!empty($_POST["item3"])&& !empty($_POST["quentity3"])){

$item1=$quentity1="";
$errinput1 ="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$item1 = $_POST["item3"];
	$quentity1 = $_POST["quentity3"];


$errinput1 = $errinput1;
switch ($item1) {
		case 1:
			$query10 = "UPDATE items SET blue_pen = $quentity1  WHERE id=3";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case 2:
			$query10 = "UPDATE items SET black_pen = $quentity1  WHERE id=3";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case 3:
			$query10 = "UPDATE items SET red_pen = $quentity1  WHERE id=3";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case 4:
			$query10 = "UPDATE items SET color_pen = $quentity1  WHERE id=3";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case 5:
			$query10 = "UPDATE items SET highlight_pen = $quentity1  WHERE id=3";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case 6 :
			$query10 = "UPDATE items SET pencil = $quentity1  WHERE id=3";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//$success = mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case 7:
			$query10 = "UPDATE items SET eraser = $quentity1  WHERE id=3";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case 8:
			
			$query10 = "UPDATE items SET cutter = $quentity1  WHERE id=3";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Updaten Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case 9:
			$query10 = "UPDATE items SET pencil_box = $quentity1  WHERE id=3";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case 10:
			$query10 = "UPDATE items SET glue = $quentity1  WHERE id=3";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
				$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case 11:
			$query10 = "UPDATE items SET sellotape = $quentity1  WHERE id=3";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
				//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case 12:
			
			$query10 = "UPDATE items SET stepler = $quentity1  WHERE id=3";
			$result10= mysqli_query($connection,$query10);
	
				if($result10){
				//echo mysqli_affected_rows($connection);
				$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case 13:
			$query10 = "UPDATE items SET stepler_pin = $quentity1  WHERE id=3";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;
		
		default:
			# code...
			break;
	}




														/*
														<!-- item list 2 Update Price -->
														<!-- item list 2 Update Price -->
														<!-- item list 2 Update Price -->*/

	switch ($item1) {
		case '1rs':
			$query10 = "UPDATE items SET blue_pen = $quentity1  WHERE id=4";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case '2rs':
			$query10 = "UPDATE items SET black_pen = $quentity1  WHERE id=4";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case '3rs':
			$query10 = "UPDATE items SET red_pen = $quentity1  WHERE id=4";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case '4rs':
			$query10 = "UPDATE items SET color_pen = $quentity1  WHERE id=4";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case '5rs':
			$query10 = "UPDATE items SET highlight_pen = $quentity1  WHERE id=4";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;

		case '6rs' :
			$query10 = "UPDATE items SET pencil = $quentity1  WHERE id=4";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case '7rs':
			$query10 = "UPDATE items SET eraser = $quentity1  WHERE id=4";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case '8rs':
			
			$query10 = "UPDATE items SET cutter = $quentity1  WHERE id=4";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case '9rs':
			$query10 = "UPDATE items SET pencil_box = $quentity1  WHERE id=4";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case '10rs':
			$query10 = "UPDATE items SET glue = $quentity1  WHERE id=4";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
				$success = "Update Successful";
			}else{
				echo "Database Query Faild";
			}
			break;

		case '11rs':
			$query10 = "UPDATE items SET sellotape = $quentity1  WHERE id=4";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
				//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case '12rs':
			
			$query10 = "UPDATE items SET stepler = $quentity1  WHERE id=4";
			$result10= mysqli_query($connection,$query10);
	
				if($result10){
				//echo mysqli_affected_rows($connection);
				$success = "Update Successful";
			}else{
				$unsuccess = "Database Query Faild";
			}
			break;

		case '13rs':
			$query10 = "UPDATE items SET stepler_pin = $quentity1  WHERE id=4";
			$result10= mysqli_query($connection,$query10);
	
			if($result10){
					//echo mysqli_affected_rows($connection);
					$success = "Update Successful";
			}else{
					$unsuccess = "Database Query Faild";
			}
			break;
		
		default:
			$errinput = "Item Name Is Wrong";
			break;
	}	

}
}
?>



															<!-- 
															Binding Quentity Update
															Binding Quentity Update
															Binding Quentity Update -->


<?php
if(!empty($_POST["item4"])&& !empty($_POST["quentity4"])){

$item1=$quentity1="";
$errinput1 ="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$item1 = $_POST["item4"];
	$quentity1 = $_POST["quentity4"];


$errinput1 = $errinput1;
switch ($item1) {
		case 1:
		$query10 = "UPDATE binding SET case_bind = $quentity1  WHERE id=1";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

		case 2:
			$query10 = "UPDATE binding SET spiral = $quentity1  WHERE id=1";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
			break;

		case 3:
			$query10 = "UPDATE binding SET perfect = $quentity1  WHERE id=1";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
			break;

		case 4:
			$query10 = "UPDATE binding SET saddle = $quentity1  WHERE id=1";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
			break;

		case 5:
			$query10 = "UPDATE binding SET thermal = $quentity1  WHERE id=1";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
			break;
		
		default:
			$errinput = "Item Name Is Wrong";
			break;
	}	


													  /*<!-- Update Exercise book Price -->
														<!-- Update Exercise book Price -->
														<!-- Update Exercise book Price -->
*/
switch ($item1) {
	case '1rs':
		
		$query10 = "UPDATE binding SET case_bind = $quentity1  WHERE id=2";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

	case '2rs':
		$query10 = "UPDATE binding SET spiral = $quentity1  WHERE id=2";
		$result10= mysqli_query($connection,$query10);
		
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

	case '3rs':
		$query10 = "UPDATE binding SET perfect = $quentity1  WHERE id=2";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

	case '4rs':
		$query10 = "UPDATE binding SET saddle = $quentity1  WHERE id=2";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;

	case '5rs':
		$query10 = "UPDATE binding SET thermal = $quentity1  WHERE id=2";
		$result10= mysqli_query($connection,$query10);
	
		if($result10){
			//echo mysqli_affected_rows($connection);
			$success = "Update Successful";
		}else{
			$unsuccess = "Database Query Faild";
		}
		break;
	
	default:
		$errinput = "Item Name Is Wrong";
		break;
}
}
}

?>
<?php mysqli_close($connection)?>



    <!-- HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTHTML HTML HTML HTML HTML HTML HTML HTML HTHTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTHTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTHTML HTML HTML HTML HTML HTML HTML HTML HTHTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTHTML HTML HTML HTML HTML HTML HTML HTML HTML HTML HTML 
 -->


<!DOCTYPE html>
<html>
<head>
	<title>My book Shop</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/update.css">
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
				<h1>Update Store</h1>
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
					<div class="success clearfix">
					<h2><?php echo $success;?></h2>
					</div>
		<div class="books clearfix">

			<div class="cr clearfix">
				<h2>CR BOOK</h2>
				

				<div class="table">
<!--Cr Book-->
					<table>
						<tr>
							<th>Id</th>
							<th>Pages</th>
							<th>Price</th>
							<th>Quentity</th>
						</tr>
						<tr>
							<td>1</td>
							<td>Page 40</td>
							<td><?php echo "Rs :".$page_40_price;?></td>
							<td><?php echo $page_40;?></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Page 80</td>
							<td><?php echo "Rs :".$page_80_price;?></td>
							<td><?php echo $page_80;?></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Page 120</td>
							<td><?php echo "Rs :".$page_120_price;?></td>
							<td><?php echo $page_120;?></td>
						</tr>
						<tr>
							<td>4</td>
							<td>Page 160</td>
							<td><?php echo "Rs :".$page_160_price;?></td>
							<td><?php echo $page_160;?></td>
						</tr>
						<tr>
							<td>5</td>
							<td>Page 200</td>
							<td><?php echo "Rs :".$page_200_price;?></td>
							<td><?php echo $page_200;?></td>
						</tr>
						<tr>
							<td>6</td>
							<td>Page 400</td>
							<td><?php echo "Rs :".$page_400_price;?></td>
							<td><?php echo $page_400;?></td>
						</tr>
					</table>
				</div><!-- table -->
				<div class="top">
					<form action="update.php" class="top1" method="POST">
					<h4>Item:</h4><br><input type="text" name="item" placeholder="Item">
					<h4>Quentity:</h4><br><input type="number" name="quentity" placeholder="Quentity"><br>
					<button>Update</button>
					</form>

				</div> <!-- top -->
			</div> <!-- cr -->
		</div><!-- books -->

<!--EXERCISE BOOK-->
		<div class="books clearfix">
			<div class="cr">
				<h2>EXERCISE BOOK</h2>
				
				<div class="table">
					<table>
						<tr>
							<th>Id</th>
							<th>Pages</th>
							<th>Price</th>
							<th>Quentity</th>
						</tr>
						<tr><td>1</td>
							<td>Page 40</td>
							<td><?php echo "Rs :".$page_40_price1;?></td>
							<td><?php echo $page_40_1;?></td>
						</tr>
						<tr><td>2</td>
							<td>Page 80</td>
							<td><?php echo "Rs :".$page_80_price1;?></td>
							<td><?php echo $page_80_1;?></td>
						</tr>
						<tr><td>3</td>
							<td>Page 120</td>
							<td><?php echo "Rs :".$page_120_price1;?></td>
							<td><?php echo $page_120_1;?></td>
						</tr>
						<tr><td>4</td>
							<td>Page 160</td>
							<td><?php echo "Rs :".$page_160_price1;?></td>
							<td><?php echo $page_160_1;?></td>
						</tr>
						<tr><td>5</td>
							<td>Page 200</td>
							<td><?php echo "Rs :".$page_200_price1;?></td>
							<td><?php echo $page_200_1;?></td>
						</tr>
						<tr><td>6</td>
							<td>Page 400</td>
							<td><?php echo "Rs :".$page_400_price1;?></td>
							<td><?php echo $page_400_1;?></td>
						</tr>
					</table>
				</div><!-- table -->
				<div class="top">
					<form action="update.php" class="top1" method="POST">

					<h4>Item:</h4><br><input type="text" name="item1" placeholder="Item">
					<h4>Quentity:</h4><br><input type="number" name="quentity1" placeholder="Quentity"><br>
					<button>Update</button>
					</form>

				</div> <!-- top -->
			</div> <!-- cr -->
		</div><!-- books -->

<!--list Item 1-->

		<div class="books clearfix">
			<div class="cr clearfix">
				<h2>PENS/PENCIL/ERACER/ETC</h2>
				
				<div class="table">
					<table>
						<tr><th>Id</th>
							<th>Items</th>
							<th>Price</th>
							<th>Availabe</th>
						</tr>
						<tr><td>1</td>
							<td>Blue Pen</td>
							<td><?php echo "Rs :". $blue_pen_price ;?></td>
							<td><?php echo $blue_pen;?></td>
						</tr>
						<tr><td>2</td>
							<td>Black Pen</td>
							<td><?php echo "Rs :".$black_pen_price ;?></td>
							<td><?php echo $black_pen;?></td>
						</tr>
						<tr><td>3</td>
							<td>Red pen</td>
							<td><?php echo "Rs :". $red_pen_price ?></td>
							<td><?php echo $red_pen;?></td>
						</tr>
						<tr><td>4</td>
							<td>Color Pen</td>
							<td><?php echo "Rs :".$color_pen_price ;?></td>
							<td><?php echo $color_pen;?></td>
						</tr>
						<tr><td>5</td>
							<td>Highlight Pen</td>
							<td><?php echo "Rs :".$highlight_pen_price ;?></td>
							<td><?php echo $highlight_pen;?></td>
						</tr>
						<tr><td>6</td>
							<td>Pencil</td>
							<td><?php echo "Rs :".$pencil_price ;?></td>
							<td><?php echo $pencil;?></td>
						</tr>

						<tr><td>7</td>
							<td>Eracer</td>
							<td><?php echo "Rs :".$eraser_price ;?></td>
							<td><?php echo $eraser;?></td>
						</tr>

						<tr><td>8</td>
							<td>Cutter</td>
							<td><?php echo "Rs :".$cutter_price ;?></td>
							<td><?php echo $cutter;?></td>
						</tr>

						<tr><td>9</td>
							<td>Pencil-Box</td>
							<td><?php echo "Rs :".$pencil_box_price ;?></td>
							<td><?php echo $pencil_box;?></td>
						</tr>

						<tr><td>10</td>
							<td>Glue-bottle</td>
							<td><?php echo "Rs :".$glue_price ;?></td>
							<td><?php echo $glue;?></td>
						</tr>

						<tr><td>11</td>
							<td>Sellotape</td>
							<td><?php echo "Rs :".$sellotape_price ;?></td>
							<td><?php echo $sellotape;?></td>
						</tr>

						<tr><td>12</td>
							<td>Stepler</td>
							<td><?php echo "Rs :".$stepler_price ;?></td>
							<td><?php echo $stepler;?></td>
						</tr>

						<tr><td>13</td>
							<td>Stepler Pin</td>
							<td><?php echo "Rs :".$stepler_pin_price ;?></td>
							<td><?php echo $stepler_pin;?></td>
						</tr>

					</table>
				</div><!-- table -->
				<div class="top">
					<form action="update.php" class="top2" method="POST">
					<h4>Item:</h4><br><input type="text" name="item2" placeholder="Item">
					<h4>Quentity:</h4><br><input type="number" name="quentity2" placeholder="Quentity"><br>
					<button>Update</button>
					</form>
				</div> <!-- top -->
			</div> <!-- cr -->
		</div><!-- books -->



<!--list Item 2-->
		<div class="books clearfix">
			<div class="cr clearfix">
				<h2>A4/MARKER/RULER/ETC </h2>
				
				<div class="table">
					<table>
						<tr><th>Id</th>
							<th>Items</th>
							<th>Price</th>
							<th>Availabe</th>
						</tr>
						<tr><td>1</td>
							<td>Rubber Stamp</td>
							<td><?php echo "Rs :". $blue_pen_price1 ;?></td>
							<td><?php echo $blue_pen1;?></td>
						</tr>
						<tr><td>2</td>
							<td>Push Pin</td>
							<td><?php echo "Rs :".$black_pen_price1 ;?></td>
							<td><?php echo $black_pen1;?></td>
						</tr>
						<tr><td>3</td>
							<td>Paper Clips</td>
							<td><?php echo "Rs :". $red_pen_price1 ?></td>
							<td><?php echo $red_pen1;?></td>
						</tr>
						<tr><td>4</td>
							<td>Marker</td>
							<td><?php echo "Rs :".$color_pen_price1 ;?></td>
							<td><?php echo $color_pen1;?></td>
						</tr>
						<tr><td>5</td>
							<td>Bulldog Clips</td>
							<td><?php echo "Rs :".$highlight_pen_price1 ;?></td>
							<td><?php echo $highlight_pen1;?></td>
						</tr>
						<tr><td>6</td>
							<td>Calculater</td>
							<td><?php echo "Rs :".$pencil_price1 ;?></td>
							<td><?php echo $pencil1;?></td>
						</tr>

						<tr><td>7</td>
							<td>Scissors</td>
							<td><?php echo "Rs :".$eraser_price1 ;?></td>
							<td><?php echo $eraser1;?></td>
						</tr>

						<tr><td>8</td>
							<td>Note Book</td>
							<td><?php echo "Rs :".$cutter_price1 ;?></td>
							<td><?php echo $cutter1;?></td>
						</tr>

						<tr><td>9</td>
							<td>A4 Paper</td>
							<td><?php echo "Rs :".$pencil_box_price1 ;?></td>
							<td><?php echo $pencil_box1;?></td>
						</tr>

						<tr><td>10</td>
							<td>Envelop</td>
							<td><?php echo "Rs :".$glue_price1 ;?></td>
							<td><?php echo $glue1;?></td>
						</tr>

						<tr><td>11</td>
							<td>Ruler</td>
							<td><?php echo "Rs :".$sellotape_price1 ;?></td>
							<td><?php echo $sellotape1;?></td>
						</tr>

						<tr><td>12</td>
							<td>Sticky Notes</td>
							<td><?php echo "Rs :".$stepler_price1 ;?></td>
							<td><?php echo $stepler1;?></td>
						</tr>

						<tr><td>13</td>
							<td>Full Scape Paper</td>
							<td><?php echo "Rs :".$stepler_pin_price1 ;?></td>
							<td><?php echo $stepler_pin1;?></td>
						</tr>

					</table>
				</div><!-- table -->
				<div class="top">
					<form action="update.php" class="top2" method="POST">
					<h4>Item:</h4><br><input type="text" name="item3" placeholder="Item">
					<h4>Quentity:</h4><br><input type="number" name="quentity3" placeholder="Quentity"><br>
					<button>Update</button>
					</form>
				</div> <!-- top -->
			</div> <!-- cr -->
		</div><!-- books -->

<!-- Binding -->

		<div class="books clearfix">
			<div class="cr">
				<h2>BINDUNG</h2>
				
				<div class="table">
					<table>
						<tr><th>Id</th>
							<th>Type</th>
							<th>Price</th>
							<th>Availabe</th>
						</tr>
						<tr><td>1</td>
							<td>Case Binding</td>
							<td><?php echo "Rs :".$case_bind_price;?></td>
							<td><?php echo $case_bind;?></td>
						</tr>
						<tr><td>2</td>
							<td>Spiral Binding</td>
							<td><?php echo "Rs :".$spiral_price;?></td>
							<td><?php echo $spiral;?></td>
						</tr>
						<tr><td>3</td>
							<td>Perfect Binding</td>
							<td><?php echo "Rs :".$perfect_price;?></td>
							<td><?php echo $perfect;?></td>
						</tr>
						<tr><td>4</td>
							<td>Saddle Stitch Binding</td>
							<td><?php echo "Rs :".$saddle_price;?></td>
							<td><?php echo $saddle;?></td>
						</tr>
						<tr><td>5</td>
							<td>Thermal Binding</td>
							<td><?php echo "Rs :".$thermal_price;?></td>
							<td><?php echo $thermal;?></td>
						</tr>
					</table>
				</div><!-- table -->
				<div class="top">
					<form action="update.php" class="top1" method="POST">

					<h4>Item:</h4><br><input type="text" name="item4" placeholder="Item">
					<h4>Quentity:</h4><br><input type="number" name="quentity4" placeholder="Quentity"><br>
					<button>Update</button>
					</form>
				</div> <!-- top -->
			</div> <!-- cr -->
		</div><!-- books -->

	<div class="footer clearfix">
			<h5>Created By Tiran Jayasekara</h5>
			<h6>Contact Us 0714055143</h6>
		</div><!--  footer -->

		</div> <!-- background -->
	</div><!--wrapper-->

</body>
</html>


