<?php
session_start();

$error = "";

if(isset($_POST['login'])){

    $validUser = "user123";
    $validPass = "12345";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $validUser && $password == $validPass){

        $_SESSION['username'] = $username;

        header("Location: home.php");
        exit();
    }
    else{
        $error = "Invalid Username or Password!";
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
    <h1>Login Module</h1>
</header>

<main>

    <h2>Login Form</h2>

    <form method="POST">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <input type="submit" name="login" value="Login">

    </form>

    <p class="error"><?php echo $error; ?></p>

</main>

</body>
</html>