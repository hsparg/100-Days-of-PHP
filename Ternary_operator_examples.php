<?php
//Tenary Opertor Example

$answer = 40; 

$result = ($answer == 42) ? 'The answer to the Ultimate Question of Life, the Universe, and Everything' :
'Keep calculating';

echo $result;


//Short-Hand Tenary Operator Example
$unit_cost = 20; 

$wholesale_price = $unit_cost ?: 25; 

echo $wholesale_price;

//PHP evaluates anything other than 0 to be true. 
//In this example $unit_cost is a true value that get assigned to $wholesale_price.
//If $unit_cost was equal to 0, it would be evaluated as False and the $wholesale_price would equal 25.
//A short-hand ternary operator is not a good idea when setting a default value. 


//Short-Hand Tenary Operator Example with a "NULL" value
//This is a null-coalesce operator, which skips over null values without rasing an error. 
//The solution that works in all verisons of PHP to use an if-else conditional statement. 
//Both of these solutions assume that the variable contains the right type of data.

$unit_cost = 20; 

$wholesale_price = $unit_cost ?? 25; 

echo $wholesale_price;
//This only works in php7

// Example of setting a default value in PHP 5
$unit_cost = -1; 
 
if (isset($unit_cost) && unit  cost) { 
	$wholesale_price = $unit_cost; 
} else {
	$wholesale_price = 25; 
}
	
echo $wholesale_price; 
	

