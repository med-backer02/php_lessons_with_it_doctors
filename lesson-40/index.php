<?php
    function recursive($counter){
    	if ($counter>0){
    	    echo $counter-- . "<br>";
            recursive ($counter);
        }else{
        	return;}
        }
    recursive (10);
    
    function outer(){
    	function inner(){
    	    echo "hello world" . "<br>";
        }
    }
    outer ();
    inner();
    
    function first(){
    	return "First function";
    }
    function second(){
    	return "Second function";
    }
    $newFunction=rand(0,1) ? "first" : "second";
    echo $newFunction();
?>