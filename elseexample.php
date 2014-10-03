<?php

$isRaining = true;
$haveMoney = true;

if ($isRaining) {
	echo "yay it is raining ... do i have money\n";

	if ($haveMoney) {
		echo "I'm buying a new car!\n";
	} else {
		echo 'we broke';
	}

} else {
	echo 'not even raining man';
}