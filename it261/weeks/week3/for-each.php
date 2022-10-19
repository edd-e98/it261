<?php 
// let's start with an array of wines!
echo ('<h2>This will be my wine list!</h2>');
$wines = array (
    'Cabarnet',
    'Merlot',
    'Syrah',
    'Malbec',
    'Red Blend'
);
// Since we can't echo an array, we'll be using a s for-each loop instead!
echo ('<ul>'); //Use an echo to place your HTML
foreach($wines as $key) { //for each value in key
    echo ('<li>'.$key.'</li>'); //echo the key as an item in my ul
}
echo ('</ul>');
echo ('<br>');

echo ('<h2>This will be my movies + shows list, which will have both a key AND a value!</h2>');
$shows = [
    'Apple TV' => 'Severance',
    'Apple TV' => 'For All Mankind',
    'Showtime' => 'City on a Hill',
    'Showtime' => 'Homeland',
    'Movie' => 'Top Gun Maverick',
    'HBO Max' => 'Hacks'
];

echo ('<ul>');
foreach($shows as $key => $value) { 
    echo ('<li><b>'.$key.'</b>: '.$value.'</li>'); 
}
echo ('</ul>');
echo ('<br>');

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
?>