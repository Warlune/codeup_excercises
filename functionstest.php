<?php
echo exec('clear');

// function add($a, $b) {
//     echo $a + $b . PHP_EOL;
// }

// add(5, 4);

//-----------------------------------

// function add($a, $b) {
//     echo $a + $b . PHP_EOL;
// }

// function subtract($a, $b) {
//     echo $a - $b . PHP_EOL;
// }

// function multiply($a, $b) {
//     echo $a * $b . PHP_EOL;
// }

// function divide($a, $b) {
//     echo $a / $b . PHP_EOL;
// }

// function module($a, $b) {
// 	echo $a % $b . PHP_EOL;
// }

// add(3, 6);
// subtract(3, 6);
// multiply(3, 6);
// divide(3, 6);
// module(3, 6);

//====================================

// function compare($a, $b, $strict = true) {
//     if ($strict === true) {
//         echo $a === $b ? 'True' . PHP_EOL : 'False' . PHP_EOL;
//     } else {
//         echo $a == $b ? 'True' . PHP_EOL : 'False' . PHP_EOL;
//     }
// }

// compare(10, "10") ;

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a + $b . PHP_EOL;
    } elseif (is_string($a) && is_numeric($b)) {
        echo "ERROR: $a is not a valid input\n";
    } elseif (is_numeric($a) && is_string($b)) {
    	echo "ERROR: $b is not a valid input\n";
    } else {
    	echo "ERROR: Both arguments must be numbers\n";
    }
}
function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a - $b . PHP_EOL;
    } elseif (is_string($a) && is_numeric($b)) {
        echo "ERROR: $a is not a valid input\n";
    } elseif (is_numeric($a) && is_string($b)) {
    	echo "ERROR: $b is not a valid input\n";
    } else {
    	echo "ERROR: Both arguments must be numbers\n";
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a * $b . PHP_EOL;
    } elseif (is_string($a) && is_numeric($b)) {
        echo "ERROR: $a is not a valid input\n";
    } elseif (is_numeric($a) && is_string($b)) {
    	echo "ERROR: $b is not a valid input\n";
    } else {
    	echo "ERROR: Both arguments must be numbers\n";
    }
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		if (($a == 0) || ($b == 0)) {
	    	echo "ERROR: you cannot divide by zero\n";
	    } else {
	    	echo $a / $b . PHP_EOL;
	    }
    } elseif (is_string($a) && is_numeric($b)) {
        echo "ERROR: $a is not a valid input\n";
    } elseif (is_numeric($a) && is_string($b)) {
    	echo "ERROR: $b is not a valid input\n";
    } else {
    	echo "ERROR: Both arguments must be numbers\n";
    }
}

function module($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a % $b . PHP_EOL;
    } elseif (is_string($a) && is_numeric($b)) {
        echo "ERROR: $a is not a valid input\n";
    } elseif (is_numeric($a) && is_string($b)) {
    	echo "ERROR: $b is not a valid input\n";
    } else {
    	echo "ERROR: Both arguments must be numbers\n";
    }
}

add(3, 6);
subtract(3, 6);
multiply(3, 6);
divide(3, 0);
module(3, 6);














