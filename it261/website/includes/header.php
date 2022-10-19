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
        
}

// This is my navigational array, stolen from week 3
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link href="./css/style.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body; ?>">
    <header>
        <div class="inner-header">
            <a href="index.pho"> <img id="logo" src="images/logo.png" alt="PHP logo"> </a>
            
            <nav> 
                <ul> <?php
                    foreach ($nav as $key => $value) {
                        if (THIS_PAGE == $key) {
                            echo ('<li><a style="color:red;"href="'.$key.'">'.$value.'</a></li>');
                        }
                        else {
                            echo ('<li><a style="color:green" href="'.$key.'">'.$value.'</a></li>');
                        }        
                    }
                ?> </ul>
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