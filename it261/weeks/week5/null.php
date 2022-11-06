<?php
echo '<h2>First example of "a". It is FALSE, NOT NULL</h2>';
$a = 0;
echo "a is " . is_null($a) ."<br>";

echo '<h2>First example of "b" It is TRUE, NULL</h2>';
$b = null;
echo "b is " . is_null($b) ."<br>";

echo '<h2>First example of "c" It is FALSE, NOT NULL</h2>';
$c = "null";
echo "c is " . is_null($c) ."<br>";

echo '<h2>First example of "d" It is TRUE, NULL</h2>';
$d = NULL;
echo "d is " . is_null($d) ."<br>";
?>