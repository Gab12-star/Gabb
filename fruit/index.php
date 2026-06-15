<!DOCTYPE html>
<html>
<head>
    <title>Fruit Gallery Project</title>

    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", Arial;
            background: linear-gradient(to right, #4568dc, #5f86c4);
        }

        .container {
            width: 800px;
            margin: 60px auto;
            background: #f2f2f2;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            color: #2c4da7;
        }

        .subtitle {
            text-align: center;
            font-size: 13px;
            color: #555;
            margin-bottom: 20px;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .gallery img {
            width: 110px;
            height: 110px;
            object-fit: cover;
            margin: 8px;
            border-radius: 10px;
            border: 2px solid #ddd;
            transition: 0.3s;
        }

        .gallery img:hover {
            transform: scale(1.05);
            border-color: #2c4da7;
        }

        .task {
            background: white;
            padding: 12px;
            border-radius: 10px;
            margin-top: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Fruit Gallery Project</h1>
    <div class="subtitle">PHP Image Activity</div>

    <!-- ✅ FIXED IMAGES -->
    <div class="gallery">
        <img src="apple.jpg">
        <img src="banana.jpg">
        <img src="cherry.jpg">
        <img src="grape.jpg">
        <img src="kiwi.jpg">
        <img src="mango.jpg">
        <img src="orange.jpg">
        <img src="peach.jpg">
        <img src="strawberry.jpg">
        <img src="watermelon.jpg">
    </div>

    <!-- ✅ FIXED BUTTON -->
    <div class="task">
        <div><b>Open Fruit Activity</b></div>
        <a href="fruit.php" class="btn">Open</a>
    </div>

    <!-- ✅ FIXED BACK -->
    <a href="../" class="back">⬅ Back to Main Menu</a>

</div>

</body>
</html>