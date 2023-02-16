<?php
	$number = ['1','2','3'];
	for($i=0;$i<count($number);$i++){
		echo "{$number[$i]}";
	}
	$arr = [
		'auto' => 'Dodge',
		'plane' => 'Il-2'];
	foreach ($arr as $key => $value) {
		// code...
		echo "$key : $value;<br>";
	}

	$transport = [
		'auto' => ['lada','chevrolet'],
		'planes' => ['il-2', 'i-16']
		];
	foreach($transport as $key => $array) {
		echo "$key <br>";
		foreach($array as $key => $value){
			echo "$value <br>";
		}
	}
?>
