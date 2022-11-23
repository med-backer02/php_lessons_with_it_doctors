<?php
	echo "first file<br>";
	include "second.php";
	require "second.php";  # если использовать require, то при несуществовании файла будет ошибка
?>
