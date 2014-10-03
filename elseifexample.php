<?php

// if (false) {

// } elseif(false) {

// } elseif(false) {

// } else {

// }


//else if
// $a = 10;
// $b = 'ten';

// if ($a === $b) {
// 	echo "$a is identical to $b\n";
// } elseif ($a == $b) {
// 	echo "$a is equal to $b\n";
// } else {
// 	echo "{$a} is not equal to or identical to {$b}\n";
// }

$buyerAge = 18;
$friend1Age = 18;
$friends2Age = 17;

if ($buyerAge >= 18) {

	if($friend1Age >= 18 && $friend2Age >= 18){
		echo "allow buyer to buy tickets\n";
	} else {
		echo "still go home\n";
	}
} else {
	echo "go home\n";
}