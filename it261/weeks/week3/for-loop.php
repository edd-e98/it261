<?php
// We will demonstrate for loops
// Place PHP inside HTML
// And create a really nifty conversion table for celsius to farenheit
// anatomy of a FOR LOOP: for (variable your're counting, limit on counter, how much your counter is increasing every iteration)

// celcius and farenheit
// farenheit = (celcius * 9/5) + 32;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        table {
            width: 500px;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid lightblue;
        }

        td, th {
            border-collapse: collapse;
            border: 1px solid lightblue;
            padding: 5px;
        }
        h1, h2 {
            text-align: center;
            color: pink;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>My Celsisus / Farenheit Table!</h1>
    <table>
        <tr>
            <th>Celcius</th>
            <th>Farenheit</th>
        </tr>
        <!-- Here's our PHP inside the table!! -->
        <?php
        for ($cel = 0; $cel <= 100; $cel += 5) {
            $far = ($cel * 9/5) + 32;
            echo ('<tr>');
                echo ('<td>'.$cel.' degrees</td>');
                echo ('<td>'.$far.' degrees</td>');
            echo ('</tr>');
        }
        ?>
    </table>
    <h2>This is the kilometer / mileage table I made all on my own!</h2>
    <table>
        <tr>
            <th>Kilometers</th>
            <th>Miles</th>
        </tr>
        <!-- Here's our PHP inside the table!! -->
        <?php
        for ($kilo = 0; $kilo <= 100; $kilo += 5) {
            $mile = $kilo * 0.621371;
            echo ('<tr>');
                echo ('<td>'.$kilo.' kilometers</td>');
                echo ('<td>'.number_format($mile, 2).' miles</td>');
            echo ('</tr>');
        }
        ?>
    </table>
</body>
</html>