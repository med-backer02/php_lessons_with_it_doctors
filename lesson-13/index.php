<?php
	class Point {
		public $x;
		public static $y = 120;
	}
	echo Point::$y;


	$first = new Point;
	$first->x = 3;
	$first->y = 5;

	$second=clone $first;  //передается клон
	$second->x = 7;
	$second->y = 12;

	echo "<br> x: {$first->x} x: {$second->x} <br>"; // x:2 x:5


	$p = pow(2,8); //256
	echo "<br> {$p} <br>"; 
	echo sqrt(16); //4
	echo "<br>";

	$distance = sqrt(pow($second->x-$first->x,2)+pow($second->y-$first->y,2));
	echo round($distance);
?>