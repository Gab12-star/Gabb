<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog View</title>
    <style>
        .card {
            border: 1px solid black;
            background: #eee;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>

<body>

<h2>Dog Records</h2>

<?php
$result = $conn->query("SELECT * FROM dogs");
$count = 1;

while ($row = $result->fetch_assoc()) {
?>

<div class="card">
    <strong>Dog <?php echo $count++; ?></strong><br>
    Name: <?php echo $row['d_name']; ?><br>
    Breed: <?php echo $row['d_breed']; ?><br>
    Age: <?php echo $row['d_age']; ?><br>
    Address: <?php echo $row['d_add']; ?><br>
    Color: <?php echo $row['d_color']; ?><br>
    Height: <?php echo $row['d_height']; ?><br>
    Weight: <?php echo $row['d_weight']; ?><br>
</div>

<?php } ?>

</body>
</html>