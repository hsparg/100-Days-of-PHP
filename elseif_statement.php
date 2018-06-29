<?php 
//elseif statement example
$name = 'Arthur Dent';
$day ='Thursday';


if ($name == 'Arthur Dent' && $day == 'Thursday'){
	echo 'I could never get the hang of Thursday.';
}else if ($name == 'Marvin' || $day == 'Wednesday'){
	echo "I've got this terrible pain in all the diodes down my left-hand side.";
} else {
	echo 'Is that really a piece of fairy cake?';
}

// ALWAYS use == when comparing values for equality!
// When you use = you are using an assignment oprand that will assign the a value to your variable. 
