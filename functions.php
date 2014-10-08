<?php

function area_of_rectangle($length, $width) {
	return $length * $width . PHP_EOL;
}

function area_of_triangle($base, $height) {
	return ($base * $height) /2 . PHP_EOL;
}

$rectangle = area_of_rectangle(5,10);
$triangle = area_of_triangle(3,15);
echo $rectangle -$triangle . PHP_EOL;