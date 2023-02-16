<?php
	$array = [5=>1,2,3];
	for ($i=0;$i<10;$i++){
		if(isset($array[$i])){
			echo "element is isset \$arr[$i] <br>";
		}else {
			echo "element is not isset \$arr[$i] <br>";
		}
	}
	if (is_array($array)){
		echo "its a array <br>";
	}
	if (in_array(2, $array)){
		echo "2 find in array,<br>";
	}else {
		echo "2 isnt find in array<br>";
	}
	if(array_key_exists(5, $array)) {
		echo "key 5 find in keys of \$array<br>";
	}
	else{
		echo "key 5 isnt find in keys of \$array<br>";
	}
	echo array_search(2, $array) . "<br>";
	unset($array[6]);
	echo "<pre>";
	print_r($array);
	echo "</pre>";
?>