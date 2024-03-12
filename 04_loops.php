<?php
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