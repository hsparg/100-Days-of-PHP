<?php
//Swtich Statment Example

$name = 'Arthur Dent';

switch($name){ 
	case 'Arthur Dent':
		 echo 'I could never get the hang of Thursdays.';
		 break;
	case 'Marvin':
	case 'Paranoid Android':
	case 'robot':
		echo "I've got this terrible pain in all the diodes down my left-hand side."; 
		break;
	default: 
		echo 'Is that really a piece of fairy cake?';

}

//If nothing matches the default is displayed
//'Marvin', 'Paranoid Android', 'robot' all bring back the same result | This is equivalent to the OR operand
//If breaks are not used, everything in the switch statment will be ran. 

