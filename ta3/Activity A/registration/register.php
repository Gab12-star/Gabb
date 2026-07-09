<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'db_connect.php';

$message = "";
$show_result = false;
$registered_data = [];

if (isset($_POST['btn_register'])) {
    $first_name = trim($_POST['txt_first_name']);
    $middle_name = trim($_POST['txt_middle_name']);
    $last_name = trim($_POST['txt_last_name']);
    $user = trim($_POST['txt_user']);
    $pass = $_POST['txt_pass'];
    $confirm_pass = $_POST['txt_confirm_pass'];
    $birthday = trim($_POST['txt_birthday']);
    $email = trim($_POST['txt_email']);
    $contact = trim($_POST['txt_contact']);

    if ($pass !== $confirm_pass) {
        $message = "<span style='color: #ef4444;'>password and confirm password are not the same</span>";
    } else {
        $hashed_password = password_hash($pass, PASSWORD_BCRYPT);

        $check_query = "SELECT id FROM users WHERE username = ? OR email = ?";
        $stmt = mysqli_prepare($conn, $check_query);
        mysqli_stmt_bind_param($stmt, "ss", $user, $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            $message = "<span style='color: #ef4444;'>Username or Email already taken.</span>";
        } else {
            $insert_query = "INSERT INTO users (first_name, middle_name, last_name, username, password, birthday, email, contact_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $insert_stmt = mysqli_prepare($conn, $insert_query);
            mysqli_stmt_bind_param($insert_stmt, "ssssssss", $first_name, $middle_name, $last_name, $user, $hashed_password, $birthday, $email, $contact);

            if (mysqli_stmt_execute($insert_stmt)) {
                $message = "<span style='color: #10b981;'>Registration Successful! Data saved to Database.</span>";
                $show_result = true;
                $registered_data = [
                    'First Name' => htmlspecialchars($first_name),
                    'Middle Name' => htmlspecialchars($middle_name),
                    'Last Name' => htmlspecialchars($last_name),
                    'Username' => htmlspecialchars($user),
                    'Birthday' => htmlspecialchars($birthday),
                    'Email' => htmlspecialchars($email),
                    'Contact Number' => htmlspecialchars($contact),
                    'Password' => htmlspecialchars($pass)
                ];
            } else {
                $message = "<span style='color: #ef4444;'>Error saving record data.</span>";
            }
            mysqli_stmt_close($insert_stmt);
        }
        mysqli_stmt_close($stmt);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Portal</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body { display: flex; flex-direction: column; justify-content: center; align-items: center; min-height: 100vh; background: url('bg.jpg') no-repeat center center/cover fixed; padding: 40px 20px; }
        .container { background: rgba(255, 255, 255, 0.12); padding: 35px 30px; border-radius: 16px; backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px); border: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 12px 32px rgba(0, 0, 0, 0.35); width: 100%; max-width: 450px; margin-bottom: 20px; }
        h2 { text-align: center; margin-bottom: 5px; color: #fff; text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3); }
        .sub-header { text-align: center; color: #cbd5e1; font-size: 14px; margin-bottom: 25px; }
        .form-group { margin-bottom: 18px; }
        label { display: block; margin-bottom: 6px; color: #e2e8f0; font-size: 14px; }
        input[type="text"], input[type="email"], input[type="password"] { 
            width: 100%; padding: 11px; background: rgba(0, 0, 0, 0.35); border: 1px solid rgba(255, 255, 255, 0.25); border-radius: 8px; color: #ffffff !important; outline: none; font-size: 15px; transition: all 0.25s ease; 
        }
        input:focus { background: rgba(0, 0, 0, 0.5); border-color: #a855f7; box-shadow: 0 0 8px rgba(168, 85, 247, 0.4); }
        .msg { text-align: center; margin-bottom: 15px; font-weight: bold; font-size: 14px; }
        input[type="submit"] { width: 100%; padding: 12px; background: linear-gradient(135deg, #a855f7, #7c3aed); border: none; border-radius: 8px; color: white; font-weight: bold; cursor: pointer; transition: 0.3s; box-shadow: 0 4px 14px rgba(124, 58, 237, 0.4); margin-top: 10px; }
        input[type="submit"]:hover { background: linear-gradient(135deg, #9333ea, #6d28d9); transform: translateY(-1px); }
        .result-box { background: rgba(255, 255, 255, 0.95); padding: 20px; border-radius: 12px; width: 100%; max-width: 450px; color: #333; box-shadow: 0 4px 15px rgba(0,0,0,0.2); }
        .result-box h3 { margin-bottom: 10px; border-bottom: 2px solid #7c3aed; padding-bottom: 5px; color: #7c3aed; }
        .result-item { margin-bottom: 6px; font-size: 14px; }
        .nav-link { display: block; text-align: center; margin-top: 15px; color: #e2e8f0; text-decoration: none; font-size: 13px; }
        .nav-link:hover { color: #fff; text-decoration: underline; }
    </style>
</head>
<body>

<div class="container">
    <h2>Create Account</h2>
    <div class="sub-header">My Personal Information</div>
    <?php if(!empty($message)) echo "<div class='msg'>$message</div>"; ?>
    <form method="POST">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="txt_first_name" required>
        </div>
        <div class="form-group">
            <label>Middle Name</label>
            <input type="text" name="txt_middle_name">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="txt_last_name" required>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="txt_user" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="txt_pass" required>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="txt_confirm_pass" required>
        </div>
        <div class="form-group">
            <label>Birthday</label>
            <input type="text" name="txt_birthday" placeholder="January 30 1993" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="txt_email" required>
        </div>
        <div class="form-group">
            <label>Contact Number</label>
            <input type="text" name="txt_contact" required>
        </div>
        <input type="submit" name="btn_register" value="Submit">
    </form>
    <a href="login.php" class="nav-link">Already have an account? Sign In</a>
</div>

<?php if ($show_result): ?>
<div class="result-box">
    <h3>Result Data (Saved to Database):</h3>
    <?php foreach ($registered_data as $key => $value): ?>
        <div class="result-item"><strong><?php echo $key; ?>:</strong> <?php echo $value; ?></div>
    <?php endforeach; ?>
</div>
<?php endif; ?>

</body>
</html>