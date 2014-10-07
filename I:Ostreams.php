<?php

// write the output
//notice the space after the ?
fwrite(STDOUT, 'What is your first name? ');

//get the input from user
$firstname = fgets(STDIN);


//output the users name
fwrite(STDOUT , "Hello $firstname\n");




// write the output
//notice the space after the ?
fwrite(STDOUT, 'Want to play a game? ');

//get the input from user
$answer = strtolower(trim(fgets(STDIN)));


//output the users name
if($answer = 'yes') {
	fwrite(STDOUT , "Great lets $answer\n");
} else {
	fwrite(STDOUT, "boooooooooo!");
}
