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
        font-family: Arial, sans-serif;
        background-color: white;
    }

    h3 {
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 450px;
        margin: 40px auto;
    }

    th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: green;
        color: white;
    }

    td:first-child {
        font-weight: bold;
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