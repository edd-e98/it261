<?php
function random_images(int $lower, int $upper) {
    $my_return='';
    $i = rand($lower, $upper);
    $selected_image = 'photo'.$i.'.jpg';
    $my_return = '<img src="images/'.$selected_image.'" alt="$selected_image">';
    return $my_return;
}
?>