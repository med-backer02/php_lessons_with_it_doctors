<?php
	$str = '14.43';
	$number = 43 - $str; //неявное привидение $str в число
	echo $number;
	echo true;  // неявное привидение true в единицу
	$float = 4.3;
	$integer = (int)$float;  //явное привидение в int
	echo "<br>";
	echo $integer;
?>
