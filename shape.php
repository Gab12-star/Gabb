<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>
    <style>
        body {
            background-color: #f4f7f6;
            padding: 40px;
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e0e0e0;
        }
        th, td {
            padding: 16px;
            text-align: center;
        }
        th {
            background-color: #2c3e50;
            color: #ffffff;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
            border-bottom: 3px solid #1a252f;
        }
        .header-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            background-color: #3498db;
            color: white;
            padding: 20px;
            letter-spacing: 1px;
            border: none;
        }
        tr:nth-child(even) td {
            background-color: #f9fbfb;
        }
        tr:hover td {
            background-color: #f1f4f6;
        }
        td {
            color: #333333;
            font-size: 15px;
            border-bottom: 1px solid #eeeeeec4;
            vertical-align: middle;
        }
        td:nth-child(1) {
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
            color: #e67e22;
        }
        td:nth-child(2) {
            font-weight: 600;
            color: #2c3e50;
        }
        td:nth-child(3) {
            font-weight: bold;
            color: #27ae60;
            font-size: 16px;
        }
    </style>
</head>
<body>

<?php
function getCubeVolume($s) {
    return pow($s, 3);
}

function getRectangularPrismVolume($l, $w, $h) {
    return $l * $w * $h;
}

function getCylinderVolume($r, $h) {
    return pi() * pow($r, 2) * $h;
}

function getConeVolume($r, $h) {
    return (1/3) * pi() * pow($r, 2) * $h;
}

function getSphereVolume($r) {
    return (4/3) * pi() * pow($r, 3);
}

$cubeVol = getCubeVolume(5);
$rectVol = getRectangularPrismVolume(4, 5, 6);
$cylinderVol = getCylinderVolume(3, 7);
$coneVol = getConeVolume(3, 7);
$sphereVol = getSphereVolume(4);
?>

<table>
    <tr>
        <th colspan="3" class="header-title">Volume of Shapes</th>
    </tr>
    <tr>
        <th style="width: 35%;">Values</th>
        <th style="width: 35%;">Formula</th>
        <th style="width: 30%;">Answer</th>
    </tr>
    <tr>
        <td>s = 5</td>
        <td>V = s<sup>3</sup></td>
        <td><?php echo $cubeVol; ?></td>
    </tr>
    <tr>
        <td>l = 4, w = 5, h = 6</td>
        <td>V = l &times; w &times; h</td>
        <td><?php echo $rectVol; ?></td>
    </tr>
    <tr>
        <td>r = 3, h = 7</td>
        <td>V = &pi; &times; r<sup>2</sup> &times; h</td>
        <td><?php echo round($cylinderVol, 2); ?></td>
    </tr>
    <tr>
        <td>r = 3, h = 7</td>
        <td>V = 1/3 &times; &pi; &times; r<sup>2</sup> &times; h</td>
        <td><?php echo round($coneVol, 2); ?></td>
    </tr>
    <tr>
        <td>r = 4</td>
        <td>V = 4/3 &times; &pi; &times; r<sup>3</sup></td>
        <td><?php echo round($sphereVol, 2); ?></td>
    </tr>
</table>

</body>
</html>