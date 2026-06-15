<!DOCTYPE html>
<html>
<head>
    <title>Student Resume</title>
    <style>
        body {
            background-color: #f4f7f6;
            padding: 40px;
            font-family: Arial, sans-serif;
        }
        .resume-container {
            width: 700px;
            margin: 0 auto;
            background-color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e0e0e0;
        }
        .profile-section {
            display: flex;
            border-bottom: 2px solid #808080;
        }
        .profile-img-box {
            width: 35%;
            padding: 20px;
            border-right: 2px solid #808080;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f9fbfb;
        }
        .profile-img-box svg {
            width: 120px;
            height: 120px;
            fill: #2c3e50;
        }
        .info-box {
            width: 65%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .section-box {
            padding: 15px 20px;
            border-bottom: 2px solid #808080;
            background-color: #ffffff;
        }
        .section-box:last-child {
            border-bottom: none;
        }
        h3 {
            margin-top: 0;
            color: #2c3e50;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 5px;
            display: inline-block;
        }
        ul {
            margin: 5px 0 0 20px;
            padding: 0;
        }
        li {
            margin-bottom: 5px;
            color: #333333;
            font-size: 14px;
        }
        p {
            margin: 5px 0 0 0;
            color: #333333;
            font-size: 14px;
            line-height: 1.4;
        }
        table {
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }
        th, td {
            padding: 4px 0;
            font-size: 14px;
        }
        th {
            width: 30%;
            color: #2c3e50;
        }
    </style>
</head>
<body>

<?php
// Creating the temporary files using file_put_contents to satisfy include/require requirements in a single file execution

file_put_contents('personal.php', '
<h3>Personal Information</h3>
<table>
    <tr><th>Name:</th><td>Carl Gabriel Vitalista</td></tr>
    <tr><th>Age:</th><td>19 years old</td></tr>
    <tr><th>Specialization:</th><td>Information Technology</td></tr>
</table>
');

file_put_contents('objective.php', '
<h3>Career Objective</h3>
<p>To secure a challenging position in an organization where I can utilize my technical skills and knowledge for personal and professional growth.</p>
');

file_put_contents('education.php', '
<h3>Educational Attainment</h3>
<ul>
    <li><strong>College:</strong> FEU Institute of Technology</li>
    <li><strong>Program:</strong> BS in Information Technology (BSIT-CST)</li>
</ul>
');

file_put_contents('skills.php', '
<h3>Skills</h3>
<ul>
    <li>Cisco IOS Router & Switch Configuration</li>
    <li>Python Programming & Tkinter GUI Development</li>
    <li>HTML, CSS, and PHP Web Development</li>
</ul>
');

file_put_contents('affiliation.php', '
<h3>Affiliations</h3>
<ul>
    <li>Cisco Networking Academy (CCNA Certified Member)</li>
    <li>FEU Tech IT Student Organization</li>
</ul>
');

file_put_contents('experience.php', '
<h3>Work Experience</h3>
<ul>
    <li><strong>Project Developer:</strong> Library Management System Development</li>
    <li><strong>Network Administrator (Academic Labs):</strong> Zone-Based Policy Firewall Deployment</li>
</ul>
');
?>

<div class="resume-container">
    <div class="profile-section">
        <div class="profile-img-box">
            <svg viewBox="0 0 24 24">
                <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,16.5C13.93,16.5 16.5,17.42 16.5,18C15.08,19.24 13.62,20 12,20C10.38,20 8.92,19.24 7.5,18C7.5,17.42 10.07,16.5 12,16.5Z" />
            </svg>
        </div>
        <div class="info-box">
            <?php require('personal.php'); ?>
        </div>
    </div>

    <div class="section-box">
        <?php include('objective.php'); ?>
    </div>

    <div class="section-box">
        <?php include('education.php'); ?>
    </div>

    <div class="section-box">
        <?php include('skills.php'); ?>
    </div>

    <div class="section-box">
        <?php include('affiliation.php'); ?>
    </div>

    <div class="section-box">
        <?php include('experience.php'); ?>
    </div>
</div>

</body>
</html>