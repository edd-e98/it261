<?php
// If Statements!
// And, If Else statements!
// And, If ElseIf statements!

$temp = 55;
if ($temp <= 60) {
    echo ('It is a semi-warm day!');
} else {
    echo ('It may be getting warmer!');
}
echo ('<br>');

$newTemp = 99;
if ($newTemp <= 60) {
    echo ('It\'s not a very warm day.');
} elseif($newTemp <= 70) {
    echo ('It\'s getting warmer.');
} elseif($newTemp <= 80) {
    echo ('We might be going to the beach!');
}  else {
    echo ('We are for <em>SURE</em> going to the beach!');
}
echo ('<br>');
echo ('<h2>This exercise will be about a salary, a bonus, and sales.</h2>');
// a salary of 95000- annual
// sales need to be above 100,000, you will start making a bonus!
// Over 100,000 = 5% of your salary
// 120,000 = 10% of your salary
// 140,000 = 15% of your salary
// 150,000 = 20% of your salary

$salary = 95000;
$sales = 150000;
// if sales <= 99,999, you don't get a bonus
// if sales is <= 119,999, you get a 5% bonus
// if sales is <= 139,999, you will receive a 10% bonus
// if sales is <= 149,999, you will receive 15%
// else, the bonus is 20%
if ($sales <= 99999) {
    echo ('Sorry, you didn\'t make your bonus!');
} elseif ($sales <= 119999) {
    $salary *= 1.05; //Rather than initialize a new variable, consider that your "salary" is now itself + a 5% bonus!
    echo ('$'.number_format($salary, 2).' dollars');
} elseif ($sales <= 139999) {
    $salary *= 1.10;
    echo ('$'.number_format($salary, 2).' dollars');
} elseif ($sales <= 149999) {
    $salary *= 1.15;
    echo ('$'.number_format($salary, 2).' dollars');
} else {
    $salary *= 1.20;
    echo ('Congrats, you made a 20% bonus! Your annual salary, including bonus, totals $'.number_format($salary, 2).' dollars');
}

?>