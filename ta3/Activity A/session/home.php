<?php
session_start();

if(!isset($_SESSION['username'])){

header("Location: login.php");
exit();

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>

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

width:400px;

padding:35px;

text-align:center;

background:rgba(255,255,255,.15);

backdrop-filter:blur(12px);

border-radius:18px;

color:white;

box-shadow:0 10px 30px rgba(0,0,0,.45);

}

a{

display:inline-block;

margin-top:25px;

padding:12px 30px;

background:#e74c3c;

color:white;

text-decoration:none;

border-radius:8px;

}

a:hover{

background:#c0392b;

}

</style>

</head>

<body>

<div class="container">

<h1>Home Page</h1>

<h2>Welcome!</h2>

<br>

<p>

Username:

<strong>

<?php echo $_SESSION['username']; ?>

</strong>

</p>

<a href="logout.php">Logout</a>

</div>

</body>
</html>