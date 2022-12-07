<?php
	$homepage = file_get_contents("text.txt");
	echo $homepage;
	$date = date("Y-m-d-H-i-s") . ".txt";
	file_put_contents($date, $homepage);
?>