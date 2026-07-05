<?php
include 'includes/db.php';

$message = "";

if(isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    if($password != $confirm){

        $message = "Password and Confirm Password are not the same.";

    }else{

        $sql = "INSERT INTO users
        (firstname,middlename,lastname,username,password,birthday,email,contact)

        VALUES(
        '$fname',
        '$mname',
        '$lname',
        '$username',
        '$password',
        '$birthday',
        '$email',
        '$contact'
        )";

        if(mysqli_query($conn,$sql)){
            $message = "Registration Successful!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="background-image"></div>

<header>
<h1>Registration Form</h1>
</header>

<main>

<form method="POST">

<label>First Name</label>
<input type="text" name="fname" required>

<label>Middle Name</label>
<input type="text" name="mname" required>

<label>Last Name</label>
<input type="text" name="lname" required>

<label>Username</label>
<input type="text" name="username" required>

<label>Password</label>
<input type="password" name="password" required>

<label>Confirm Password</label>
<input type="password" name="confirm" required>

<label>Birthday</label>
<input type="text" name="birthday" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Contact Number</label>
<input type="text" name="contact" required>

<input type="submit" name="submit" value="Submit">

</form>

<p><?php echo $message; ?></p>

</main>

</body>
</html>
