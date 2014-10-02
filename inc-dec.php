<?php 
 
// Set original value
$a = 10;
 
echo "\n";
echo "The original value of \$a is $a.\n";
echo "\n";
 
// ++$a
echo "First, we pre-increment with ++\$a:\n";
echo "\t\$a was $a, and now is " .  ++$a . ".\n";
echo "\n";
 
// $a++
echo "Second, we post-increment with \$a++:\n";
echo "\t\$a was $a, and now is " .  $a++ . ".\n";
echo "\n";
 
// --$a
echo "Third, we pre-decrement with --\$a:\n";
echo "\t\$a was $a, and now is " .  --$a . ".\n";
echo "\n";
 
// $a--
echo "Fourth, we post-decrement with --\$a:\n";
echo "\t\$a was $a, and now is " .  $a-- . ".\n";
echo "\n";
 
echo "The final value of \$a is $a" . ".\n";
echo "\n";
 
?>