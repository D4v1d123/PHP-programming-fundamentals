<?php

// PHP => PHP Hypertext Preprocessor

// PHP is an interpreted language and it is used on the server side. This is dynamic typed language.

// Frameworks of PHP 
// Laravel => It's easy to use and most used in the development.
// Symfony => It's more advanced than Laravel.
// CodeIgniter

echo "Hello world \n";


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


// Data flows
    // Loops
        // For
        echo "\nFor. \n";
        for ($index = 0; $index < count($numbers); $index++) {
            echo "$index) $numbers[$index] \n";
        } 

        // For each
        echo "\nFor each. \n";
        foreach ($numbers as $number) {
            echo "$number \n";
        }

        // while
        echo "\nWhile. \n";
        $index = 0;
        while ($index < sizeof($numbers)) {
            echo "$index) $numbers[$index] \n";
            $index++;
        }

    //Conditional
    $age = 18;
    if ($age > 0 && $age <= 2) {
        echo "\nIs a baby. \n";
    } else if ($age > 3 && $age < 18) {
        echo "\nIs a children. \n";
    } else if ($age = 18 || $age > 18) {
        echo "\nIs an adult. \n";
    } else {
        echo "\nHe or she does not exist. \n";
    }


// Funtions
function sum ($num1, $num2) {
    return $num1 + $num2;
}
echo "\n1 + 2 = " . sum(1, 2) . "\n";

function greeting (string $name) {
    echo "\nHello $name. \n";
}
greeting("Julian");


//Class
class Person {
    public $id;
    public $name;
    public $phoneNumber;

    function __construct ($id, $name, $phoneNumber) {
        $this -> id = $id;
        $this -> name = $name;
        $this -> phoneNumber = $phoneNumber;
    }
}

//Create a new object
$emiliano = new Person(10052328791, "Emiliano García", 3173206734);

echo "\n";
print_r($emiliano) . "\n";

$emiliano -> name = "Emiliano García Pérez";

echo "\n";
print_r($emiliano) . "\n";