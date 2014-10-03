<?php
// examples below
// $wonLottery = false;
// $isRaining = true;

// if ($wonLottery && $ $isRaining) {
// 	echo "I'm buying a new car!\n";
// }

// $isRaining = false;

// if (is_bool($isRaining)) {
// 	var_dump($isRaining);
// 	echo "{$isRaining} is expected type of boolean\n";
// }

// var_dump(is_bool($isRaining));

// //3rd example
// $isRaining =true;

// if(is_bool($isRaining)) {
// 	echo "WARNING: {$isRaining} is expected type of boolean - unexpected results may occur\n";
// }

$x = 0;
$y = 5;
$z = 10;

if (($x < $y) && ($y < $z)) {
	echo "{$x} is less than {$y} and {$y} is less than {$z}\n";
}

if (($x > $x) || ($x < $z)) {
	echo "{$x} is greater than {$x} or less than {$z}\n";
}

if (($y > $x) || ($y < $z)) {
	echo "{$y} is greater than {$x} or less than {$z}\n";
}

if (($z > $x) || ($z < $z)) {
	echo "{$z} is greater than {$x} or less than {$z}\n";
}

if (($x > $x) && ($x < $z)) {
	echo "{$x} is greater than {$x} and less than {$z}\n";
}

if (($y > $x) && ($y < $z)) {
	echo "{$y} is greater than {$x} and less than {$z}\n";
}

if (($z > $x) && ($z < $z)) {
	echo "{$z} is greater than {$x} and less than {$z}\n";
}
