<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$result = "";

if(isset($_POST['submit'])){

    $fname = trim($_POST['fname']);
    $mname = trim($_POST['mname']);
    $lname = trim($_POST['lname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm = trim($_POST['confirm']);
    $birthday = $_POST['birthday'];
    $email = trim($_POST['email']);
    $contact = trim($_POST['contact']);

    if($password == $confirm){

        $result = "
        <div class='result success'>
            <h2>Registration Details</h2>

            <p><strong>Full Name:</strong> $fname $mname $lname</p>
            <p><strong>Username:</strong> $username</p>
            <p><strong>Password:</strong> $password</p>
            <p><strong>Birthday:</strong> $birthday</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Contact Number:</strong> $contact</p>
        </div>";

    }else{

        $result = "
        <div class='result error'>
            Password and Confirm Password are not the same!
        </div>";

    }

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Registration Module</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{

    background:url('bg.jpg') no-repeat center center fixed;
    background-size:cover;

    min-height:100vh;

    display:flex;
    justify-content:center;
    align-items:center;

    padding:30px;

}

body::before{

    content:"";
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.35);
    z-index:-1;

}

.container{

    width:520px;

    background:rgba(255,255,255,.15);

    backdrop-filter:blur(12px);
    -webkit-backdrop-filter:blur(12px);

    border-radius:18px;

    border:1px solid rgba(255,255,255,.25);

    box-shadow:0 10px 30px rgba(0,0,0,.45);

    color:white;

    padding:35px;

}

h1{

    text-align:center;
    margin-bottom:25px;

}

label{

    display:block;

    margin-top:12px;
    margin-bottom:6px;

    font-weight:bold;

}

input[type=text],
input[type=password],
input[type=email],
input[type=date]{

    width:100%;

    padding:12px;

    border:none;

    border-radius:8px;

    outline:none;

    background:rgba(255,255,255,.20);

    color:white;

    font-size:15px;

}

input::placeholder{

    color:#eee;

}

input:focus{

    background:rgba(255,255,255,.30);

}

input[type=submit]{

    width:100%;

    margin-top:25px;

    padding:13px;

    border:none;

    border-radius:8px;

    background:#00b894;

    color:white;

    font-size:17px;

    cursor:pointer;

    transition:.3s;

}

input[type=submit]:hover{

    background:#019875;

}

.result{

    margin-top:30px;

    padding:20px;

    border-radius:10px;

    background:rgba(255,255,255,.18);

}

.result h2{

    margin-bottom:15px;

}

.result p{

    margin:8px 0;

}

.success{

    border-left:5px solid #2ecc71;

}

.error{

    border-left:5px solid #e74c3c;

    color:#ffd5d5;

    font-weight:bold;

}

</style>

</head>

<body>

<div class="container">

<h1>Registration Module</h1>

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

</div>

</body>
</html>