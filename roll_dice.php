<?php

define ('SIDES_OF_DICE', 6);  //amount of sides 

$roll = mt_rand(1, SIDES_OF_DICE); //executing a roll of the 6 sides in a random order

echo "You rolled {$roll}\n"; // confermation of roll and output number

