<?php
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