<?php

$user = "";
$pass = "";

if(isset($_COOKIE['username'])){
    $user = $_COOKIE['username'];
}

if(isset($_COOKIE['password'])){
    $pass = $_COOKIE['password'];
}

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($_POST['remember'])){

        setcookie("username",$username,time()+86400,"/");
        setcookie("password",$password,time()+86400,"/");
    }

    echo "<script>alert('Login Successful!');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Login</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="background-image"></div>

<header>
    <h1>Cookie Login Module</h1>
</header>

<main>

    <form method="POST">

        <label>Username</label>
        <input type="text"
               name="username"
               value="<?php echo $user; ?>">

        <label>Password</label>
        <input type="password"
               name="password"
               value="<?php echo $pass; ?>">

        <input type="checkbox" name="remember">
        Remember Me

        <br><br>

        <input type="submit"
               name="login"
               value="Submit">

    </form>

</main>

</body>
</html>