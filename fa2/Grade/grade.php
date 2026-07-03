<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Grade Ranking</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Segoe UI, sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#3d67b3,#6fa8dc);
}

.container{
    width:900px;
    background:#fff;
    border-radius:20px;
    padding:40px;
    box-shadow:0 15px 35px rgba(0,0,0,.2);
}

.header{
    text-align:center;
    margin-bottom:35px;
}

.header h1{
    color:#2f55b7;
    font-size:40px;
}

.header p{
    color:#666;
    margin-top:8px;
}

.name-box{
    background:#fafafa;
    border:1px solid #ddd;
    border-radius:12px;
    padding:18px;
    text-align:center;
    font-size:22px;
    margin-bottom:25px;
}

.results{
    display:flex;
    gap:20px;
    margin-bottom:35px;
}

.card{
    flex:1;
    background:#fafafa;
    border:1px solid #ddd;
    border-radius:12px;
    padding:30px;
    text-align:center;
}

.card h3{
    color:#555;
    margin-bottom:15px;
}

.card p{
    font-size:35px;
    color:#2f55b7;
    font-weight:bold;
}

.emoji{
    font-size:80px;
}

form{
    text-align:center;
}

input{
    width:260px;
    padding:12px;
    margin:8px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:16px;
}

input:focus{
    outline:none;
    border-color:#2f55b7;
}

button{
    margin-top:20px;
    padding:13px 35px;
    background:#2f55b7;
    color:white;
    border:none;
    border-radius:30px;
    font-size:17px;
    cursor:pointer;
    transition:.3s;
}

button:hover{
    background:#1d3f99;
    transform:scale(1.05);
}

</style>

</head>
<body>

<?php

$fname="";
$mi="";
$lname="";
$grade="";
$rank="-";
$emoji="🙂";

if(isset($_POST['submit'])){

    $fname=$_POST['fname'];
    $mi=$_POST['mi'];
    $lname=$_POST['lname'];
    $grade=$_POST['grade'];

    if($grade>=93 && $grade<=100){
        $rank="A";
        $emoji="😍";
    }
    elseif($grade>=90){
        $rank="A-";
        $emoji="😊";
    }
    elseif($grade>=87){
        $rank="B+";
        $emoji="🙂";
    }
    elseif($grade>=83){
        $rank="B";
        $emoji="🙂";
    }
    elseif($grade>=80){
        $rank="B-";
        $emoji="😐";
    }
    elseif($grade>=77){
        $rank="C+";
        $emoji="😐";
    }
    elseif($grade>=73){
        $rank="C";
        $emoji="😕";
    }
    elseif($grade>=70){
        $rank="C-";
        $emoji="😕";
    }
    elseif($grade>=67){
        $rank="D+";
        $emoji="☹️";
    }
    elseif($grade>=63){
        $rank="D";
        $emoji="☹️";
    }
    elseif($grade>=60){
        $rank="D-";
        $emoji="😢";
    }
    else{
        $rank="F";
        $emoji="😭";
    }

}

?>

<div class="container">

    <div class="header">
        <h1>Grade Ranking</h1>
        <p>Applications Development and Emerging Technologies</p>
    </div>

    <div class="name-box">
        Name:
        <strong>
            <?php
            if($fname!="")
                echo htmlspecialchars("$fname $mi. $lname");
            else
                echo "No Name Yet";
            ?>
        </strong>
    </div>

    <div class="results">

        <div class="card">
            <h3>Rank</h3>
            <p><?php echo $rank; ?></p>
        </div>

        <div class="card">
            <h3>Grade</h3>
            <p><?php echo ($grade!="") ? $grade : "-"; ?></p>
        </div>

        <div class="card">
            <h3>Result</h3>
            <div class="emoji"><?php echo $emoji; ?></div>
        </div>

    </div>

    <form method="POST">

        <input type="text" name="fname" placeholder="First Name" required>

        <input type="text" name="mi" placeholder="M.I." maxlength="1" required>

        <input type="text" name="lname" placeholder="Last Name" required>

        <br>

        <input type="number" name="grade" placeholder="Enter Grade (0-100)" min="0" max="100" required>

        <br>

        <button type="submit" name="submit">Submit</button>

    </form>

</div>

</body>
</html>