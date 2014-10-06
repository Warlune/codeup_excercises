<?php
// my constants
define('SIDES_OF_DICE', 50);
$bool = ((bool) rand(0,1));
define('YES_NO' , $bool);
define('MONEY', 150);
//random user data
$anthony = [
	    'age' => mt_rand(1, SIDES_OF_DICE),
	    'human' => YES_NO,
	    'cash' => mt_rand(1, SIDES_OF_DICE)
];

//checking if human or robot
if ($anthony['human']) {
	echo "you are a human\n";
	//changes variable $answer to be checked later
	 $answer = "yes";

} else {
	echo "you are a robot\n"; 
	 ($answer = "no");
}
sleep(1);

$count ='1';
do {
	echo "$count\n";
	$count++;
	sleep(1);
	
} while($count <= 5);

sleep(1);
// checking $answer and verifying your age 
if (($answer === "yes") && ($anthony['age'] >= 18)) {
	echo "you are a human and you are of age\n";
	//making variable to be checked later
	($welcome = true);
	($rwelcome = 10);
} elseif (($answer === "yes") && ($anthony['age'] <= 18)) {
	echo "you are a human and you are not of age\n";
} elseif (($answer === "no") && ($anthony['age'] >= 18)) {
	echo "you are a robot and you are of age\n";
	//making variable to be checked later
	($rwelcome = true);
	($welcome = 10);
} elseif (($answer === "no") && ($anthony['age'] <= 18)) {
	echo "you are a robot and you are not of age\n";
} else {
	echo "ERROR: you are neither a human or robot please retry\n";
}

sleep(2);

$count ='1';
do {
	echo "$count\n";
	$count++;
	sleep(1);
	
} while($count <= 5);

sleep(1);
//checks for the created variables $welcome and $rwelcome and their values
if (($welcome == true) && ($rwelcome === 10)) {
	echo "welcome to the resturant we have a fine selection foods\n";
	//creates a $hum to check later
		$hum = true;
} elseif (($welcome == false) && ($rwelcome === 10)) {
	echo "I am sorry you are not old enough to eat at this place\n";
	//checks welcome variables errors to the else statement
} elseif (($rwelcome == true) && ($welcome === 10)) {
	echo "Welcome to the bolts and oil store\n";
	//creates a $rob to check later
		$rob = true;
} elseif (($rwelcome == false) && ($welcome === 10)) {
	echo "I am sorry you are not able to access this facility\n";
	// errors to else
} else {
	echo "You are not welcome please return when you are of age\n";
	// changes inital cash to false
	($anthony['cash'] = false);
}

sleep(2);

$count ='1';
do {
	echo "$count\n";
	$count++;
	sleep(1);
	
} while($count <= 5);

sleep(1);
//multi-dim array for the menu
$menu = [

	'hmenu' => [
		
		'cheap' => [
			'candy' => '11$',
			'muffin' => '11.25$',
			'soda' => '11.07$'
	 ],
	 	'moderate' => [
	 		'pizza' => '63$',
	 		'burger' => '64$',
	 		'fries' => '62.50$'
	 ],
	 	'expensive' => [
	 		'spegetti' => '127$',
	 		'shark' => '134$'
	 ],
	],

	'rmenu' => [
		
			'cheap' => [
				'nuts' => '11$',
				'bolts' => '11.25$',
				'washers' => '12.07$'
	 ],
		 	'moderate' => [
		 		'steel' => '33$',
		 		'tin' => '34$',
		 		'copper' => '32.50$'
	 ],
		 	'expensive' => [
		 		'silver' => '127$',
		 		'gold' => '134$'
	 ],
	]
];
//checks if your cash has value
if ($anthony['cash'] == true){
	// checks for $hum/$rob and if your money is enough for more expensive food
	if (($hum == true) && ($anthony['cash'] >= 1) || ($anthony['cash'] <= 13)) {
		echo "here is our cheap menu\n";
		print_r($menu['hmenu']['cheap']);
	} elseif (($hum == true) && ($anthony['cash'] >= 14) || ($anthony['cash'] <= 126)) {
		echo "here is our moderate menu\n";
		print_r($menu['hmenu']['moderate']);
	} elseif (($hum == true) && ($anthony['cash'] >= 126) || ($anthony['cash'] <= 150)) {
		echo "Here are our luxuary items\n";
		print_r($menu['hmenu']['expensive']);
	} elseif (($rob == true) && ($anthony['cash'] >= 1) || ($anthony['cash'] <= 13)) {
		echo "here is our scrap materials\n";
		print_r($menu['rmenu']['cheap']);
	} elseif (($rob == true) && ($anthony['cash'] >= 14) || ($anthony['cash'] <= 126)) {
		echo "here are some of out bigger scraps of metal\n";
		print_r($menu['rmenu']['moderate']);
	} elseif (($rob == true) && ($anthony['cash'] >= 127) || ($anthony['cash'] <= 150)) {
		echo "here are our rare metals\n";
		print_r($menu['rmenu']['expensive']);
	} else {
		echo " you are not authorized to be here or see the menu\n";
	}
// doesnt show the menu to people not old enough
} else {
	echo "     \n";
}

sleep(2);

?>
