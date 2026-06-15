<!DOCTYPE html>
<html>
<head>
    <title>Formative Activities</title>

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
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            color: #2c4da7;
        }

        .subtitle {
            text-align: center;
            margin-bottom: 25px;
            color: #555;
        }

        /* ✅ INFO CARD */
        .info-card {
            background: white;
            border-left: 6px solid #2c4da7;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .info-title {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: #2c4da7;
            margin-bottom: 20px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .info-item {
            display: flex;
            flex-direction: column;
            background: #f9f9fb;
            border: 1px solid #ddd;
            padding: 12px 15px;
            border-radius: 8px;
        }

        .label {
            font-size: 12px;
            color: #777;
            margin-bottom: 3px;
            text-transform: uppercase;
        }

        .value {
            font-weight: 600;
            color: #2c4da7;
        }

        /* ✅ TASK LIST */
        .task {
            background: #eaeaea;
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
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
    </style>
</head>
<body>

<div class="container">

    <h1>Formative and Summative Activities</h1>
    <div class="subtitle">Applications Development and Emerging Technologies</div>

    <!-- ✅ STUDENT INFO -->
    <div class="info-card">

        <div class="info-title">Student Information</div>

        <div class="info-grid">

            <div class="info-item">
                <span class="label">Name</span>
                <span class="value">Carl Gabriel Sevalla Vitalista</span>
            </div>

            <div class="info-item">
                <span class="label">Age</span>
                <span class="value">19</span>
            </div>

            <div class="info-item">
                <span class="label">School</span>
                <span class="value">Far Eastern University Institute of Technology</span>
            </div>

            <div class="info-item">
                <span class="label">Course</span>
                <span class="value">BS Information Technology - Cybersecurity</span>
            </div>

            <div class="info-item">
                <span class="label">Section</span>
                <span class="value">TC 27</span>
            </div>

            <div class="info-item">
                <span class="label">Subject</span>
                <span class="value">Applications Development and Emerging Technologies</span>
            </div>

        </div>

    </div>

    <!-- ✅ ACTIVITIES -->

    <div class="task">
        <div><b>1. Form Activity</b></div>
        <a href="fa/" class="btn">Open Project</a>
    </div>

    <div class="task">
        <div><b>2. FA1</b></div>
        <a href="fa1/" class="btn">Open Project</a>
    </div>

    <div class="task">
        <div><b>3. FA2</b></div>
        <a href="fa2/" class="btn">Open Project</a>
    </div>

    <div class="task">
        <div><b>4. FA3</b></div>
        <a href="fa3/" class="btn">Open Project</a>
    </div>

    <div class="task">
        <div><b>5. FA4</b></div>
        <a href="fa4/" class="btn">Open Project</a>
    </div>

    <div class="task">
        <div><b>6. FA5</b></div>
        <a href="fa5/" class="btn">Open Project</a>
    </div>

    <div class="task">
        <div><b>7. Fruit Project</b></div>
        <a href="fruit/" class="btn">Open Project</a>
    </div>

</div>

</body>
</html>

        
