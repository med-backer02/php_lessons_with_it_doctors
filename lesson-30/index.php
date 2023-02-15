<?php
	$arr = ['one' => "1", "two" => '2'];
	$transport = [
		'auto' => ['lada', 'chevrolet'],
		'planes' => ['il-2','i-16'],
		'ship' => ['avianosetc','frigant']
	];
	echo "<pre>";
	print_r($transport);
	echo "</pre>";

	echo $transport['auto'][1];
?>
