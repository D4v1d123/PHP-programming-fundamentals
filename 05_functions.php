<?php
// Funtions
function sum ($num1, $num2) {
    return $num1 + $num2;
}
echo "\n1 + 2 = " . sum(1, 2) . "\n";

function greeting (string $name) {
    echo "\nHello $name. \n";
}
greeting("Julian");