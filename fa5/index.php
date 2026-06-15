<!DOCTYPE html>
<html>
<head>
    <title>FA5 - PHP Activities</title>

    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", Arial;
            background: linear-gradient(to right, #4568dc, #5f86c4);
        }

        .container {
            width: 700px;
            margin: 70px auto;
            background: #f2f2f2;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            color: #2c4da7;
            margin-bottom: 5px;
        }

        .subtitle {
            text-align: center;
            font-size: 13px;
            color: #555;
            margin-bottom: 25px;
        }

        .task {
            background: white;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .task-title {
            font-weight: bold;
        }

        .btn {
            background: #2c4da7;
            color: white;
            padding: 7px 15px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 12px;
        }

        .btn:hover {
            background: #1f357a;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #2c4da7;
            font-size: 13px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>FA5 Activities</h1>
    <div class="subtitle">PHP Forms, GET/POST, Cookies</div>

    <!-- TASK 1 -->
    <div class="task">
        <div class="task-title">1. Favorite Color</div>
        <a href="FavoriteColor.php" class="btn">Open</a>
    </div>

    <!-- TASK 2 -->
    <div class="task">
        <div class="task-title">2. Result Colors</div>
        <a href="ResultColors.php" class="btn">Open</a>
    </div>

    <!-- TASK 3 -->
    <div class="task">
        <div class="task-title">3. Cookie Activity</div>
        <a href="cookie.php" class="btn">Open</a>
    </div>

    <!-- TASK 4 -->
    <div class="task">
        <div class="task-title">4. GET Method</div>
        <a href="get.php" class="btn">Open</a>
    </div>

    <!-- TASK 5 -->
    <div class="task">
        <div class="task-title">5. POST Method</div>
        <a href="post.php" class="btn">Open</a>
    </div>

    <!-- BACK -->
    <a href="../" class="back">⬅ Back to Main Menu</a>

</div>

</body>
</html>