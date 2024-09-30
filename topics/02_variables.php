<?php
// Variables
// Int
$number = 12;

// Double
$decimal = 3.1416;

// String
$message = "This is a string variable.";

// Bool
$status = true;

// Get the type of a variable
echo "'message' is of type " . gettype($message) . "\n";


// Constants
const EARTH_GRAVITY = 9.807;
echo "The earth gravity is " . EARTH_GRAVITY . ".\n";


// Data structure
// Lists
$numbers = [1, '2', 3, 4.5, '5'];
echo "List: " . $numbers[3] . "\n";

// Add an item to the list
array_push($numbers, 6);

// Dictionaries
$contacts = array("Javier" => 3158703291, "Sofía" => 3206743947, "Andrea" => 3105648310);
echo "Javier's number is " . $contacts["Javier"] . ".\n";

// Set
$alphabet = ['a', 'b', 'c', 'd', 'e', 'e', 'c', 'a'];
$setAlphabet = array_unique($alphabet);
print_r($setAlphabet) . "\n";