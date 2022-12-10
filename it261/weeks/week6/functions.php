<?php 
// our functions page
function sayHello() {
    echo'Hello, world! This is a PHP function~!';
}
sayHello();
echo'<h2>Arithmetic</h2>';
function cube($num) {
    $cubing = $num * $num * $num;
    echo $cubing;
}
cube(5);
echo'<h2>Area</h2>';
function area($w, $l) {
    $get_area = $w * $l;
    return $get_area;
}
$get_area = area (5, 12);
echo $get_area;

echo'<h2>Celsius</h2>';
function celsius_converter($cel) {
    $far = ($cel * 9/5) +32;
    echo $far;
}
celsius_converter(100);

echo'<h2>How do we deal with (indexed) arrays?</h2>';
function area_volume($a, $b, $c) {
    $area = $a * $b;
    $volume = $a * $b * $c;
    return array($area, $volume);
}
$my_array = area_volume(10, 5, 20);
echo('This is my area: '.$my_array[0].' <br>');
echo('This is my volume: '.$my_array[1].' <br>');

echo'<h2>Now for the list function!</h2>';
function area_volume2($a, $b, $c) {
    $area = $a * $b;
    $volume = $a * $b * $c;
    return array($area, $volume);
}
list($area, $volume) = area_volume2(5, 10, 30);
echo('This is my area: '.$area.' <br>');
echo('This is my volume: '.$volume.' <br>');

echo'<h2>Navigation, created with make_links</h2>';
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

function make_links($nav) {
    $my_return = '';
    foreach ($nav as $key => $value) {
        if (THIS_PAGE == $key) {
            $my_return .='<li><a style="color:red;"href="'.$key.'">'.$value.'</a></li>';
        } // end if
        else {
            $my_return .= '<li><a style="color:green" href="'.$key.'">'.$value.'</a></li>';
        } //end else
    } //end foreach
    return $my_return;
} //end function
echo make_links($nav);

echo'<h2>The implode function</h2>';
$cars = array('toyota', 'ford', 'subaru', 'audi', 'bmw', 'mercedes', 'lexus');

$my_cars = implode(', ', $cars);
echo $my_cars;

echo'<h2>The logic behind the wines on our form:</h2>';
echo'<p>If post wines is not empty, take post wines and implode them.
Create a new variable named $my_wines. </p>';
?>