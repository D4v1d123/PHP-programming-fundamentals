<?php
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