<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

// foreach ($books as $title => $book) {
// 		foreach ($book as $key => $value) {
// 			echo "$title : $key is $value\n";
// 	    }
// 	    echo "-----------------\n";
// }

// $things = ['cat', 'dog', 'wallabee', true, 13, null];

// foreach ($things as $thing) {
// 	if (strlen($thing) > 3) {
// 		echo "$thing \n";	
// 	}
// }



foreach ($books as $title => $properties) {
	echo "$title ";
	echo $properties['published'] . PHP_EOL;

	if (is_array($properties)) {
		foreach ($properties as $key => $property) {
			echo "\t$key: $property\n";
		}
	}
}