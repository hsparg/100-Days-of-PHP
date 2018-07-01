<?php 
//Increasing and decreasing a number by one

$number = 5; 
$number++; 
echo $number . '<br>'; 
++$number; 
echo $number . '<br>';


//We would expect the result to be 16, but it is 14. The increment takes place after the calculation!
$result = $number++ * 2;
echo '$result is'. $result. '<br>'; 
echo $number . '<br>'

/*By putting the increment operand in front of the variable we get the result of 16! This is because, we 
 *increment the varibale before  calculating the variable.
 */
 
$result = ++$number * 2;
echo '$result is'. $result. '<br>'; 
echo $number . '<br>'

/*
 * Operator after the variable 
 *   - Value is changed after any other calculation
 *   - Does not affect the calculation
 * 
 * Operator before the variable
 *   - Value is changed first
 *   - New value becomes part of the calculation 
 *
 */


?>
