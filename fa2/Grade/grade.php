<!DOCTYPE html>
<html>
<head>
    <title>Grade Ranking Program</title>

    <style>
        body {
            font-family: "Times New Roman", serif;
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .main-box {
            border: 2px solid green;
            padding: 30px;
            width: 700px;
        }

        .name-box {
            border: 1.5px solid green;
            padding: 10px;
            text-align: center;
            font-size: 20px;
            margin-bottom: 30px;
        }

        .content {
            display: flex;
            justify-content: space-between;
        }

        .box {
            border: 1.5px solid green;
            width: 150px;
            height: 120px;
            text-align: center;
            padding-top: 25px;
            font-size: 20px;
        }

        .picture-box {
            border: 1.5px solid green;
            width: 180px;
            height: 160px;
            text-align: center;
            font-size: 70px;
            line-height: 160px;
        }

        .form {
            text-align: center;
            margin-top: 20px;
        }

        input, button {
            margin: 5px;
            font-size: 16px;
        }
    </style>
</head>

<body>

<?php
// ✅ Default values (prevents warnings)
$fname = "";
$mi = "";
$lname = "";
$grade = "";
$rank = "-";
$emoji = "🙂";

// ✅ Only process when form is submitted
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'] ?? "";
    $mi = $_POST['mi'] ?? "";
    $lname = $_POST['lname'] ?? "";
    $grade = $_POST['grade'] ?? "";

    if ($grade >= 93 && $grade <= 100) {
        $rank = "A";
        $emoji = "😍";
    } elseif ($grade >= 90) {
        $rank = "A-";
        $emoji = "😊";
    } elseif ($grade >= 87) {
        $rank = "B+";
        $emoji = "🙂";
    } elseif ($grade >= 83) {
        $rank = "B";
        $emoji = "🙂";
    } elseif ($grade >= 80) {
        $rank = "B-";
        $emoji = "😐";
    } elseif ($grade >= 77) {
        $rank = "C+";
        $emoji = "😐";
    } elseif ($grade >= 73) {
        $rank = "C";
        $emoji = "😕";
    } elseif ($grade >= 70) {
        $rank = "C-";
        $emoji = "😕";
    } elseif ($grade >= 67) {
        $rank = "D+";
        $emoji = "☹️";
    } elseif ($grade >= 63) {
        $rank = "D";
        $emoji = "☹️";
    } elseif ($grade >= 60) {
        $rank = "D-";
        $emoji = "😢";
    } else {
        $rank = "F";
        $emoji = "😭";
    }
}
?>

<div class="main-box">

    <div class="name-box">
        Name:
        <strong>
            <?php echo htmlspecialchars(trim("$fname $mi. $lname")); ?>
        </strong>
    </div>

    <div class="content">
        <div class="box">
            Rank:<br>
            <strong><?php echo $rank; ?></strong>
        </div>

        <div class="box">
            Grade:<br>
            <strong><?php echo $grade; ?></strong>
        </div>

        <div class="picture-box">
            <?php echo $emoji; ?>
        </div>
    </div>

    <div class="form">
        <form method="post">
            <input type="text" name="fname" placeholder="First Name" required>
            <input type="text" name="mi" placeholder="MI" maxlength="1" required>
            <input type="text" name="lname" placeholder="Last Name" required><br>

            <input type="number" name="grade" placeholder="Enter Grade" min="0" max="100" required><br>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

</div>

</body>
</html>