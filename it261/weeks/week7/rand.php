<?php
//Using the rand function!

$dice = rand(1, 6);
//Generates a random number between arg1 nd arg2
echo '<p>'.$dice.'</p>';
$dice1 = rand(1, 6);
$dice2 = rand(1, 6);
echo '<p>'.$dice1.' and '.$dice2.'</p>';
echo '<h2>Let\'s add some if/else statements! </h2>';
//If we throw a double 6, then we will win big!
//if we throw any other double, we win!
//If no double, no win
$dice1a = rand(1, 6);
$dice2a = rand(1, 6);
if ($dice1a == 6 && $dice2a == 6) {
    echo '<b>Dice 1: </b>'.$dice1a.'  <b>Dice 2: </b>'.$dice2a.'';
    echo '<h2>You won big!!! WOOHOO!</h2>';
}
else if ($dice1a == $dice2a) {
    echo '<b>Dice 1:</b>'.$dice1a.'  <b>Dice 2:</b>'.$dice2a.'';
    echo '<h2>You won! What a good day!</h2>';
}
else {
    echo '<b>Dice 1:</b>'.$dice1a.'  <b>Dice 2:</b>'.$dice2a.'';
    echo '<h2>Sorry, you didn\'t win.</h2>';
}

echo '<h2>We are going to display some images, using the random function.</h2>';

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4);
$selected_image = ''.$photos[$i].'.jpg';
echo '<img src="images/'.$selected_image.'" alt="$selected_image">';

echo '<h2>Let\'s create a real function now!</h2>';
function random_images($photos) {
    $my_return='';
    $i = rand(0, 4);
    $selected_image = ''.$photos[$i].'.jpg';
    $my_return = '<img src="images/'.$selected_image.'" alt="$selected_image">';
    return $my_return; 
} // end function random_images

echo random_images($photos);
?>