<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once 'db_connect.php';
$error = "";

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row && password_verify($pass, $row['password'])) {
        $_SESSION['username'] = $user;
        if(isset($_POST['remember'])) { setcookie("user", $user, time() + (86400 * 30), "/"); }
        header("Location: home.php");
        exit();
    } else { $error = "Invalid Username or Password!"; }
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body { background: url('bg.jpg') no-repeat center fixed; background-size: cover; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; font-family: sans-serif; }
        .box { background: rgba(255,255,255,0.1); backdrop-filter: blur(15px); padding: 40px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.3); color: white; width: 320px; text-align: center; }
        input { width: 100%; margin: 10px 0; padding: 12px; border-radius: 8px; border: none; box-sizing: border-box; }
        .check { display: flex; align-items: center; gap: 10px; margin: 10px 0; text-align: left; }
        button { width: 100%; padding: 12px; margin-top: 10px; background: #7f00ff; color: white; border: none; border-radius: 8px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="box">
        <h2>System Sign In</h2>
        <p style="color:red;"><?php echo $error; ?></p>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <div class="check"><input type="checkbox" name="remember" style="width:auto;"> Keep me logged in</div>
            <button type="submit" name="login">Login</button>
        </form>
        <p>No account? <a href="register.php" style="color:white;">Sign Up</a></p>
    </div>
</body>
</html>