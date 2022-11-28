<?php
	$user="ivan";
	if(isset($user))  //если переменная инициализированна, то true
		echo "существует";
	else
		echo "не существует";
	if(empty($user)) //если переменная пустая, то true
		echo "пустая";
	else
		echo "не пустая";
	echo gettype($user); //Возвращает тип,что был передан в качестве аргумента
?>
