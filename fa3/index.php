<!DOCTYPE html>
<html>
<head>
    <title>FA3 - Activities</title>

    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", Arial;
            background: linear-gradient(to right, #4568dc, #5f86c4);
        }

        .container {
            width: 650px;
            margin: 80px auto;
            background: #f2f2f2;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            color: #2c4da7;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            font-size: 13px;
            color: #555;
            margin-bottom: 30px;
        }

        .task {
            background: white;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
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
            padding: 8px 15px;
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
            font-size: 13px;
            color: #2c4da7;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>FA3 Activities</h1>
    <div class="subtitle">PHP Operations and Information</div>

    <!-- TASK 1 -->
    <div class="task">
        <div class="task-title">1. Array Operations</div>
        <a href="array_operations.php" class="btn">Open</a>
    </div>

    <!-- TASK 2 -->
    <div class="task">
        <div class="task-title">2. Function Operations</div>
        <a href="function_operations.php" class="btn">Open</a>
    </div>

    <!-- TASK 3 -->
    <div class="task">
        <div class="task-title">3. Info Page</div>
        <a href="info.php" class="btn">Open</a>
    </div>

    <!-- BACK -->
    <a href="../" class="back">⬅ Back to Main Menu</a>

</div>

</body>
</html>