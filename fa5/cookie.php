<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("firstname", $_POST['firstname'], time() + 60);
    setcookie("middlename", $_POST['middlename'], time() + 60);
    setcookie("lastname", $_POST['lastname'], time() + 60);

    setcookie("anim_done", "0", time() + 60);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Personal Info</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #74ebd5, #9face6);
        }

        .box {
            width: 420px;
            margin: 60px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        h2 { text-align: center; }

        input[type="text"] {
            width: 100%;
            padding: 8px;
        }

        input[type="submit"] {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            background: #4CAF50;
            color: white;
            border: none;
        }

        .bar {
            width: 100%;
            height: 20px;
            background: #ddd;
            border-radius: 5px;
            margin-top: 5px;
        }

        .progress {
            height: 20px;
            width: 0%;
            background: #3498db; /* ✅ BLUE ONLY */
            border-radius: 5px;
        }

        p { font-weight: bold; }
    </style>
</head>
<body>

<div class="box">
    <h2>Personal Information</h2>

    <form method="POST">
        First Name:<br>
        <input type="text" name="firstname">

        Middle Name:<br>
        <input type="text" name="middlename">

        Last Name:<br>
        <input type="text" name="lastname">

        <input type="submit" value="Submit">
    </form>

    <h3>Cookie Output:</h3>

    <p id="first"></p>
    <div class="bar"><div id="bar1" class="progress"></div></div>

    <p id="middle"></p>
    <div class="bar"><div id="bar2" class="progress"></div></div>

    <p id="last"></p>
    <div class="bar"><div id="bar3" class="progress"></div></div>
</div>

<script>
function getCookie(name) {
    let cookies = document.cookie.split(";");
    for (let i = 0; i < cookies.length; i++) {
        let c = cookies[i].trim();
        if (c.indexOf(name + "=") == 0) {
            return decodeURIComponent(c.substring(name.length + 1));
        }
    }
    return "";
}

function setCookie(name, value) {
    document.cookie = name + "=" + value;
}

function animateBar(barId, duration, callback) {
    let bar = document.getElementById(barId);
    let start = null;

    function step(timestamp) {
        if (!start) start = timestamp;

        let progress = timestamp - start;
        let percent = progress / duration;

        if (percent > 1) percent = 1;

        bar.style.width = (percent * 100) + "%";

        if (percent < 1) {
            requestAnimationFrame(step);
        } else {
            callback();
        }
    }

    requestAnimationFrame(step);
}

let fname = getCookie("firstname");
let mname = getCookie("middlename");
let lname = getCookie("lastname");
let animDone = getCookie("anim_done");

if (animDone === "1") {

    document.getElementById("bar1").style.width = "100%";
    document.getElementById("bar2").style.width = "100%";
    document.getElementById("bar3").style.width = "100%";

    if(fname) document.getElementById("first").innerHTML = "First Name: " + fname;
    if(mname) document.getElementById("middle").innerHTML = "Middle Name: " + mname;
    if(lname) document.getElementById("last").innerHTML = "Last Name: " + lname;

}

else if (fname || mname || lname) {

    animateBar("bar1", 10000, function() {
        if(fname) document.getElementById("first").innerHTML = "First Name: " + fname;
    });

    animateBar("bar2", 20000, function() {
        if(mname) document.getElementById("middle").innerHTML = "Middle Name: " + mname;
    });

    animateBar("bar3", 30000, function() {
        if(lname) {
            document.getElementById("last").innerHTML = "Last Name: " + lname;

            setCookie("anim_done", "1");
        }
    });
}
</script>

</body>
</html>