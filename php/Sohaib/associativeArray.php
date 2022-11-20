<?php

$modules = array(
    "id" => 0,
    "Math" => 16,
    "Science" => 13,
);

foreach ($modules as $key => $value) {
    echo ($key . ": " . $value . "<br/>");
}

echo "=====================ADD: <br/>";
$modules += [
    "Arabic" => 11
];

foreach ($modules as $key => $value) {
    if ($key === "Math")
        $value = 18;
    echo ($key . ": " . $value . "<br/>");
}

echo "=====================List in List<br/>";
$students = array($modules);

$modules = array(
    "id" => 1,
    "Math" => 11,
    "Science" => 15,
);

array_push($students, $modules);

foreach ($students as $values) {
    foreach ($values as $key => $value)
        echo ($key . ": " . $value . "<br/>");
    echo "==========<br/>";
}

echo "=====================UPDATE: <br/>";
foreach ($modules as $key => $value) {
    if ($key === "Math")
        $value = 18;
    echo ($key . ": " . $value . "<br/>");
}

echo "=====================DELETE: <br/>";
unset($students[1]);

foreach ($students as $values) {
    foreach ($values as $key => $value)
        echo ($key . ": " . $value . "<br/>");
    echo "==========<br/>";
}
