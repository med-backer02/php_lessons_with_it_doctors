<?php
    function sum(){
    	global $a;
    	$a=10;
    	return $a;
    }
    $a=5;
    echo sum();
    echo "<br>";
    echo "$a <br>";
    
    function s(){
    	static $b = 0;
        return ++$b;
        }
        echo s() . "<br>";
        echo s() . "<br>";
        echo s() . "<br>";
        echo s() . "<br>";
        
        
    function formatSize($bytes){
        	$kbytes=$bytes/1024;
            $mbytes=$kbytes/1024;
            $gbytes=$mbytes/1024;
            return [$bytes,$kbytes,$mbytes,$gbytes];
            }
    list($bytes,$kbytes,$mbytes,$gbytes)=formatSize(99999999);
    echo "$bytes<br>$kbytes<br>$mbytes<br>$gbytes<br>";

?>