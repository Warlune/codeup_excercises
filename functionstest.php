<?php
echo exec('clear');

// function add($a, $b) {
//     echo $a + $b . PHP_EOL;
// }

// add(5, 4);


function add($a, $b) {
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b) {
    echo $a - $b . PHP_EOL;
}

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;
}

function divide($a, $b) {
    echo $a / $b . PHP_EOL;
}

function module($a, $b) {
	echo $a % $b . PHP_EOL;
}

add(3, 6);
subtract(3, 6);
multiply(3, 6);
divide(3, 6);
module(3, 6);