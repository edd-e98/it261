<?php
/* my varaibles 
don't forget that variables are merely containers for data! */

$name = "Eddie"; /* Eddie is a string, and a very good name */
$name = 'Jess';
echo $name . "<br>";
echo '<br>';

$bodyTemperature = 98; /* 98 is an integer */
$bodyTemperatureNew = 98.6; /* 98.6 is a float */
echo $bodyTemperature . "<br>";
echo $bodyTemperatureNew . "<br>";

echo "My name is $name!" . "<br>";
echo 'My name is $name!' . "<br>"; /* When you echo a string, and you're using a variable, use double quotes! */
echo 'My name is '.$name.'!' . "<br>"; /*Or, you can surround it with '.$variable.', and continue using single quotes */

echo 'The normal body temperature for a human being is '.$bodyTemperatureNew.'.' . '<br>';

$name ='Sharon';
echo $name . '<br>'; /*this will echo Sharon, not Jess! */

$x = 20;
$y = 5;

$z = $x + $y; /* This variable is ASSIGNED to $x + $y, not EQUAL TO */
echo $z . '<br>';
$z = $x * $y;
echo $z . '<br>';
$z = $x / $y;
echo $z . '<br>';

$firstName = 'Eddie';
$lastName = 'Melton';
echo $firstName . ' ' . $lastName . "<br>"; /* Use a dot to concatonate! */
echo "My full name is $firstName $lastName" . "<br>"; /* Add a double quote to display variables with formatting such as spaces!*/
echo 'My full name is '.$firstName.' '.$lastName.'' . "<br>"; /* Or, use the aforementioned escape sequence and single quote combo */



?>