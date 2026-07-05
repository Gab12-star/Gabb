<?php
session_start();
include 'includes/db.php';

$message = "";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query(
        $conn,
        "SELECT * FROM users
        WHERE username='$username'
        AND password='$password'"
    );

    if(mysqli_num_rows($query) > 0){

        $row = mysqli_fetch_assoc($query);

        $_SESSION['user_id'] = $row['id'];

        header("Location: profile.php");
        exit();

    }else{
        $message = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="background-image"></div>

<header>
<h1>Login Form</h1>
</header>

<main>

<form method="POST">

<label>Username</label>
<input type="text" name="username" required>

<label>Password</label>
<input type="password" name="password" required>

<input type="submit" name="login" value="Login">

</form>

<p><?php echo $message; ?></p>

</main>

</body>
</html>