<?php
	$massiv = ['1',2];
	$massiv_h = ['adfs','add'];
	$massiv_2 = [4,'5'];
	$massiv_3 = array_merge($massiv,$massiv_2, $massiv_h);
	echo "<pre>";
	print_r($massiv_3);
	echo "</pre>";

	echo "<pre>";
	if($massiv == $massiv_h){
		print_r($massiv_h);
	}else{
		print_r($massiv);
	}
	echo "</pre>";
?>
