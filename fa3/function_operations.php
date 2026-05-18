<?php
function my_function($param1, $param2, $param3) {
    $addition = $param1 + $param2 + $param3;
    $subtraction = $param1 - $param2 - $param3;
    $multiplication = $param1 * $param2 * $param3;
    $division = $param1 / $param2 / $param3;

    return [
        "addition" => $addition,
        "subtraction" => $subtraction,
        "multiplication" => $multiplication,
        "division" => $division
    ];
}

// Hardcoded values
$p1 = 25;
$p2 = 13;
$p3 = 6;

$result = my_function($p1, $p2, $p3);
?>

<!DOCTYPE html>
<html>
<head>
<title>Function Operations</title>

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
        text-align: left;
    }
</style>
</head>

<body>

<h3>Sample Output</h3>

<table>
    <tr>
        <th colspan="2">
            My Parameter values: <?php echo "$p1, $p2, $p3"; ?>
        </th>
    </tr>

    <tr>
        <td>Addition</td>
        <td><?php echo $result['addition']; ?></td>
    </tr>

    <tr>
        <td>Subtraction</td>
        <td><?php echo $result['subtraction']; ?></td>
    </tr>

    <tr>
        <td>Multiplication</td>
        <td><?php echo $result['multiplication']; ?></td>
    </tr>

    <tr>
        <td>Division</td>
        <td><?php echo $result['division']; ?></td>
    </tr>
</table>

</body>
</html>
