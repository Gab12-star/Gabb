<?php
session_start();
include 'includes/db.php';

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$result = mysqli_query(
    $conn,
    "SELECT * FROM users WHERE id='$user_id'"
);

$user = mysqli_fetch_assoc($result);

$message = "";

if(isset($_POST['reset'])){

    $current = $_POST['current'];
    $newpass = $_POST['newpass'];
    $renewpass = $_POST['renewpass'];

    if($current != $user['password']){

        $message = "Current password is not the same with the old password.";

    }elseif($newpass != $renewpass){

        $message = "New Password and Re-enter Password should be the same.";

    }else{

        mysqli_query(
            $conn,
            "UPDATE users
             SET password='$newpass'
             WHERE id='$user_id'"
        );

        $message = "Password Updated Successfully!";

        $result = mysqli_query(
            $conn,
            "SELECT * FROM users WHERE id='$user_id'"
        );

        $user = mysqli_fetch_assoc($result);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="background-image"></div>

<header>
    <h1>User Information Form</h1>
</header>

<main>

   <div class="logout-container">
    <a href="logout.php" class="logout-btn">Logout</a>
</div>
    <h3>
        Welcome
        <?php
        echo $user['firstname'] . " " .
             $user['middlename'] . " " .
             $user['lastname'];
        ?>
    </h3>

    <p>
        <strong>Birthday:</strong>
        <?php echo $user['birthday']; ?>
    </p>

    <p>
        <strong>Email:</strong>
        <?php echo $user['email']; ?>
    </p>

    <p>
        <strong>Contact:</strong>
        <?php echo $user['contact']; ?>
    </p>

    <hr>

    <h3>RESET PASSWORD</h3>

    <form method="POST">

        <label>Enter Current Password</label>
        <input type="password" name="current" required>

        <label>Enter New Password</label>
        <input type="password" name="newpass" required>

        <label>Re-enter New Password</label>
        <input type="password" name="renewpass" required>

        <input type="submit" name="reset" value="Reset Password">

    </form>

    <p><?php echo $message; ?></p>

</main>

</body>
</html>