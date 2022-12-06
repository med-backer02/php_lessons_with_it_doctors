<?php
	if(true){
		echo "истина";
	} else{
		echo "ложь";
	}

	$char = 'c#';
	if($char == "php"){
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