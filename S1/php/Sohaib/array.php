<?php
$number = array("one", "tow", "tree");

array_push($number, "four", "five");
array_unshift($number, "zero");

foreach ($number as $item) {
    echo "number: " . $item . "<br/>";
}

echo "====================<br/>";

array_shift($number);
array_pop($number);
foreach ($number as $item) {
    echo "number: " . $item . "<br/>";
}

echo "====================<br/>";

$lastElement = array_slice($number, -2);

foreach ($lastElement as $item) {
    echo "number: " . $item . "<br/>";
}

echo "====================<br/>";

$diff = array_diff($number, array("one", "four"));

foreach ($diff as $item) {
    echo "number: " . $item . "<br/>";
}

echo "====================<br/>";
