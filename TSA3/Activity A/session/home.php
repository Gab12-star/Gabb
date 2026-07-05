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
    <title>Home Page</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="background-image"></div>

<header>
    <h1>Home Page</h1>
</header>

<main>

    <div class="result-box">
        <h2>Welcome!</h2>

        <p>
            Username:
            <strong>
                <?php echo $_SESSION['username']; ?>
            </strong>
        </p>

        logout.php
            <input type="button" value="Logout">
        </a>
    </div>

</main>

</body>
</html>