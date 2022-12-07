<?php
	$char = "php";
	switch($char) {
		case "php":
			?>
			<h1>PHP</h1>
			<?php
			break;
		case "js":
			?>
			<h1>Java Script</h1>
			<?php
			break;
		case "C#":
			?>
			<h1>C#</h1>
			<?php
			break;
		default:
			?>
			<h1>DEFAULT</h1>
			<?php
			break;
	}

	$number = 15;
	switch(true){
		case($number > 0):
			echo "number > 0";
			break;
		case($number < 0):
			?>
			<h1>Number < 0</h1>
			<?php
			break;

	}
?>