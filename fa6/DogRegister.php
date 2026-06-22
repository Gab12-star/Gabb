<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Register</title>
    <style>
        body { font-family: Arial; }

        .box {
            width: 300px;
            margin: auto;
            padding: 15px;
            border: 1px solid black;
            background: #eee;
        }

        input, button {
            width: 100%;
            padding: 6px;
            margin-bottom: 8px;
        }
    </style>
</head>

<body>

<div class="box">
<h3>Dog Information</h3>

<form method="POST">
    Name:<input type="text" name="name" required>
    Breed:<input type="text" name="breed" required>
    Age:<input type="text" name="age" required>
    Address:<input type="text" name="address" required>
    Color:<input type="text" name="color" required>
    Height:<input type="text" name="height" required>
    Weight:<input type="text" name="weight" required>

    <button name="save">Save</button>
</form>

<?php
if (isset($_POST['save'])) {

    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs (d_name, d_breed, d_age, d_add, d_color, d_height, d_weight)
            VALUES ('$name','$breed','$age','$address','$color','$height','$weight')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>✅ Saved successfully!</p>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

</div>

</body>
</html>
