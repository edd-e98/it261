<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Document</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Celcius Form Converter</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"> 
    <fieldset>
          <label>Enter your Celsius value!</label>  
          <input type ="number" name = "cel">
          <input type = "submit" value =" Convert it! ">
    </fieldset>
    </form>
    <p><a href="">Reset</a></p>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(isset($_POST['cel'])) {
                    $cel = $_POST['cel'];
                    // We will use a new function to make sure our values are integers! intval()
                    $cel_int = intval($cel);
                    $far = ($cel_int*9/5) + 32;

                    if ($cel == NULL) {
                        echo ('<p class="error">Please fill out the celcius value!</p>');
                    }
                    elseif($far <= 32) {
                        echo ('<p>'.$cel_int.' degrees celcius equals '.$far.' degrees farenheit. <br>
                        It\'s pretty cold out there!</p>');
                    }
                    elseif($far <= 45) {
                        echo ('<p>'.$cel_int.' degrees celcius equals '.$far.' degrees farenheit. <br>
                        It\'s getting warmer, but it\'s still glove and hat weather for me!</p>');
                    }
                    elseif($far <= 60) {
                        echo ('<p>'.$cel_int.' degrees celcius equals '.$far.' degrees farenheit. <br>
                        It\'s warmer! You can get away with a long-sleeve t-shirt and jacket.</p>');
                    }
                    elseif($far <= 75) {
                        echo ('<p>'.$cel_int.' degrees celcius equals '.$far.' degrees farenheit. <br>
                        It\'s pretty nice. Time for t-shirts an walks in the park!</p>');
                    }
                    elseif($far <= 90) {
                        echo ('<p>'.$cel_int.' degrees celcius equals '.$far.' degrees farenheit. <br>
                        It\'s nice and warm out. Time for tank tops and shorts!</p>');
                    }
                    else {
                        echo ('<p>'.$cel_int.' degrees celcius equals '.$far.' degrees farenheit. <br>
                        It\'s way too hot. Let\'s go to the beach!</p>');
                    }
                } // end isset
        } // end post
    ?>
</body>
</html>