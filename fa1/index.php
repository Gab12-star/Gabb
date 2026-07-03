<?php
$firstname = "Carl Gabriel";
$lastname = "Vitalista";
$course = "Bachelor of Science in Information Technology";
$email = "vtlsta.crl@gmail.com";
$careerObjective = "To become a skilled cybersecurity professional and safeguard digital systems by developing secure, resilient, and user-friendly solutions.";
$profile = "I am a passionate IT student with strong interests in cybersecurity, web development, and problem-solving. I enjoy learning new technologies and applying them to create secure and user-friendly solutions.";
$contactNumber = "+63 912 345 6789";
$address = "Taft Ave, Malate, Manila, Metro Manila";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resume - <?php echo $firstname . " " . $lastname; ?></title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"Segoe UI", Arial, sans-serif;
}

body{
    background:#f4f4f4;
    padding:40px;
}

.resume{
    width:900px;
    margin:auto;
    background:#fff;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 8px 20px rgba(0,0,0,.2);
    display:flex;
}

/* LEFT SIDE */

.header{
    width:35%;
    background:linear-gradient(180deg,#111111,#8B0000,#C00000);
    color:white;
    padding:40px 30px;
}

.header h1{
    font-size:36px;
    margin-bottom:10px;
}

.header .course{
    font-size:17px;
    margin-bottom:8px;
}

.header .email{
    font-size:15px;
    margin-bottom:30px;
    word-break:break-word;
}

.header .section{
    margin-bottom:30px;
}

.header .section h2{
    font-size:19px;
    border-bottom:2px solid rgba(255,255,255,.6);
    padding-bottom:5px;
    margin-bottom:12px;
}

.header p{
    line-height:1.7;
    font-size:15px;
}

/* RIGHT SIDE */

.content{
    width:65%;
    padding:40px;
}

.content .section{
    margin-bottom:35px;
}

.content h2{
    color:#8B0000;
    border-bottom:2px solid #8B0000;
    padding-bottom:6px;
    margin-bottom:18px;
    text-transform:uppercase;
    letter-spacing:1px;
}

.content p{
    line-height:1.8;
    color:#444;
}

/* EDUCATION */

.education-item{
    display:flex;
    margin-bottom:20px;
    border-left:4px solid #8B0000;
    padding-left:15px;
}

.edu-level{
    width:230px;
    font-weight:bold;
    color:#8B0000;
}

.edu-school{
    flex:1;
    color:#333;
    line-height:1.6;
}

.edu-school span{
    font-style:italic;
    color:#666;
    font-size:14px;
}

/* LISTS */

.skills,
.languages{
    list-style:none;
}

.skills li,
.languages li{
    margin-bottom:10px;
    position:relative;
    padding-left:20px;
}

.skills li::before,
.languages li::before{
    content:"✔";
    position:absolute;
    left:0;
    color:#8B0000;
    font-weight:bold;
}

</style>

</head>

<body>

<div class="resume">

    <!-- LEFT PANEL -->

    <div class="header">

        <h1><?php echo $firstname . " " . $lastname; ?></h1>

        <p class="course"><?php echo $course; ?></p>

        <p class="email"><?php echo $email; ?></p>

        <div class="section">

            <h2>Profile</h2>

            <p><?php echo $profile; ?></p>

        </div>

        <div class="section">

            <h2>Contact</h2>

            <p><strong>Phone</strong><br>
            <?php echo $contactNumber; ?></p>

            <br>

            <p><strong>Address</strong><br>
            <?php echo $address; ?></p>

        </div>

    </div>

    <!-- RIGHT PANEL -->

    <div class="content">

        <div class="section">

            <h2>Career Objective</h2>

            <p><?php echo $careerObjective; ?></p>

        </div>

        <div class="section">

            <h2>Education</h2>

            <div class="education-item">

                <div class="edu-level">
                    Elementary to Junior High School
                </div>

                <div class="edu-school">
                    Waminal Achievers Academy Inc.
                </div>

            </div>

            <div class="education-item">

                <div class="edu-level">
                    Senior High School
                </div>

                <div class="edu-school">
                    School of Mount Saint Mary
                </div>

            </div>

            <div class="education-item">

                <div class="edu-level">
                    College
                </div>

                <div class="edu-school">
                    Far Eastern University Institute of Technology
                    <br>
                    <span><?php echo $course; ?></span>
                </div>

            </div>

        </div>

        <div class="section">

            <h2>Skills</h2>

            <ul class="skills">
                <li>Cybersecurity Fundamentals (Network Security, Threat Analysis)</li>
                <li>PHP, HTML, CSS, JavaScript</li>
                <li>Database Management (MySQL)</li>
                <li>Problem-solving and Analytical Thinking</li>
            </ul>

        </div>

        <div class="section">

            <h2>Languages</h2>

            <ul class="languages">
                <li>Filipino</li>
                <li>English</li>
            </ul>

        </div>

    </div>

</div>

</body>
</html>