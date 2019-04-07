<?php

$arr = [3,6,15,23];
$val = 0;
$num =6;


for($j=0; $j<count($arr); $j++){

	for($i=1; $i <= $arr[$j]; $i++ ){
		if($arr[$j] % $i == 0){
			echo $i ,' ';
		}
	}

echo '<br>'; 

}
?>