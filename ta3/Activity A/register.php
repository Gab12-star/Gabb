<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'db_connect.php';
$msg = "";
if (isset($_POST['submit'])) {
    if ($_POST['password'] !== $_POST['confirm_password']) { $msg = "Passwords do not match!"; }
    else {
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        try {
            $sql = "INSERT INTO users (first_name, middle_name, last_name, username, password, birthday, email, contact_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssssss", $_POST['first_name'], $_POST['middle_name'], $_POST['last_name'], $_POST['username'], $pass, $_POST['birthday'], $_POST['email'], $_POST['contact_number']);
            $stmt->execute();
            $msg = "Success! <a href='login.php' style='color:white;'>Login here</a>";
        } catch (Exception $e) { $msg = "Error: Username or Email already exists."; }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body { background: url('bg.jpg') no-repeat center fixed; background-size: cover; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; font-family: sans-serif; }
        .box { background: rgba(255,255,255,0.1); backdrop-filter: blur(15px); padding: 30px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.3); color: white; width: 350px; }
        input { width: 100%; margin: 5px 0; padding: 10px; border-radius: 8px; border: none; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background: #7f00ff; color: white; border: none; border-radius: 8px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Sign Up</h2>
        <p><?php echo $msg; ?></p>
        <form method="POST">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="middle_name" placeholder="Middle Name">
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <input type="text" name="birthday" placeholder="YYYY-MM-DD" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="contact_number" placeholder="Contact" required>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>