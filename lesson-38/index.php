<?php
    function sum(int $a, int $b) : int {
    	return $a+$b;
    }
    echo sum(1,3);
    echo "<br>";
    function s(&$a){
    	$a=$a+10;
        return $a;
    }
    $b=10;
    echo s($b);
    echo "<br>";
    echo $b;
    echo "<br>";
    
    function sum_($a,$b=10) : int{
    	return $a+$b;
    }
    echo sum_($b);
    echo "<br>";
    
    function outArguments(...$items){
    	foreach($items as $arg){
    	    echo "$arg<br>";
        }
    }
    outArguments("123","1","Hello","world");
    
    function outArgs($a,$b,$c){
    	echo "$a<br>";
        echo "$b<br>";
        echo "$c<br>";
        }
    $items=["item","Php","Python"];
    outArgs(...$items);
    print_r(array_slice($items,2));
?>