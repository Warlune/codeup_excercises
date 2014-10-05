// <?php

// // define('SIDES_OF_DICE', 50);
// // $bool = ((bool) rand(0,1));
// // define('YES_NO' , $bool);
// define('MONEY', 150);



// $anthony = [
// 	    'age' => mt_rand(1, SIDES_OF_DICE),
// 	    'human' => YES_NO,
// 	    'cash' => mt_rand(1, SIDES_OF_DICE)
// ];


// // if ($anthony['human']) {
// // 	echo "you are a human\n";
// // 	 $answer = "yes";

// } else {
// 	echo "you are a robot\n"; 
// 	 ($answer = "no");
// }


// if (($answer === "yes") && ($anthony['age'] >= 18)) {
// 	echo "you are a human and you are of age\n";
// 	($welcome = true);
// 	($rwelcome = 10);
// } elseif (($answer === "yes") && ($anthony['age'] <= 18)) {
// 	echo "you are a human and you are not of age\n";
// 	($welcome = false); 
// 	($rwelcome = 10);
// } elseif (($answer === "no") && ($anthony['age'] >= 18)) {
// 	echo "you are a robot and you are of age\n";
// 	($rwelcome = true);
// 	($welcome = 10);
// } elseif (($answer === "no") && ($anthony['age'] <= 18)) {
// 	echo "you are a robot and you are not of age\n";
// 	($rwelcome = false);
// 	($welcome = 10);
// } else {
// 	echo "ERROR: you are neither a human or robot please retry\n";
// }

// if (($welcome == true) && ($rwelcome === 10)) {
// 	echo "welcome to the resturant we have a fine selection foods\n";
// 		$hum = true;
// } elseif (($welcome == false) && ($rwelcome === 10)) {
// 	echo "I am sorry you are not old enough to eat at this place\n";
// } elseif (($rwelcome == true) && ($welcome === 10)) {
// 	echo "Welcome to the bolts and oil store\n";
// 		$rob = true;
// } elseif (($rwelcome == false) && ($welcome === 10)) {
// 	echo "I am sorry you are not able to access this facility\n";
// } else {
// 	echo "ERROR: please retry input\n";
// }

$menu = [

	'hmenu' => [
		
		'cheap' => [
			'candy' => '1$',
			'muffin' => '1.25$',
			'soda' => '1.07$'
	 ],
	 	'moderate' => [
	 		'pizza' => '3$',
	 		'burger' => '4$',
	 		'fries' => '2.50$'
	 ],
	 	'expensive' => [
	 		'spegetti' => '27$',
	 		'shark' => '34$'
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

$cheap = ((string) rand($menu['hmenu']['cheap']['nuts'], $menu['hmenu']['cheap']['bolts']));

var_dump($cheap);
// if (($hum == true) && ($cash <= 12)) {
// 	echo 

// }


// ?>
