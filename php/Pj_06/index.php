<?php
// $numbers = array("one", "tow", "three");

// function display($numbers)
// {
//     echo "================================";
//     for ($i = 0; $i < count($numbers); $i++) {

//         echo "<br/>number : " . $numbers[$i] . "<br/>";
//     }
// }

// display($numbers);

// // - push to array 
// array_push($numbers, "four", "five");
// display($numbers);

// // - unshift
// array_unshift($numbers, "zero");
// display($numbers);

// // push anywhere in the array
// array_splice($numbers, 2, 0, 'inserted');
// display($numbers);

// // delete the last element
// array_pop($numbers);
// display($numbers);

// // delete the first element
// array_shift($numbers);
// display($numbers);

// // delete by name
// $diff = array_diff($numbers, array('inserted'));
// echo "================================";
// foreach ($diff as $key => $value) {

//     echo "<br/>number : " . "$key" . " : " . $value . "<br/>";
// }



$note = array(
    "Math" => 10.5,
    "Physic" => 14.5
);

foreach ($note as $key => $value) {
    echo "Module: " . $key . " note: " . $value . "<br/>";
}
