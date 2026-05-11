 <!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table { border-collapse: collapse; margin: 20px auto; }
        td { width: 30px; height: 30px; text-align: center; border: 1px solid black; font-weight: bold; }
        .yellow { background-color: yellow; }
        .red { background-color: red; }
    </style>
</head>
<body>

<h1 style="text-align: center;">Multiplication Table</h1>

<table>
    <?php
    for ($row = 0; $row <= 9; $row++) {
        echo "<tr>";
        for ($col = 0; $col <= 10; $col++) {
            $result = $row * $col;
            
            // Logic para sa alternating colors
            if (($row + $col) % 2 == 0) {
                $color_class = "yellow";
            } else {
                $color_class = "red";
            }
            
            echo "<td class='$color_class'>$result</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>