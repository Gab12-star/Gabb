<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Input Favorite Colors</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: linear-gradient(135deg, #667eea, #764ba2);
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

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin: 6px 0;
    border-radius: 6px;
    border: 1px solid #ccc;
}

button {
    width: 100%;
    margin-top: 12px;
    padding: 10px;
    border: none;
    border-radius: 6px;
    background: #667eea;
    color: white;
    cursor: pointer;
}

button:hover {
    background: #5a67d8;
}
</style>
</head>

<body>

<div class="card">
    <h2>Enter Your Favorite Colors</h2>

    <!-- ✅ NEW TAB -->
    <form method="POST" action="ResultColors.php" target="_blank">
        <input type="text" name="color1" placeholder="Favorite Color 1">
        <input type="text" name="color2" placeholder="Favorite Color 2">
        <input type="text" name="color3" placeholder="Favorite Color 3">
        <input type="text" name="color4" placeholder="Favorite Color 4">
        <input type="text" name="color5" placeholder="Favorite Color 5">

        <button type="submit">Send Colors</button>
    </form>
</div>

</body>
</html>
