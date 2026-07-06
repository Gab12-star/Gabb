<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();

$error = "";

if(isset($_POST['login'])){

    $validUser = "user123";
    $validPass = "12345";

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if($username == $validUser && $password == $validPass){

        $_SESSION['username'] = $username;

        header("Location: home.php");
        exit();

    }else{

        $error = "Invalid Username or Password!";

    }

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Session Login</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,Helvetica,sans-serif;
}

body{

display:flex;
justify-content:center;
align-items:center;

height:100vh;

background:url('bg.jpg') no-repeat center center fixed;
background-size:cover;

}

body::before{

content:"";
position:fixed;
inset:0;
background:rgba(0,0,0,.35);
z-index:-1;

}

.container{

width:380px;

padding:35px;

background:rgba(255,255,255,.15);

backdrop-filter:blur(12px);

border-radius:18px;

color:white;

box-shadow:0 10px 30px rgba(0,0,0,.45);

}

h1{

text-align:center;
margin-bottom:25px;

}

label{

display:block;

margin-top:15px;
margin-bottom:8px;

}

input[type=text],
input[type=password]{

width:100%;

padding:12px;

border:none;

border-radius:8px;

background:rgba(255,255,255,.20);

color:white;

outline:none;

}

input[type=submit]{

width:100%;

margin-top:25px;

padding:12px;

background:#00b894;

border:none;

border-radius:8px;

color:white;

cursor:pointer;

}

.error{

margin-top:20px;

text-align:center;

color:#ffb3b3;

font-weight:bold;

}

</style>

</head>

<body>

<div class="container">

<h1>Login Module</h1>

<form method="POST">

<label>Username</label>
<input type="text" name="username" required>

<label>Password</label>
<input type="password" name="password" required>

<input type="submit" name="login" value="Login">

</form>

<?php

if($error!=""){
echo "<p class='error'>$error</p>";
}

?>

</div>

</body>
</html>