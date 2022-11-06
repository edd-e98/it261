<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Calculator</title>
    <link href="./css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <!--First, create the form.
        Input fields: Name (type:text) Total Miles (type:number) 
        Speed (type:number) Hours per Day (type:number)
        Price of gas (type:radio) Fuel efficiency (type:option) -->
        <form action = "<?php echo( htmlspecialchars($_SERVER['PHP_SELF']));?>" method="post">
        <fieldset>
            <label>What is your name?</label>
            <input type="text" name="name"
            value ="<?php if (isset($_POST['name'])) { echo( htmlspecialchars($_POST['name'])); }?>">

            <label>How many miles will you be travelling?</label>
            <input type="number" name="totalMiles"
            value ="<?php if (isset($_POST['totalMiles'])) { echo( htmlspecialchars($_POST['totalMiles'])); }?>">

            <label>What will be your average driving speed?</label>
            <input type="number" name="mph"
            value ="<?php if (isset($_POST['mph'])) { echo( htmlspecialchars($_POST['mph'])); }?>">

            <label>How many hours will you drive a day?</label>
            <input type="number" name="hoursDay"
            value ="<?php if (isset($_POST['hoursDay'])) { echo( htmlspecialchars($_POST['hoursDay'])); }?>">

            <label>What is the current price of gas?</label>
            <ul>
                <li><input type="radio" name="gasPrice" value="3.00" <?php if(isset($_POST['gasPrice']) && $_POST['gasPrice'] == 3) { echo('checked="checked"'); } ?>>$3.00</li>
                <li><input type="radio" name="gasPrice" value="3.50" <?php if(isset($_POST['gasPrice']) && $_POST['gasPrice'] == 3.5) { echo('checked="checked"'); } ?>>$3.50</li>
                <li><input type="radio" name="gasPrice" value="4.00" <?php if(isset($_POST['gasPrice']) && $_POST['gasPrice'] == 4) { echo('checked="checked"'); } ?>>$4.00</li>
                <li><input type="radio" name="gasPrice" value="4.50" <?php if(isset($_POST['gasPrice']) && $_POST['gasPrice'] == 4.5) { echo('checked="checked"'); } ?>>$4.50</li>
                <li><input type="radio" name="gasPrice" value="5.00" <?php if(isset($_POST['gasPrice']) && $_POST['gasPrice'] == 5) { echo('checked="checked"'); } ?>>$5.00</li>
            <ul>
            
            <label>How many miles per gallon does your vehicle get?</label>
            <select name="efficiency">
                <option value="" NULL <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == NULL) { echo('selected="selected"'); } ?>>Select one</option>
                <option value="10" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 10) { echo('selected="selected"'); } ?>>10</option>
                <option value="15" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 15) { echo('selected="selected"'); } ?>>15</option>
                <option value="20" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 20) { echo('selected="selected"'); } ?>>20</option>
                <option value="25" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 25) { echo('selected="selected"'); } ?>>25</option>
                <option value="30" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 30) { echo('selected="selected"'); } ?>>30</option>
            </select>

            <input type="submit" value="Calculate">
            <p><a href="">Reset it!</a></p>
        </fieldset>
        </form>

    <!--Then comes the PHP: all thoe freaking issets -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name'])) {
            echo ('<p class="error"> Please fill out your name! </p>');
        }

        if (empty($_POST['totalMiles'])) {
            echo ('<p class="error"> Please fill out the number of miles you will be travelling! </p>');
        }

        if (empty($_POST['mph'])) {
            echo ('<p class="error"> Please fill out your average driving speed! </p>');
        }

        if (empty($_POST['hoursDay'])) {
            echo ('<p class="error"> Please fill out how many hours a day you will be driving! </p>');
        }

        if (empty($_POST['gasPrice'])) {
            echo ('<p class="error"> Please fill out the price of gas! </p>');
        }

        if (empty($_POST['efficiency'])) {
            echo ('<p class="error"> Please fill out your vehicle\'s fuel efficiency! </p>');
        }

        if (isset($_POST['name'],
        $_POST['totalMiles'],
        $_POST['mph'],
        $_POST['hoursDay'],
        $_POST['gasPrice'],
        $_POST['efficiency'])) {
            $name = $_POST['name'];
            $totalMiles = floatval($_POST['totalMiles']);
            $mph = floatval($_POST['mph']);
            $hoursDay = floatval($_POST['hoursDay']);
            $gasPrice = floatval($_POST['gasPrice']);
            $efficiency = floatval($_POST['efficiency']);
            // Finally, my least favorite part: the MATH
            // Total travel time hours = Total miles / miles per hour
            // total travel time days = total travel time hours / hours driving per day
            // How many gallons = total miles / fuel efficiency
            // Cost = how many gallons * price of gas
            if ($mph != 0) {
                $travelHours = $totalMiles / $mph;
            }
            else {
                $travelHours = 0;
            }

            if ($hoursDay != 0) {
                $travelDays = $travelHours / $hoursDay;
            }
            else {
                $hoursDay = 0;
            }

            if ($efficiency != 0) {
            $gasGallons = $totalMiles / $efficiency;
            }
            else {
                $gasGallons = 0;
            }
            $gasTotal = $gasGallons * $gasPrice;

            if(!empty($name && $totalMiles && $mph && $hoursDay && $gasPrice && $efficiency)) {
                echo('
                    <div>
                        <h2>Hello, '.$name.'.</h2>
                        <p>You will be travelling a total of '.number_format($travelHours, 2).' hours, taking '.number_format($travelDays, 2).' days.</p>
                        <p>You will be using '.number_format($gasGallons, 2).' gallons of gas, bringing your total to $'.number_format($gasTotal, 2).' dollars.</p>
                    </div>
                ');
            }

        }
    } //end of our POST server request
    ?>
</body>
</html>