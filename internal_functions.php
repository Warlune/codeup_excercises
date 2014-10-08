<?php

echo exec('clear');

$var1 = null;
$var2 = '';
$array = array(1, 2, 3);

function set($var1, $var2) {
	switch (isset($var1, $var2)) {
		case true:
			return "\$var1 is set\n";
			break;
		case false:
			//return "\$var1 is not set\n";
			break;
	}
	switch (isset($var1, $var2)) {
		case true:
			return " is empty\n";
			break;
		case false:
			//return "\$var2 is not empty\n";
			break;
	}
}

// function check_set_or_empty($value) {
// 	if(isset($value)) {

// 	}
// }

// check_set_or_empty($var1)
// check_set_or_empty($var2)
echo set(null,'');

$array = serialize($array);

	echo $array . PHP_EOL;

$array = unserialize($array);

	print_r($array) . PHP_EOL;


// set($something);
// set($nothing);
// set($array);
// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results



