<!DOCTYPE html>
<html>
<head>
    <title>FA Activities</title>

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

        .btn {
            background: #2c4da7;
            color: white;
            padding: 6px 14px;
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
        }
    </style>
</head>
<body>

<div class="container">

    <h1>FA Activities</h1>

    <!-- ✅ WORKING BUTTONS -->

    <div class="task">
        <div>1. Student</div>
        <a href="student.php" class="btn">Open</a>
    </div>

    <div class="task">
        <div>2. Student 2</div>
        <a href="student2.php" class="btn">Open</a>
    </div>

    <div class="task">
        <div>3. Shapes</div>
        <a href="shape.php" class="btn">Open</a>
    </div>

    <div class="task">
        <div>4. Table</div>
        <a href="table.php" class="btn">Open</a>
    </div>

    <!-- ✅ BACK BUTTON -->
    <a href="../" class="back">⬅ Back to Main Menu</a>

</div>

</body>
</html>