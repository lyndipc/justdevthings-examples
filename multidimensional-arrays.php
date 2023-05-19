<?php

$fruits = array(
  array("apple", "banana", "cherry"),
  array("orange", "lemon", "lime"),
  array("grape", "plum", "pear")
);

// Access "lemon"
echo "We've accessed " . $fruits[1][1] . "!\n";

// Append "kiwi" to end of second sub-array
array_push($fruits[1], "kiwi");
print_r($fruits);

// Remove "pear" from third sub-array
unset($fruits[2][2]);
print_r($fruits);

// Loop through $fruits
$rowCount = count($fruits);

for($row = 0; $row < $rowCount; $row++) {
    $columnCount = count($fruits[$row]);

    // Loop through a sub-array of $fruits
    for($col = 0; $col < $columnCount; $col++) {
        echo $fruits[$row][$col] . " ";
    }
    echo "\n";
}   

