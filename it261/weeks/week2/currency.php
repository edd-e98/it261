<?php
// Conversion Rates
$rubleRate = 0.017;
$poundRate = 1.15;
$canadianRate = 0.76;
$euroRate = 1.00;
$yenRate= 0.0074;

// Amount of money we have
$ruble = 10007;
$pound = 500;
$canadian = 5321;
$euro = 1291;
$yen = 4030;

// Converted totals
$rubleConverted = $ruble * $rubleRate;
$poundConverted = $pound * $poundRate;
$canadianConverted = $canadian * $canadianRate;
$euroConverted = $euro * $euroRate;
$yenConverted = $yen * $yenRate;

// And our total total
$total = $rubleConverted + $poundConverted + $canadianConverted + $euroConverted + $yenConverted;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie-edge">
    <title>My Currency Logic Exercise</title>
    <style>
        * {
            padding:0;
            margin: 0;
            box0sizing: border-box;
        }

        #wrapper {
            width: 500px;
            margin: 30px auto;
        }

        table {
            border: 1px solid orange;
            border-collapse: collapse;
            width: 500px;
        }

        th, td {
            border: 1px solid orange;
            padding: 8px;
        }

        h1, h2, h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <h1>After our whirl-wind travels, we have returned home with the following currency</h1>
        <ul>
            <li>Rubles</li>
            <li>Pound Sterling</li>
            <li>Canadian Dollar</li>
            <li>Euros</li>
            <li>Yens</li>
        </ul>
        <h2>Whatever shall we do?</h2> 
        <table>
            <tr>
                <th colspan="2">Currency</th>
                <th>Dollars</th>
            </tr>
            <tr>
                <th>Rubles</th>
                <td><?php echo $ruble; ?></td>
                <td>$<?php echo ''.number_format($rubleConverted, 2).''; ?></td>
            </tr>
            <tr>
                <th>Pound Sterling</th>
                <td><?php echo $pound; ?></td>
                <td>$<?php echo ''.number_format($poundConverted, 2).''; ?></td>
            </tr><tr>
                <th>Canadian Dollars</th>
                <td><?php echo $canadian; ?></td>
                <td>$<?php echo ''.number_format($canadianConverted, 2).''; ?></td>
            </tr><tr>
                <th>Euros</th>
                <td><?php echo $euro; ?></td>
                <td>$<?php echo ''.number_format($euroConverted, 2).''; ?></td>
            </tr><tr>
                <th>Yens</th>
                <td><?php echo $yen; ?></td>
                <td>$<?php echo ''.number_format($yenConverted, 2).''; ?></td>
            </tr><tr>
                <th>Total</th>
                <td>American Dollars</td>
                <td>$<?php echo ''.number_format($total, 2).''; ?></td>
            </tr>
        </table>
    </div>
    <!-- End Wrapper -->
</body>
</html>