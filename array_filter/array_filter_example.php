<?php

// Using array_filter() to remove empty elements from an array
$numbers = [2, 8, 3, 6, 7, 1, 9, 4, 5];

$filteredNumbers = array_filter($numbers, function ($value) {
    return $value > 5;
});

print_r($filteredNumbers);


// Using ARRAY_FILTER_USE_KEY to filter an array based on the keys
$array = array(
    'name' => 'John',
    'age' => 25,
    'country' => 'USA',
    'email' => 'john@example.com'
);

// Filter the array based on the keys
$filtered = array_filter($array, function ($key) {
    return strlen($key) > 3; // Filter keys with length greater than 3
}, ARRAY_FILTER_USE_KEY);

print_r($filtered);


// Using ARRAY_FILTER_USE_BOTH to filter an array based on the keys and values
$fruits = [
    'apple' => 2,
    'banana' => 1,
    'orange' => 3,
    'mango' => 4,
];

$filteredFruits = array_filter($fruits, function ($value, $key) {
    return $value >= 3 && strlen($key) >= 5;
}, ARRAY_FILTER_USE_BOTH);

print_r($filteredFruits);