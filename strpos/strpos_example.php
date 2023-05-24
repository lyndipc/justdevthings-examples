<?php

$pos = strpos( "racecar", "car" );
echo "The position of 'car' in 'racecar' is " . $pos . ".\n";

$pos2 = strpos( "banana", "an" );
echo "The position of 'an' in 'banana' is " . $pos2 . ".\n";

$pos3 = strpos( "banana", "an", 2 );
echo "Starting from an index of 2, the position of 'an' in 'banana' is " . $pos3 . ".\n";

$pos4 = strpos("something", "s");
echo "Answer: " . $pos4;

if ($pos4 === 0) {
    echo "It's 0";
} else {
    echo "nope";
}