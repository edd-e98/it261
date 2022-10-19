<!-- This is our switch.php ExERCISE, not ASSIGNMENT -->
<?php 
// Let's learn about the isset function!
//The isset function is simply asking if something has been set
// This combines well with if/then statements
// $variable = 'this is our variable';
// if (isset($variable)) {
//     echo 'Variable has been set';
// }
// else {
//     echo 'Variable has not been set';
// }
// echo '<br>';

// if (isset($_GET['today'])) { //A new globabl variable GET
//     echo 'Today has been set';
// }
// else {
//     echo 'Today has not been set';
// }

if (isset($_GET['today'])) { //If we have retrieved today...
    $today = $_GET['today']; //Assign it to the variable $today
}
else { //Otherwise....
    $today = date('l'); //Use the date function as a backup!
}

switch ($today) {
    case 'Friday' : 
        $coffee = '<h2>Friday is our pumpkin latte day!</h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'A pumpkin spice latte';
        $content = 'A pumpkin spice latte is a tasty fall treat; like a regular latte with pumpkin flavor added.';
        break;

    case 'Saturday' : 
        $coffee = '<h2>Saturday is our green tea latte day!</h2>';
        $pic = 'greentea.jpg';
        $alt = 'A green tea latte';
        $content = 'A green tea latte is a lot like a regular latte, but made with green tea instead of espresso!';
        break;        
    
    case 'Sunday' : 
        $coffee = '<h2>Sunday is our regular joe day!</h2>';
        $pic = 'coffee.jpg';
        $alt = 'A plain black coffee';
        $content = 'Coffee by itself is very tasty, too. It\'s made by pouring hot water over ground coffee beans.';
        break;  
        
    case 'Monday' : 
        $coffee = '<h2>Monday is our regular latte day!</h2>';
        $pic = 'latte.jpg';
        $alt = 'A latte with foam art of a cute bear';
        $content = 'An italian coffee made with espresso and steamed milk. You can make pretty pictures with the foam!';
        break;

    case 'Tuesday' : 
        $coffee = '<h2>Tuesday is our americano day!</h2>';
        $pic = 'americano.jpg';
        $alt = 'An americano';
        $content = 'An americano is diluted espresso. It\'s the same strength as regular coffee, but with a very different flavor. A lot of my friends like this one.';
        break;

    case 'Wednesday' : 
        $coffee = '<h2>Wednesday is our frappucino day!</h2>';
        $pic = 'frap.jpg';
        $alt = 'A frappucino';
        $content = 'A frappucino is coffee blended with ice. Like a coffee smoothie! They\'re my favorite.';
        break;     

    case 'Thursday' : 
        $coffee = '<h2>Thursday is our tea day!</h2>';
        $pic = 'tea.gif';
        $alt = 'Captain Picard drinking a cup of tea';
        $content = 'Tea isn\'t technically a kind of coffee. But it\'s one of my favorite drinks! It\'s made by pouring hot water over the dried leaves of a camilla plant.';
        break;        
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        #wrapper {
            width: 940px;
            margin: 20px auto;
        }

        h1, h2, img {
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div id= "wrapper">
        <h1>My switch classwork exercise (not daily hw)</h1>
        <?php
        echo $coffee; //Put out our header related to the appropriate coffee, depending on day
        ?>
        <img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>"> <!-- Inserting PHP to get our variables-- remember, echo basically just writes your variable in! -->
        <?php echo $content; ?>

        <h2>Check out our daily specials!</h2>
        <ul>
            <li><a href="switch.php?today=Sunday" >Sunday</a></li> <!--The ? allows you to link to a different version of the page, where the variable $today = *insert day of the week here* -->
            <li><a href="switch.php?today=Monday" >Monday</a></li>
            <li><a href="switch.php?today=Tuesday" >Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday" >Wednesday</a></li>
            <li><a href="switch.php?today=Thursday" >Thursday</a></li>
            <li><a href="switch.php?today=Friday" >Friday</a></li>
            <li><a href="switch.php?today=Saturday" >Saturday</a></li>
        </ul>
    </div>
</body>
</html>