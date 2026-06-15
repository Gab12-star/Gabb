<!DOCTYPE html>
<html>
<head>
    <title>POST Form</title>

    <style>
        body {
            font-family: Arial;
            font-size: 14px;
        }

        .form-box {
            width: 360px;
            margin: 60px auto;
        }

        .form-row {
            margin-bottom: 6px;
        }

        label {
            display: inline-block;
            width: 120px;
        }

        input[type="text"] {
            width: 200px;
            height: 20px;
            background-color: #e6e6e6;
            border: 1px solid #888;
        }

        input[type="submit"] {
            margin-left: 120px;
            margin-top: 5px;
        }

        .output {
            margin-top: 15px;
        }
    </style>

    <script>
        function lettersOnly(input) {
            input.value = input.value.replace(/[^a-zA-Z ]/g, '');
        }

        function lettersNumbers(input) {
            input.value = input.value.replace(/[^a-zA-Z0-9 ]/g, '');
        }
    </script>

</head>
<body>

<div class="form-box">

<form method="post">
    <div class="form-row">
        <label>First Name:</label>
        <input type="text" name="firstname" oninput="lettersOnly(this)">
    </div>

    <div class="form-row">
        <label>Middle Name:</label>
        <input type="text" name="middlename" oninput="lettersOnly(this)">
    </div>

    <div class="form-row">
        <label>Last Name:</label>
        <input type="text" name="lastname" oninput="lettersOnly(this)">
    </div>

    <div class="form-row">
        <label>Date of Birth:</label>
        <input type="text" name="dob">
    </div>

    <div class="form-row">
        <label>Address:</label>
        <input type="text" name="address" oninput="lettersNumbers(this)">
    </div>

    <input type="submit" value="Submit">
</form>

<div class="output">
<?php
if ($_POST) {
    echo "First Name: " . $_POST['firstname'] . "<br>";
    echo "Middle Name: " . $_POST['middlename'] . "<br>";
    echo "Last Name: " . $_POST['lastname'] . "<br>";
    echo "Date of Birth: " . $_POST['dob'] . "<br>";
    echo "Address: " . $_POST['address'] . "<br>";
}
?>
</div>

</div>

</body>
</html>
