<?php
	class Point {
		public $x;
		public static $y = 120;
	}
	echo Point::$y;


	$first = new Point;
	$first->x = 2;
	$first->y = 4;

	$second=$first;  //передается ссылка, а не сам обьект
	$second->x = 5;
	$second->y = 10;

	echo "<br> x: {$first->x} x: {$second->x} <br>"; // x:5 x:5



	$f = 5;
	$s = &$f;  //в s сейчас ссылка на $f
	$s += 5;
	echo "s = $s";
?>