<?php
$saved_user = "";
$saved_pass = "";

if(isset($_COOKIE['saved_user'])){
    $saved_user = $_COOKIE['saved_user'];
}

if(isset($_COOKIE['saved_pass'])){
    $saved_pass = $_COOKIE['saved_pass'];
}

if(isset($_POST['btn_submit'])){
    $txt_user = $_POST['txt_user'];
    $txt_pass = $_POST['txt_pass'];

    if(isset($_POST['chk_remember'])){
        setcookie("saved_user", $txt_user, time() + 86400, "/");
        setcookie("saved_pass", $txt_pass, time() + 86400, "/");
    }

    echo "<script>alert('Login Successful!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Portal</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /* Matches your bg.jpg inside the 'ta3' folder */
            background: url('bg.jpg') no-repeat center center/cover;
            background-attachment: fixed;
        }

        .login-container {
            /* Semi-transparent overlay */
            background: rgba(255, 255, 255, 0.12); 
            padding: 40px;
            border-radius: 16px;
            /* Creates the frosted glass effect */
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            /* Crisp border accentuating the container shape */
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 12px 32px 0 rgba(0, 0, 0, 0.35);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 24px;
            color: #ffffff;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #e2e8f0;
            font-size: 14px;
            font-weight: 500;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            outline: none;
            font-size: 16px;
            color: #ffffff;
            transition: all 0.25s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            background: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.7);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 24px;
            color: #e2e8f0;
            font-size: 14px;
            cursor: pointer;
            user-select: none;
        }

        /* Stylizing the basic checkbox slightly to blend well */
        input[type="checkbox"] {
            accent-color: #a855f7;
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        input[type="submit"] {
            width: 100%;
            padding: 14px;
            /* Vibrant purple theme gradient mirroring the twilight image tone */
            background: linear-gradient(135deg, #a855f7, #7c3aed);
            border: none;
            border-radius: 8px;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 14px rgba(124, 58, 237, 0.4);
            transition: all 0.2s ease;
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #9333ea, #6d28d9);
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(124, 58, 237, 0.5);
        }
        
        input[type="submit"]:active {
            transform: translateY(1px);
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>System Sign In</h2>

    <form method="POST">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="txt_user" value="<?php echo htmlspecialchars($saved_user, ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="txt_pass" value="<?php echo htmlspecialchars($saved_pass, ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>

        <label class="remember-me">
            <input type="checkbox" name="chk_remember" <?php echo !empty($saved_user) ? 'checked' : ''; ?>> Keep me logged in
        </label>

        <input type="submit" name="btn_submit" value="Login">
    </form>
</div>

</body>
</html>