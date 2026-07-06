<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_COOKIE['user'])) { header("Location: login.php"); exit(); }
$user = $_SESSION['username'] ?? $_COOKIE['user'];
?>
<!DOCTYPE html>
<html>
<body style="background: url('bg.jpg') no-repeat center fixed; background-size: cover; color: white; text-align: center; padding-top: 100px;">
    <h1>Welcome, <?php echo $user; ?>!</h1>
    <a href="logout.php" style="color:yellow;">Log-out</a>
</body>
</html>