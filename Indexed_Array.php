<?php
//Indexed Array Example

//$characters = array('Arthur Dent', 'Ford Prefect', 'Zaphod Beeblebrox');

//Short-hand way to type an array

$characters = ['Arthur Dent', 'Ford Prefect', 'Zaphod Beeblebrox'];
//echo $characters;

//Adding Characters to the array above
$characters[] = 'Marvin';
$characters[] = 'Slartibartfast';

//prints characters and there number in the array
print_r($characters);

// prints the second name in the array
echo $characters[1];
