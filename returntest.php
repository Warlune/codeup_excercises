<?php
echo exec('clear');

// function add($a, $b) {
//     if (is_numeric($a) && is_numeric($b)) {
//         return $a + $b;
//     } else {
//         return null;
//     }
// }

// echo add(15, 3) . PHP_EOL;

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    }
}

$sum = add(6, 7);
echo "The sum of $a and $b is {$sum}\n";
