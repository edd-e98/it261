<?php
// We're making a currency table! Here's the logic behind that
// 1 ruble = 0.017 AD
// 1 pound sterling = 1.15 AD
// 1 canadian dollar = 0.76 AD
// 1 euro = 1.00 AD
// 1 yen = 0.0074 AD

// rubles = 10007 = $170.19
// pound sterling = 500 = $575
// canada = 5000 = $3000
// euros = 1200 = $1200
// yen = 2000 = $14.88

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
        <h1>After our whirl-wind stravels, we have returned home with the following currency</h1>
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
                <td>10007</td>
                <td>170.19</td>
            </tr>
            <tr>
                <th>Pound Sterling</th>
                <td>500</td>
                <td>575</td>
            </tr><tr>
                <th>Canadian Dollars</th>
                <td>5000</td>
                <td>3800</td>
            </tr><tr>
                <th>Euros</th>
                <td>1200</td>
                <td>1200</td>
            </tr><tr>
                <th>Yens</th>
                <td>2000</td>
                <td>14.80</td>
            </tr>
        </table>
    </div>
    <!-- End Wrapper -->
</body>
</html>