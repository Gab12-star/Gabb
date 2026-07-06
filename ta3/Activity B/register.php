<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "db_connect.php";

$msg = "";

if (isset($_POST['submit'])) {

    $first_name = trim($_POST['first_name']);
    $middle_name = trim($_POST['middle_name']);
    $last_name = trim($_POST['last_name']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $birthday = $_POST['birthday'];
    $email = trim($_POST['email']);
    $contact_number = trim($_POST['contact_number']);

    if ($password != $confirm_password) {

        $msg = "<span style='color:#ffb3b3;'>Passwords do not match!</span>";

    } else {

        $check = $conn->prepare("SELECT id FROM users WHERE username=? OR email=?");
        $check->bind_param("ss", $username, $email);
        $check->execute();
        $result = $check->get_result();

        if ($result->num_rows > 0) {

            $msg = "<span style='color:#ffb3b3;'>Username or Email already exists.</span>";

        } else {

            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users
            (first_name,middle_name,last_name,username,password,birthday,email,contact_number)
            VALUES (?,?,?,?,?,?,?,?)";

            $stmt = $conn->prepare($sql);

            $stmt->bind_param(
                "ssssssss",
                $first_name,
                $middle_name,
                $last_name,
                $username,
                $hash,
                $birthday,
                $email,
                $contact_number
            );

            if ($stmt->execute()) {

                $msg = "<span style='color:#a8ffb5;'>Registration Successful!</span><br><br>
                        <a href='login.php' style='color:white;'>Proceed to Login</a>";

            } else {

                $msg = "<span style='color:#ffb3b3;'>".$stmt->error."</span>";

            }

            $stmt->close();
        }

        $check->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration</title>

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
    min-height:100vh;
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

.box{
    width:420px;
    background:rgba(255,255,255,.15);
    backdrop-filter:blur(12px);
    border-radius:20px;
    padding:30px;
    color:white;
    border:1px solid rgba(255,255,255,.25);
}

h2{
    margin-bottom:15px;
}

input{
    width:100%;
    padding:12px;
    margin:8px 0;
    border:none;
    border-radius:8px;
    outline:none;
}

button{
    width:100%;
    padding:12px;
    margin-top:10px;
    border:none;
    border-radius:8px;
    background:#7f00ff;
    color:white;
    cursor:pointer;
}

.message{
    margin:15px 0;
}

</style>

</head>

<body>

<div class="box">

<h2>Sign Up</h2>

<div class="message">
<?php echo $msg; ?>
</div>

<form method="POST">

<input type="text" name="first_name" placeholder="First Name" required>

<input type="text" name="middle_name" placeholder="Middle Name">

<input type="text" name="last_name" placeholder="Last Name" required>

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<input type="password" name="confirm_password" placeholder="Confirm Password" required>

<input type="date" name="birthday" required>

<input type="email" name="email" placeholder="Email" required>

<input type="text" name="contact_number" placeholder="Contact Number" required>

<button type="submit" name="submit">Register</button>

</form>

</div>

</body>
</html>