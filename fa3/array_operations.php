<?php
// Create array of 10 numbers
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 10];
 
// ADDITION
$sum = array_sum($numbers);
 
// SUBTRACTION
$subtraction = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    $subtraction -= $numbers[$i];
}
 
// MULTIPLICATION
$product = 1;
foreach ($numbers as $num) {
    $product *= $num;
}
 
// DIVISION
$division = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] != 0) {
        $division /= $numbers[$i];
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
    <style>
        body {
            font-family: Arial;
        }
        table {
            border-collapse: collapse;
            width: 500px;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>
 
<h3 style="text-align:center;">Sample Output:</h3>
 
<table>
    <tr>
        <th colspan="2">
            Array list: <?php echo implode(", ", $numbers); ?>
        </th>
    </tr>
    <tr>
        <td>Addition</td>
        <td><?php echo $sum; ?></td>
    </tr>
    <tr>
        <td>Subtraction</td>
        <td><?php echo $subtraction; ?></td>
    </tr>
    <tr>
        <td>Multiplication</td>
        <td><?php echo $product; ?></td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php echo $division; ?></td>
    </tr>
</table>
 
</body>
</html>