<?php
$result = "";

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

    if($password == $confirm){

        $result = "
        <div class='result-box'>
            <h3>Registration Details</h3>
            <p><strong>Full Name:</strong> $fname $mname $lname</p>
            <p><strong>Username:</strong> $username</p>
            <p><strong>Password:</strong> $password</p>
            <p><strong>Birthday:</strong> $birthday</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Contact Number:</strong> $contact</p>
        </div>";
    }
    else{
        $result = "
        <div class='result-box'>
            <p class='error'>
                Password and Confirm Password are not the same!
            </p>
        </div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Module</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="background-image"></div>

<header>
    <h1>Registration Module</h1>
</header>

<main>

    <h2>My Personal Information</h2>

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
        <input type="date" name="birthday" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Contact Number</label>
        <input type="text" name="contact" required>

        <input type="submit" name="submit" value="Submit">

    </form>

    <?php echo $result; ?>

</main>

</body>
</html>