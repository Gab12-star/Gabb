<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['color1'] = $_POST['color1'];
    $_SESSION['color2'] = $_POST['color2'];
    $_SESSION['color3'] = $_POST['color3'];
    $_SESSION['color4'] = $_POST['color4'];
    $_SESSION['color5'] = $_POST['color5'];
}

function getTextColor($bg) {
    $dark = ["black","blue","red","green","purple","brown","navy","gray"];
    return in_array(strtolower($bg), $dark) ? "white" : "black";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>My Favorite Colors</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: linear-gradient(135deg, #667eea, #764ba2); /* SAME */
}

.card {
    width: 420px;
    margin: 60px auto;
    background: rgba(255,255,255,0.9);
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
}

h2 {
    text-align: center;
}

.bar {
    padding: 12px;
    margin: 10px 0;
    border-radius: 6px;
    font-weight: bold;
}
</style>
</head>

<body>

<div class="card">
    <h2>My Favorite Colors</h2>

    <?php
    for ($i = 1; $i <= 5; $i++) {
        $color = $_SESSION["color$i"] ?? "";

        if ($color != "") {
            $bg = strtolower($color);
            $text = getTextColor($bg);

            echo "<div class='bar' style='background:$bg; color:$text;'>
                    Color $i: $color
                  </div>";
        }
    }
    ?>
</div>

</body>
</html>
