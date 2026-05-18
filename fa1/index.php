<?php
$firstname = "Carl Gabriel";
$lastname = "Vitalista";
$course = "Bachelor of Science in Information Technology";
$email = "vtlsta.crl@gmail.com";  
$careerObjective = "To become a skilled cybersecurity professional and safeguard digital systems by developing secure, resilient, and user‑friendly solutions.";
$profile = "I am a passionate IT student with strong interests in cybersecurity, web development, and problem-solving. I enjoy learning new technologies and applying them to create secure and user-friendly solutions.";
$contactNumber = "+63 912 345 6789";
$address = "Manila, Philippines";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume - <?php echo $firstname . " " . $lastname; ?></title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333333;
        }

        .resume {
            width: 80%;
            margin: 40px auto;
            background-color: #ffffff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            border: 1px solid #dddddd;
            display: flex;
        }

        .header {
            width: 35%;
            background: linear-gradient(135deg, #1a1a1a, #004080, #ff0000); /* cool fade gradient */
            color: white;
            padding: 40px 30px;
            text-align: left;
        }

        .header h1 {
            margin: 0;
            font-size: 38px; 
            font-weight: bold;
            letter-spacing: 1.5px;
        }

        .header p {
            margin-top: 12px;
            font-size: 16px;
        }

        .header .section {
            margin-top: 25px;
        }

        .header .section h2 {
            font-size: 18px;
            margin-bottom: 10px;
            border-bottom: 2px solid #ffffff;
            padding-bottom: 5px;
        }

        .content {
            width: 65%;
            padding: 40px;
            line-height: 1.7;
        }

        .content h2 {
            border-bottom: 2px solid #004080;
            padding-bottom: 6px;
            margin-bottom: 15px;
            color: #1a1a1a;
            font-size: 22px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .content ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .content ul li {
            margin-bottom: 8px;
            font-size: 15px;
        }

        .section {
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
    <div class="resume">
        <div class="header">
            <h1><?php echo $firstname . " " . $lastname; ?></h1>
            <p><?php echo $course; ?></p>
            <p><?php echo $email; ?></p>

            <div class="section">
                <h2>Profile</h2>
                <p><?php echo $profile; ?></p>
            </div>

            <div class="section">
                <h2>Contacts</h2>
                <p>Phone: <?php echo $contactNumber; ?></p>
                <p>Address: <?php echo $address; ?></p>
            </div>
        </div>
        <div class="content">
            <div class="section">
                <h2>Career Objective</h2>
                <p><?php echo $careerObjective; ?></p>
            </div>
            <div class="section">
                <h2>Education</h2>
                <ul>
                    <li>Elementary to Junior High School – WAAI</li>
                    <li>Senior High School – SMSM</li>
                    <li>College – FEU TECH (<?php echo $course; ?>)</li>
                </ul>
            </div>
            <div class="section">
                <h2>Skills</h2>
                <ul>
                    <li>Cybersecurity Fundamentals (Network Security, Threat Analysis)</li>
                    <li>PHP, HTML, CSS, JavaScript</li>
                    <li>Database Management (MySQL)</li>
                    <li>Problem-solving and analytical thinking</li>
                </ul>
            </div>
            <div class="section">
                <h2>Languages</h2>
                <ul>
                    <li>Filipino</li>
                    <li>English</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
