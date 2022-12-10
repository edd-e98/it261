<?php 
$statement = 'Presently, I am reading the Looming Tower';
echo $statement;
echo '<br>';
echo substr($statement, 0);
//Susbtring takes three arguments: string, starting point, and length
//Leaving length empty automatically reads until the end. kind of a moot point, usually.
echo '<br>';
echo substr($statement, 1);
echo '<br>';
echo substr($statement, 10);
//If there's nothing in 10, it will move onto 11
echo '<br>';
echo '<h2>Now, I would like to display just the words: "I Am Readng".</h2>';
echo substr($statement, 11, 12);
echo '<h2>What if I would like to display "Looming"?</h2>';
echo substr($statement, -13, 7);
//Start on a NEGATIVE number, to start counting from the BACK of a string
// A positive length will still read from left to right, though!
echo '<br>';
echo substr($statement, 4, 11);
echo '<br>';
echo substr($statement, -20, 2);
echo '<h2>Now for the str_replace function</h2>';
$statement2 = 'Hulu\'s rendition of the Looming Tower is based on the book named the Looming tower!';

echo str_replace('the', 'The', $statement2);
//String replace takes three arguments: please replace arg1 with arg 2, the string to be searched is arg3
