<?php require_once('connection.php')?>
<?php

	$query="SELECT page_40,page_80,page_120,page_160,page_200,page_400 FROM cr_book WHERE id=1";
	$result = mysqli_query($connection,$query);
	
	$page_40=$page_80=$page_120=$page_160=$page_200=$page_400=$price="";
	$cr40available=$cr80available=$cr120available=$cr160available=$cr200available=$cr400available="";
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
	if ($page_40 == 0 || empty($page_40)) {
		 $cr40available= "Out Of Stock";
		
	}else{
		$cr40available= "In Stock";
		
	}


	if ($page_80 == 0 || empty($page_80)) {
		 $cr80available= "Out Of Stock";
		
	}else{
		$cr80available= "In Stock";
		
	}


	if ($page_120 == 0 || empty($page_120)) {
		 $cr120available= "Out Of Stock";
		
	}else{
		$cr120available= "In Stock";
		
	}


	if ($page_160 == 0 || empty($page_160)) {
		 $cr160available= "Out Of Stock";
		
	}else{
		$cr160available= "In Stock";
		
	}


	if ($page_200 == 0 || empty($page_200)) {
		 $cr200available= "Out Of Stock";
		
	}else{
		$cr200available= "In Stock";
		
	}


	if ($page_400 == 0 || empty($page_400)) {
		 $cr400available= "Out Of Stock";
		
	}else{
		$cr400available= "In Stock";
		
	}
?>
<?php

	$query3="SELECT page_40,page_80,page_120,page_160,page_200,page_400 FROM cr_book WHERE id=3";
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

	<?php

	$query4="SELECT page_40,page_80,page_120,page_160,page_200,page_400 FROM cr_book WHERE id=4";
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


<?php

	$query1="SELECT page_40,page_80,page_120,page_160,page_200,page_400 FROM cr_book WHERE id=2";
	$result1 = mysqli_query($connection,$query1);
	
	$page_40_1=$page_80_1=$page_120_1=$page_160_1=$page_200_1=$page_400_1="";
	$cr40_1available=$cr80_1available=$cr120_1available=$cr160_1available=$cr200_1available=$cr400_1available="";
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
	if ($page_40_1 == 0 || empty($page_40_1)) {
		 $cr40_1available= "Out Of Stock";
		
	}else{
		$cr40_1available= "In Stock";
		
	}


	if ($page_80_1 == 0 || empty($page_80_1)) {
		 $cr80_1available= "Out Of Stock";
		
	}else{
		$cr80_1available= "In Stock";
		
	}


	if ($page_120_1 == 0 || empty($page_120_1)) {
		 $cr120_1available= "Out Of Stock";
		
	}else{
		$cr120_1available= "In Stock";
		
	}


	if ($page_160_1 == 0 || empty($page_160_1)) {
		 $cr160_1available= "Out Of Stock";
		
	}else{
		$cr160_1available= "In Stock";
		
	}


	if ($page_200_1 == 0 || empty($page_200_1)) {
		 $cr200_1available= "Out Of Stock";
		
	}else{
		$cr200_1available= "In Stock";
		
	}


	if ($page_400_1 == 0 || empty($page_40_1)) {
		 $cr400_1available= "Out Of Stock";
		
	}else{
		$cr400_1available= "In Stock";
		
	}
?>


<!--Item List 1 available-->
<?php

	$query2 = "SELECT blue_pen,black_pen,red_pen,color_pen,highlight_pen,pencil,eraser,cutter,pencil_box,glue,sellotape,stepler,stepler_pin FROM items WHERE id =1";

	$result2 = mysqli_query($connection,$query2);
	
	$blue_pen=$black_pen=$red_pen=$color_pen=$highlight_pen=$pencil=$eraser=$cutter="";
	$pencil_box=$glue=$sellotape=$stepler=$stepler_pin ="";

	$avvblue_pen=$avvblack_pen=$avvred_pen=$avvcolor_pen=$avvhighlight_pen=$avvpencil=$avveraser=$avvcutter=$avvpencil_box=$avvglue=$avvsellotape=$avvstepler=$avvstepler_pin="";
	
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
	if ($blue_pen == 0  ||  empty($blue_pen)) {
		 $avvblue_pen= "Out Of Stock";
		
	}else{
		$avvblue_pen= "In Stock";
		
	}


	if ($black_pen == 0) {
		 $avvblack_pen= "Out Of Stock";
		
	}else{
		$avvblack_pen= "In Stock";
		
	}


	if ($red_pen == 0) {
		 $avvred_pen= "Out Of Stock";
		
	}else{
		$avvred_pen= "In Stock";
		
	}


	if ($color_pen == 0) {
		 $avvcolor_pen= "Out Of Stock";
		
	}else{
		$avvcolor_pen= "In Stock";
		
	}


	if ($highlight_pen == 0) {
		 $avvhighlight_pen = "Out Of Stock";
		
	}else{
		$avvhighlight_pen = "In Stock";
		
	}


	if ($pencil  == 0) {
		 $avvpencil = "Out Of Stock";
		
	}else{
		$avvpencil = "In Stock";
		
	}

	if ($eraser == 0) {
		 $avveraser = "Out Of Stock";
		
	}else{
		$avveraser = "In Stock";
		
	}

	if ($cutter == 0) {
		 $avvcutter = "Out Of Stock";
		
	}else{
		$avvcutter = "In Stock";
		
	}

	if ($pencil_box == 0) {
		 $avvpencil_box= "Out Of Stock";
		
	}else{
		$avvpencil_box = "In Stock";
		
	}

	if ($glue == 0) {
		 $avvglue= "Out Of Stock";
		
	}else{
		$avvglue = "In Stock";
		
	}

	if ($sellotape== 0) {
		 $avvsellotape= "Out Of Stock";
		
	}else{
		$avvsellotape= "In Stock";
		
	}

	if ($stepler == 0) {
		 $avvstepler= "Out Of Stock";
		
	}else{
		$avvstepler= "In Stock";
		
	}

	if ($stepler_pin == 0) {
		 $avvstepler_pin= "Out Of Stock";
		
	}else{
		$avvstepler_pin= "In Stock";
		
	}
