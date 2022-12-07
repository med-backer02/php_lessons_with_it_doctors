<?php
	$php = "php";
	if(!($php == "c#")){
		echo "истина";
	} else{
		echo "ложь";
	}

	$char = 'PHp';
	if($char == "php" || $char != "c#"){
		?>
		<h1>PHP</h1>
	<?php
	}elseif($char == 'c#'){
		?>
		<h1>C#</h1>
	<?php
	}else {
		?>
		<h1>Неизвестный язык программирования</h1>
		<?php
	}
?>