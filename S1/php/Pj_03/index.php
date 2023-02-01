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

//Local Variables
echo "<br>========/ Local Variables /========";

$time = "<br> The date is : ";

function longdate($time, $timestamp)
{
    return $time . date("l F j s Y ", $timestamp);
}

echo longdate($time, time() - 17 * 24 * 60 * 60);
echo $time;



//Global Variables
echo "<br>========/ Global Variables /========";
$GLOBALS['ISLOGGEDIN'] = "True";

function GlobalTest()
{
    echo "<br>" . $GLOBALS["ISLOGGEDIN"] = "false";
}

GlobalTest();


//Static Variables
echo "<br>========/ Static Variables /========";
$GLOBALS['ISLOGGEDIN'] = "True";

function CountTest($Count2 = "mouad")
{
    static $Count = 0;
    echo "<br> $Count";
    $Count = $Count2;
    return $Count;
}

// while (true) {
//     CountTest();
//     if (CountTest() >= 5)
//         break;
// }

CountTest();

function StaticTest($Countable)
{
    echo "<br>" . $Countable;
}

StaticTest(CountTest("anas"));

echo "<br>========/ Superglobal variables /========";
$came_from = htmlentities($_SERVER['HTTP_REFERER']);
echo "<br>" . $came_from;
