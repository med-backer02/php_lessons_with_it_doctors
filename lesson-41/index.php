<?php
function odd(int $number){
	if($number % 2 == 0){
		return false;
		}else{
			return true;
        }
    }
echo odd(57);

function sum(...$items){
	$sum=0;
	for($i=0;$i<count($items);$i++){
		$sum+=$items[$i];
	}
	return $sum;
}
echo sum(1,2,3,4,4,5);
?>
			