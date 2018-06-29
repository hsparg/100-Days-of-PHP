<?php 
//Associative Arrays example

$descriptions = [ 
	'Earth' => 'mostly harmless',
	'Marvin' => ' the paranoid android' 
];

$descriptions['Zaphod'] = 'President of the Imperial Galacti Government';  

//echo $descriptions['Marvin'];

//Inspect the contents of an array with print_r().  
//print_r($descriptions);


//Embedding an associative array into a double quoted string
echo "Earth is described as {$descriptions['Earth']}"; 


/*
 *Arrays store several values to a single variable. Although the valuse don't need to be related 
 *they normally are. Arrays can store any type of values including numbers and even other arrays.
 *Indexed arrays use numbers starting from zero to identify each array element.
 *Associative arrays use a string to identifty each array element. 
 *
