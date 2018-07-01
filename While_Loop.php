<?php
//initialize counter 
$i = 0; 

while ($i < 10) {
	//increment counter
	$i++; 
	//processes only even numbers
	if ($i % 2){
		continue;
	}
	echo $i . '<br>';
	//The program ends after $i equals 6 
	if($i == 6) {
		break; 
	}
}
