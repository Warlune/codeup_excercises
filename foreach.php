<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $data) {
	if (is_numeric($data)) {
		echo "{$data}\n";
	} elseif (is_string($data)) {
		echo "{$data}\n";
	} elseif (is_float($data)) {
		echo "{$data}\n";
	} elseif (is_bool($data)) {
		echo "{$data}\n";
	} elseif (is_array($data)) {
		echo "{$data}\n";
	} elseif (is_null($data)) {
		echo "{$data}\n";
	}
}