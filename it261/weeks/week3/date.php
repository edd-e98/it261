<?php
echo (date ('Y'));
echo ('<br>');

echo (date ('l, F j, Y H:i A')); //Remember, this is Day of Week, Month, Day of Month, Year, Hour, Minute, and AM/PM
echo ('<br>');

date_default_timezone_set('America/Los_Angeles'); //This sets the timezone to LA
echo (date ('l, F j, Y H:i A'));
echo ('<br>');

$name = 'Eddie';
$ourTime = date('H:i A');
echo ($ourTime);

// We're going to use military time for the following exercise. Why?
// Well, military time is fully sequential; the higher the number, the later in the day it is
// This plays nicely with conditional statements! If time <=12, we know for sure it is morning, for example.

if ($ourTime <= 11) {
    echo ('<h2 style="color:yellow;">Good morning, '.$name.'!</h2>');
    echo('<img src="/images/sun.jpg" alt="sun">');
    echo('<p>It\'s time to get up!</p>');
} elseif ($ourTime <= 17) {
    echo('<h2 style="color:green;">Good afternoon, '.$name.'!</h2>');
    echo('<img src="/images/market.jpg" alt="market">');
    echo('<p>It\'s time to do things today!</p>');
} else {
    echo('<h2 style="color:blue;">Good evening, '.$name.'!</h2>');
    echo('<img src="./images/bed.jpg" alt="sun">');
    echo('<p>It\'s time to go to sleep!</p>');
}

?>