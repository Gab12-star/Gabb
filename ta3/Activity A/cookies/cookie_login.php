<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$user = "";
$pass = "";
$message = "";

if(isset($_COOKIE['username'])){
    $user = $_COOKIE['username'];
}

if(isset($_COOKIE['password'])){
    $pass = $_COOKIE['password'];
}

if(isset($_POST['login'])){

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(isset($_POST['remember'])){

        setcookie("username", $username, time()+86400, "/");
        setcookie("password", $password, time()+86400, "/");

        $message = "<p class='success'>Login Successful! Username and Password have been saved.</p>";

    }else{

        setcookie("username","",time()-3600,"/");
        setcookie("password","",time()-3600,"/");

        $message = "<p class='success'>Login Successful!</p>";

    }

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Cookie Login Module</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{

    min-height:100vh;

    display:flex;
    justify-content:center;
    align-items:center;

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

    background:rgba(255,255,255,.15);

    backdrop-filter:blur(12px);
    -webkit-backdrop-filter:blur(12px);

    border-radius:18px;

    border:1px solid rgba(255,255,255,.25);

    box-shadow:0 10px 30px rgba(0,0,0,.45);

    padding:35px;

    color:white;

}

h1{

    text-align:center;
    margin-bottom:25px;

}

label{

    display:block;
    margin-top:15px;
    margin-bottom:8px;

    font-weight:bold;

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

input::placeholder{

    color:#eee;

}

input:focus{

    background:rgba(255,255,255,.30);

}

.remember{

    margin-top:18px;
    margin-bottom:20px;

}

input[type=submit]{

    width:100%;

    padding:12px;

    border:none;

    border-radius:8px;

    background:#00b894;

    color:white;

    font-size:16px;

    cursor:pointer;

    transition:.3s;

}

input[type=submit]:hover{

    background:#019875;

}

.success{

    margin-top:20px;

    text-align:center;

    color:#a8ffb5;

    font-weight:bold;

}

</style>

</head>

<body>

<div class="container">

<h1>Cookie Login</h1>

<form method="POST">

<label>Username</label>

<input
type="text"
name="username"
value="<?php echo htmlspecialchars($user); ?>"
required>

<label>Password</label>

<input
type="password"
name="password"
value="<?php echo htmlspecialchars($pass); ?>"
required>

<div class="remember">

<input type="checkbox" name="remember">

Remember Me

</div>

<input
type="submit"
name="login"
value="Login">

</form>

<?php echo $message; ?>

</div>

</body>
</html>