<?php 
//Alternative Syntax for Conditional Statments

$name = 'Arthur Dent';
$day ='Thursday';


if ($name == 'Arthur Dent' && $day == 'Thursday'):
	echo 'I could never get the hang of Thursday.';
	
elseif ($name == 'Marvin' || $day == 'Wednesday'):
	echo "I've got this terrible pain in all the diodes down my left-hand side.";
	
else :
	echo 'Is that really a piece of fairy cake?';
endif;

// If using this alternative structure, "elseif" and "endif" must be ONE word!
// You only have to use "endif" using this syntax.
