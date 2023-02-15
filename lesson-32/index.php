<?php
	$x = 5;
	$y = 6;
	echo "do" . "<br>";
	echo "x = " . $x . "<br>";
	echo "y = " . $y . "<br>";
	list($x, $y) = [$y, $x];

	echo "posle" . "<br>";
	echo "x = " . $x . "<br>";
	echo "y = " . $y . "<br>";


?>
