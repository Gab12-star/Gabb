<?php
$numbers = [1,2,3,4,5,6,7,8,9,10];

// Addition
$sum = array_sum($numbers);

// Subtraction
$subtraction = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    $subtraction -= $numbers[$i];
}

// Multiplication
$product = 1;
foreach ($numbers as $num) {
    $product *= $num;
}

// Division
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
        font-family: 'Segoe UI', Arial;
        background: linear-gradient(135deg, #74ebd5, #ACB6E5);
        margin: 0;
        padding: 0;
    }

    h3 {
        text-align: center;
        margin-top: 30px;
        color: #333;
    }

    table {
        border-collapse: collapse;
        width: 500px;
        margin: 40px auto;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0,0,0,0.3);
    }

    th {
        background: #4CAF50;
        color: white;
        padding: 12px;
        font-size: 16px;
    }

    td {
        padding: 10px;
        font-size: 15px;
    }

    tr:nth-child(even) {
        background: #f2f2f2;
    }

    tr:hover {
        background: #e0f7fa;
    }

    td:first-child {
        font-weight: bold;
        text-align: left;
        padding-left: 20px;
    }

    td:last-child {
        text-align: center;
    }
</style>
</head>

<body>

<h3>Sample Output</h3>

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
