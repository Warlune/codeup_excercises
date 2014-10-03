<?php

$a = 5;
$b = 10;
$c = '10';

if ($a == $b) {
	echo "$a is equal to $b";
}

if ($a != $b) {
	echo "$a is not equal to $b";
	// nesting if top code is false the code nested code wont run
	if ($b !== $c) {
		echo "$a is not identical to $c";
	}
}

?>