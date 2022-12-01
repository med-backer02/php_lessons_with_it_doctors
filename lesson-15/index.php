<?php
	echo 'Путь к файлу ' . __DIR__ . '<br>';
	class ConstClass {
		const NAME = "str";
	}
	if(defined('ConstClass::NAME')){
		echo "Константа определена";
	} else {
		echo "Константа не определена";
	}
?>