<!DOCTYPE html>
<html>
		<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
  <?php

	for ($a = 0; $a < 12; $a++) {
//massive with 6 colors
 $color = [
"#000000", 
"#607D8B", 
"#708090", 
"#8B4513", 
"#F4A460", 
"#FFEBCD"
 ];
	$c = rand(0,5); //getting random number for $color massive
	$get = $color[$c]; //putting $c 
		
//replacing 12 squares css code with php
$html .= ".square".$a." {
	height: 50px;
	width: 50px;
	background-color:".$get."}";
} 
	echo $html;
	
?>
	</style>
		</head>
	<body>
<?php

//putting html, css code 12 times to create 12 squares
for ($b = 0; $b < 12; $b++) {
	echo "<div class='square".$b."'></div>";
}
?>
	</body>
</html>