?>

<!--Item List 1 price-->
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


<!--Item List 2 available-->
<?php

	$query6 = "SELECT blue_pen,black_pen,red_pen,color_pen,highlight_pen,pencil,eraser,cutter,pencil_box,glue,sellotape,stepler,stepler_pin FROM items WHERE id =3";

	$result6 = mysqli_query($connection,$query6);
	
	$blue_pen1=$black_pen1=$red_pen1=$color_pen1=$highlight_pen1=$pencil1=$eraser1=$cutter1="";
	$pencil_box1=$glue1=$sellotape1=$stepler1=$stepler_pin1 ="";

	$avvblue_pen1=$avvblack_pen1=$avvred_pen1=$avvcolor_pen1=$avvhighlight_pen1=$avvpencil1=$avveraser1=$avvcutter1=$avvpencil_box1=$avvglue1=$avvsellotape1=$avvstepler1=$avvstepler_pin1="";
	
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
	if ($blue_pen1 == 0  ||  empty($blue_pen)) {
		 $avvblue_pen1= "Out Of Stock";
		
	}else{
		$avvblue_pen1= "In Stock";
		
	}


	if ($black_pen1 == 0) {
		 $avvblack_pen1= "Out Of Stock";
		
	}else{
		$avvblack_pen1= "In Stock";
		
	}


	if ($red_pen1 == 0) {
		 $avvred_pen1= "Out Of Stock";
		
	}else{
		$avvred_pen1= "In Stock";
		
	}


	if ($color_pen1 == 0) {
		 $avvcolor_pen1= "Out Of Stock";
		
	}else{
		$avvcolor_pen1= "In Stock";
		
	}


	if ($highlight_pen1 == 0) {
		 $avvhighlight_pen1 = "Out Of Stock";
		
	}else{
		$avvhighlight_pen1 = "In Stock";
		
	}


	if ($pencil1  == 0) {
		 $avvpencil1 = "Out Of Stock";
		
	}else{
		$avvpencil1 = "In Stock";
		
	}

	if ($eraser1 == 0) {
		 $avveraser1 = "Out Of Stock";
		
	}else{
		$avveraser1 = "In Stock";
		
	}

	if ($cutter1 == 0) {
		 $avvcutter1 = "Out Of Stock";
		
	}else{
		$avvcutter1 = "In Stock";
		
	}

	if ($pencil_box1 == 0) {
		 $avvpencil_box1= "Out Of Stock";
		
	}else{
		$avvpencil_box1 = "In Stock";
		
	}

	if ($glue1 == 0) {
		 $avvglue1= "Out Of Stock";
		
	}else{
		$avvglue1 = "In Stock";
		
	}

	if ($sellotape1 == 0) {
		 $avvsellotape1 = "Out Of Stock";
		
	}else{
		$avvsellotape1 = "In Stock";
		
	}

	if ($stepler1 == 0) {
		 $avvstepler1 = "Out Of Stock";
		
	}else{
		$avvstepler1 = "In Stock";
		
	}

	if ($stepler_pin1 == 0) {
		 $avvstepler_pin1 = "Out Of Stock";
		
	}else{
		$avvstepler_pin1 = "In Stock";
		
	}
?>
<!--Item List 2 price-->
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


<!-- Binding available -->
<?php
	
	$query8 = "SELECT case_bind,spiral,perfect,saddle,thermal FROM binding WHERE id=1";

	$result8 = mysqli_query($connection,$query8);

	$case_bind=$spiral=$perfect=$saddle=$thermal= "";
	$avvcase_bind=$avvspiral=$avvperfect=$avvsaddle=$avvthermal= "";
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

	if ($case_bind == 0) {
		 $avvcase_bind = "Out Of Stock";
		
	}else{
		$avvcase_bind = "In Stock";
		
	}

	if ($spiral == 0) {
		 $avvspiral = "Out Of Stock";
		
	}else{
		$avvspiral = "In Stock";
		
	}

	if ($perfect == 0) {
		 $avvperfect = "Out Of Stock";
		
	}else{
		$avvperfect = "In Stock";
		
	}

	if ($saddle == 0) {
		 $avvsaddle = "Out Of Stock";
		
	}else{
		$avvsaddle = "In Stock";
		
	}

	if ($thermal == 0) {
		 $avvthermal = "Out Of Stock";
		
	}else{
		$avvthermal = "In Stock";
		
	}

?>

<!-- Binding Price -->
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


<?php mysqli_close($connection)?>