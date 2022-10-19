<?php 
//This is another way to make navigation work with PHP
echo ('<h2>Time for our navigation, which again has both a key and value!</h2>');
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);
//Here we are echoing the array again...
echo ('<ul>');
foreach($nav as $key => $value) { //the array $nav serves as both the $key and the $value
    echo ('<li><a href="'.$key.'">'.$value.'</a></li>'); //the link is the $key, doc.php. the text that shows up on the screen is the $value
}
echo ('</ul>');
echo ('<br>');

echo ('<h2>Our navigation will display a different color when on the index.php page~!</h2>');

//We are going to learn about a new thing, constants!
//Constants are just that: CONSTANT across a webpage
//Constants are defined as follows: define('NAME', 'value')
//Useful when, for example, you want to retain a user's name or the charset they use
// The following code means: Whatever page we are on, THIS_PAGE is that
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//let's try something spicy: a for each with an if statement!
echo ('<ul>');
foreach ($nav as $key => $value) {
    if (THIS_PAGE == $key) { //If the page we are currently on is the $key...
        echo ('<li><a style="color:red;"href="'.$key.'">'.$value.'</a></li>'); //Display that link as a different color!
   }
   else { //If the page we are currently on is the $key....
           echo ('<li><a style="color:green" href="'.$key.'">'.$value.'</a></li>'); //use a different color!
       }
}
echo ('/<ul>');
?>