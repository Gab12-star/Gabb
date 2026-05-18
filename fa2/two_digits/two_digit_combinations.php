<!DOCTYPE html>
<html>
<head>
    <title>Two-Digit Decimal Combinations</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background-color: #ffffff;
            border: 2px solid #000;
            padding: 20px;
            width: 700px;
            text-align: center;
        }

        h3 {
            margin-bottom: 15px;
        }

        p {
            font-family: "Courier New", monospace;
            font-size: 14px;
            line-height: 1.6;
            text-align: left;
        }
    </style>
</head>

<body>

<div class="box">
    <h3>Two-Digit Decimal Combinations</h3>

    <p>
    <?php
    for ($i = 0; $i <= 99; $i++) {
        echo str_pad($i, 2, "0", STR_PAD_LEFT) . ", ";
    }
    ?>
    </p>
</div>

</body>
</html>
