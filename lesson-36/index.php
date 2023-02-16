<?php
	$array = ['red','blue','gray'];
	echo $array[rand(0,count($array)-1)];

	$length = rand(5, 10);
	$array = [];
	for($i=0;$i<$length;$i++){
		$array[$i] = rand(0, 100);
	}
	sort($array);
	echo "<pre>";
	print_r($array);
	echo "</pre>";

	$array = file('months.txt');
	echo "<pre>";
	print_r($array);
	echo "</pre>";
?>