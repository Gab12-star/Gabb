<!DOCTYPE html>
<html>
<head>
    <title>FA4 - Gallery</title>

    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", Arial;
            background: linear-gradient(to right, #4568dc, #5f86c4);
        }

        .container {
            width: 750px;
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

        /* IMAGE GRID */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .gallery img {
            width: 120px;
            height: 120px;
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

        /* TASK BUTTONS */
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
            font-size: 13px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>FA4 Gallery</h1>
    <div class="subtitle">Images and PHP Activities</div>

    <!-- IMAGE PREVIEW -->
    <div class="gallery">
        <img src="Ariana.jpg">
        <img src="Billie.jpg">
        <img src="Bruno.jpg">
        <img src="Kendrick.jpg">
        <img src="Weeknd.jpg">
    </div>

    <!-- TASKS -->
    <div class="task">
        <div>View List Page</div>
        <a href="list.php" class="btn">Open</a>
    </div>

    <div class="task">
        <div>View Story Page</div>
        <a href="story.php" class="btn">Open</a>
    </div>

    <!-- BACK -->
    <a href="../" class="back">⬅ Back to Main Menu</a>

</div>

</body>
</html>
``