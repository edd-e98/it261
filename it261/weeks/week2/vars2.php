<?php

$name = 'Eddie'; //Initializing Variables
$firstName = 'Eddie';
$lastName = 'Melton';
echo '<br>';

$name .= 'Melton'; //Concatonating one string to the end of another
echo $name;
echo '<br>';

$name = 'Eddie'; //Don't forget the space so it's legible!
$name .= ' Melton';
echo $name;
echo '<br>';

$color ='Pink';
echo $color;
echo '<br>';

echo 'Eddie\'s favorite color is '.$color.'!'; //Use a \ to escape the string!
echo '<br>';

$x = 20;
$y = 5;
$z = $x + $y;
echo $z;
echo '<br>';

$x = 20;
$x += 5; //+= will add the variable to the assigned number!
echo $x;
echo '<br>';

$x = 100;
$x /= 10; //*= will multiply the variable by the assigned number! /= Will divide it!
echo $x;
echo '<br>';

// Real world example!
$product = 120; // We are buying a product worth 120 dollars
$quantity = 5; // We are buying 5 of them
$total = $product * $quantity; // Here's the total
$total *= 1.097; // Here's the total + tax!
echo '<h3>Our product, quantity, and tax exercise</h3>'; //You can echo a header!
echo '<br>';
echo $total;
echo '<br>';

echo '<h3>However, we want our amount to refelct 2 decimal places-- we are using floats and a new function, number_format()!</h3>';
$product = 120; 
$quantity = 5; 
$total = $product * $quantity; 
$total *= 1.097; 
$totalFriendly = number_format($total, 2); //Use a new variable to store our new number-- total, to 2 decimal places
echo 'We have a total of <b>$' . $totalFriendly . ' </b>dollars.'; //More HTML in our echo, fancyyy~
echo '<br>';

$product = 120; 
$quantity = 5; 
$total = $product * $quantity; 
$total *= 1.097; 
echo 'We have a total of <b>$' . number_format($total, 2) . ' </b>dollars.'; //Or, don't use a new variable-- just format it when you echo!
echo '<br>';

echo '<h3>Our second preset function is our date function!</h3>';
echo date('Y'); //this gets you the year!
echo '<br>';
echo date('l'); //LOWERCASE l gets you the day of the week... why.....?
echo '<br>';
echo date('l jS \of F Y h:i:s A'); //In order: Day of the week, day of the month, escape sequence to say 'of', Month, Year, hour:minute:second, AM or PM
date_default_timezone_set('America/Los_Angeles'); //Set the timezone to your computer in prder to get the correct time!
echo '<br>';
echo date('l jS \of F Y h:i A'); //This will match my computer thanks to the timezone set!
echo '<br>';

echo '<h3> Time for an array! </h3>';
echo '<h4>Below is an indexed array!</h4>';

$fruit [] = 'bananas';
$fruit [] = 'cherries';
$fruit [] = 'melon';
$fruit [] = 'kiwi';
$fruit [] = 'oranges';
$fruit [] = 'apples';

// Remember, you can't echo an array! This is just an error messages.
echo $fruit;
echo '<br>';
// Like all arrays, numbering starts at position 0. Position 2 = melon.
echo $fruit[2];
echo '<br>';

// Here's another way to initialize an array!
$fruit = array(
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples'
);

// And yet another way. Using square brackets and no 'array'
$fruit = [
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples'
];

//Here's one way to display an array
print_r($fruit);
echo '<br>';

//Here's another way to display an array-- it will tell you the number of 
var_dump($fruit);
echo '<br>';

echo '<h3>Now we have an associative array!</h3>';
//This array associates a key with a value
$nav = array(
    'index.php' => 'Home', //'key' => 'value'
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

echo '<pre>';
var_dump($nav);
echo '</pre>';

?>