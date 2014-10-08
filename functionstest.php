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
        return $a + $b . PHP_EOL;
    } elseif (is_string($a) && is_numeric($b)) {
        return "ERROR: $a is not a valid input\n";
    } elseif (is_numeric($a) && is_string($b)) {
    	return "ERROR: $b is not a valid input\n";
    } else {
    	return "ERROR: Both arguments must be numbers\n";
    }
}
function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b . PHP_EOL;
    } elseif (is_string($a) && is_numeric($b)) {
        return "ERROR: $a is not a valid input\n";
    } elseif (is_numeric($a) && is_string($b)) {
    	return "ERROR: $b is not a valid input\n";
    } else {
    	return "ERROR: Both arguments must be numbers\n";
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b . PHP_EOL;
    } elseif (is_string($a) && is_numeric($b)) {
        return "ERROR: $a is not a valid input\n";
    } elseif (is_numeric($a) && is_string($b)) {
    	return "ERROR: $b is not a valid input\n";
    } else {
    	return "ERROR: Both arguments must be numbers\n";
    }
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		if ($b == 0) {
	    	return " \n";
	    } else {
	    	return $a / $b . PHP_EOL;
	    }
    } elseif (is_string($a) && is_numeric($b)) {
        return "ERROR: $a is not a valid input\n";
    } elseif (is_numeric($a) && is_string($b)) {
    	return "ERROR: $b is not a valid input\n";
    } else {
    	return "ERROR: Both arguments must be numbers\n";
    }
}

function module($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a % $b . PHP_EOL;
    } elseif (is_string($a) && is_numeric($b)) {
        return "ERROR: $a is not a valid input\n";
    } elseif (is_numeric($a) && is_string($b)) {
    	return "ERROR: $b is not a valid input\n";
    } else {
    	return "ERROR: Both arguments must be numbers\n";
    }
}

echo add(3, 6);
echo subtract(3, 6);
echo multiply(3.3, 6);
echo divide(3.3, 6.5);
echo module(3, 6);

//---------------------------------------------
// Thomas function
// <?php
 
// function add($a, $b) {
//     validateInput($a, $b);    
//     echo $a + $b . PHP_EOL;
// }
 
// function subtract($a, $b) {
//     validateInput($a, $b);
//     echo $a - $b . PHP_EOL;
// }
 
// function multiply($a, $b) {
//     validateInput($a, $b);
//     echo $a * $b . PHP_EOL;
// }
 
// function divide($a, $b) {
//     validateInput($a, $b);
    
//     if ($b == 0) {
//         genError($a, $b);
//     }    
 
//     echo $a / $b . PHP_EOL;
// }
 
// function modulus($a, $b) {
//     validateInput($a, $b);
//     echo ($a % $b) . PHP_EOL;
// }
 
// function validateInput($a, $b) {
//     if (is_numeric($a) && is_numeric($b)) {
//         echo "Validation passed." . PHP_EOL;
//     } else {
//         genError($a, $b);
//     }
// }
 
// function genError($a, $b) {
//     echo "Error: Please input only numeric values. Note that you entered $a for \$a, and $b for \$b. \n";
//     exit(0);
// }
 
 
// echo "Adding..." . PHP_EOL;
// add(4,5);
// add("this", 10);
 
// sleep(2);
 
// echo "Subtracting..." . PHP_EOL;
// subtract(100, 40);
// subtract("elephants", 15);
 
// sleep(2);
 
// echo "Multiplying..." . PHP_EOL;
// multiply(5, 5);
// multiply('?', 18);
 
// sleep(2);
 
// echo "Dividing..." . PHP_EOL;
// divide(150,0);
// divide('robust', 'auspicious');
 
// sleep(2);
 
// echo "Modulus - ing? ..." . PHP_EOL;
// modulus(60, 7);
// modulus('rhino', 'jupiter');
 















