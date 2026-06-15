<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formative 2</title>

    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(120deg, #2c4fa3, #6fa8dc);
            margin: 0;
            padding: 60px 20px;
        }

        .container {
            max-width: 850px;
            margin: auto;
            background: #ffffff;
            padding: 35px 40px;
            border-radius: 14px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            color: #2c4fa3;
            margin-bottom: 8px;
            font-size: 30px;
        }

        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 35px;
            font-size: 15px;
        }

        .project {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #e0e0e0;
            padding: 20px 25px;
            margin-bottom: 18px;
            border-radius: 10px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .project:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.12);
        }

        .project h2 {
            margin: 0 0 6px 0;
            font-size: 20px;
            color: #333;
        }

        .project p {
            margin: 0;
            color: #555;
            font-size: 14px;
            max-width: 520px;
        }

        .project a {
            text-decoration: none;
            font-size: 14px;
            color: #ffffff;
            background-color: #2c4fa3;
            padding: 10px 18px;
            border-radius: 20px;
            white-space: nowrap;
            transition: background-color 0.2s ease;
        }

        .project a:hover {
            background-color: #1f3d82;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 14px;
            color: #444;
            border-top: 1px solid #ddd;
            padding-top: 15px;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>FA2 Activities</h1>
    <p class="subtitle">Applications Development and Emerging Technologies</p>

    <div class="project">
        <div>
            <h2>1. Length Conversion</h2>
            <p>Uses PHP arithmetic operators with HTML and CSS.</p>
        </div>
        <a href="Measure/measure_conversion.php">Open Project</a>
    </div>

    <div class="project">
        <div>
            <h2>2. Grade Ranking</h2>
            <p>Uses PHP conditional statements with emoji‑based ranking.</p>
        </div>
        <a href="Grade/grade.php">Open Project</a>
    </div>

    <div class="project">
        <div>
            <h2>3. Two‑Digit Decimal Combination</h2>
            <p>Uses PHP looping statements to generate two‑digit values.</p>
        </div>
        <a href="two_digits/two_digit_combinations.php">Open Project</a>
    </div>

    </footer>
</div>

</body>
</html>
