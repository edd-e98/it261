<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// This PHP snippet is changing the title and name of the body class
// Depending on which page you are on.
switch (THIS_PAGE) {
    case 'index.php' :
        $title = 'Home Page of our Website Project';
        $body = 'home';
        break;
    case 'about.php' :
        $title = 'About Page of our Website Project';
        $body = 'about inner';
        break;
    case 'daily.php' :
        $title = 'Daily Page of our Website Project';
        $body = 'daily inner';
        break;
    case 'project.php' :
        $title = 'Project Page of our Website Project';
        $body = 'project inner';
        break;
    case 'contact.php' :
        $title = 'Contact Page of our Website Project';
        $body = 'contact inner';
        break;
    case 'gallery.php' :
        $title = 'Gallery Page of our Website Project';
        $body = 'gallery inner';
        break;
    case 'thx.php' :
        $title = 'Thank-You Page for our Contact Form';
        $body = 'thanks inner';
        
}
// This is my navigational array, stolen from week 3
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    './ppl_database/people.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);
//This creates the links for my header, stolen from week 6
function make_links($nav) {
    $my_return = '';
    foreach ($nav as $key => $value) {
        if (THIS_PAGE == $key) {
            $my_return .='<li><a style="color:red;"href="'.$key.'">'.$value.'</a></li>';
        }
        else {
            $my_return .= '<li><a style="color:green" href="'.$key.'">'.$value.'</a></li>';
        } 
    }
    return $my_return;
} //end function
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link href="./css/styles.css" type="text/css" rel="stylesheet">
    <link href="./css/style.css" type="text/css" rel="stylesheet">

</head>
<body class="<?php echo $body; ?>">
    <header>
        <div class="inner-header">
            <a href="index.php"> <img id="logo" src="images/logo.png" alt="PHP logo"> </a>
            <nav> 
                <ul> <?php echo make_links($nav); ?> </ul>
            </nav>
        </div>
        <!-- <nav>
            <ul>
                <li> <a href=" ">Home</a> </li>
                <li> <a href=" ">About</a> </li>
                <li> <a href=" ">Daily</a> </li>
                <li> <a href=" ">Project</a> </li>
                <li> <a href=" ">Contact</a> </li>
                <li> <a href=" ">Gallery</a> </li>
            </ul>
        </nav> -->
        <!-- end inner-header -->
    </header>