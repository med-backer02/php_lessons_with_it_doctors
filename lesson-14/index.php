<?php
	if(define('NUMBER', 1)){ 
		echo "Константа создана";
	}
	echo NUMBER;
	echo "<br>";
	echo constant("NUMBER");
?>