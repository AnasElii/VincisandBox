<?php
$name = "aninoss";

$String = <<<_END
    So in this small test I'm traying \n there is here a 
    f he is not backing \n but to the line 
    I thing i have to fix it on HTML
    Will F Php anyway 
    To get the best of Multiple
    $name
_END;

echo <<<_END
    So this is anohter test <br>
_END;

define("ROOT_LOCATION", "/Cl/Apache/Server");

echo $String;

echo "<br> Root Location is: " . ROOT_LOCATION . "<br>";

$directory = ROOT_LOCATION;

echo "$directory" . "<br>";

$b = 10;
$b == 10 ? print "TRUE" : print "FALSE";

$time = "<br> The date is : ";

echo longdate($time, time() - 17 * 24 * 60 * 60);

function longdate($time, $timestamp)
{
    return $time . date("l F j s Y ", $timestamp);
}
