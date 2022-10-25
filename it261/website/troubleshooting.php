<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Adder Assignment</title>
    <style>       
        p {
        text-align: center;
    }
        h1 {
        color:green;
    }
        h2 {
        font-size:1.5em;
        text-align: center;
    }
        form {
        width:350px;
        margin:0 auto;
        border:1px solid red;
        padding:10px;
    }
        h1 {
        text-align: center;
    }
    </style>
</head>
<body>
    <h1>Adder.php</h1> 
    <form action="" method="post">
        <label>Enter the first number:</label>
        <input type="text" name="num1"><br>
        <label>Enter the second number:</label>
        <input type="text" name="num2"><br>
        <input type="submit" value="Add Em!!">
    </form>
</body>
</html>
<?php     //adder-wrong.php
if (isset($_POST['num1'],
          $_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = $num1 + $num2;
    echo '<h2>You added '. $num1 .' and '.$num2.'</h2>';
    echo '<p style="color:red;"> and the answer is <br>
    '.$myTotal .'!</p>';
    echo '<p><a href="">Reset page</a></p>';
}
?>
 <!-- ERROR LOG -->
<!-- 

// Closing HTML tag was formatted incorrectly, syntax was fixed-- line 40
// No html doctype declaration-- line 1
// No lang attribute in <html> opening tag-- line 2
// Not sure if this counts as an error, but no meta tags in head section -- added line 4-6
// Not sure if this counts as an error, but the page was formatted differently
    I copied the styles from the example-- lines 9-27
// form opening tag had a random slash in it, syntax was fixed-- line 32
// form opening tag should have a separate action and method-- line 32
// form opening tag is missing method="post"-- line 32
// No opening label tag-- line 33
// num1 was accidentally capitalized-- line 34
// Opening <label> tag has a slash in it, and no closing </label> tag-- line 35
// value="Add em!!" is missing a quote-- line 37 
// isset is missing $_POST['$num2']-- line 43
// $num2 was accidentally capitalized-- line 46
// $mytotal should = $num1 + $num2, not -= -- line 46
// '.$num1.' and '.$num2.' were formatted incorrectly, syntax was fixed-- line 47
// Missing a closing </h2> tag-- line 47
// style should be included in opening <p> tag -- line 48
    please note that I kept this style in-line, even though the p tag is selected in my style,
    because I felt that it fit the spirit of fixing syntactical errors. It's redundant, though.
// '.myTotal.' was formatted incorrectly, syntax fixed-- line 49
// Extra single quote after excelmation mark-- line 49
// Missing semicolon, line 50
// Missing closing </p> tag-- line 50
// No closing PHP tag-- line 52

//Finally, I moved the php to the bottom of the document so it would echo below the form--
    if my line numbers don't match up with the assignments, that and the CSS I added are probably why :)
-->