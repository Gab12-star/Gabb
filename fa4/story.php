<!DOCTYPE html>
<html>
<head>
    <title>My Artists</title>

    <style>
        body {
            font-family: Arial;
            background-color: #121212;
            color: white;
            margin: 0;
            text-align: center;
        }

        h1 {
            margin: 30px;
            color: #1DB954;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 25px;
            padding: 20px;
            flex-wrap: wrap;
        }

        .box {
            width: 260px;
            padding: 15px;
            border-radius: 12px;
            background-color: #181818;
            text-align: left;
            transition: 0.3s;
        }

        .box:hover {
            background-color: #282828;
            transform: scale(1.05);
        }

        .box img {
            width: 100%;
            height: 220px;        
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 12px;
        }

        h3 {
            margin: 5px 0;
        }

        p {
            font-size: 14px;
            color: #b3b3b3;
        }

        .bio {
            font-size: 13px;
            margin-top: 10px;
            color: #b3b3b3;
        }
    </style>
</head>

<body>

<h1>My Artists</h1>

<div class="container">

    <div class="box">
        <img src="Kendrick.jpg">
        <h3>Kendrick Lamar</h3>
        <p>A voice that speaks truth through rhythm.</p>
        <div class="bio">
            Kendrick Lamar started his journey in Compton, turning real-life struggles into powerful music. 
            His songs tell deep stories about society, identity, and growth, making him one of the most respected artists in the world.
        </div>
    </div>

    <div class="box">
        <img src="Weeknd.jpg">
        <h3>The Weeknd</h3>
        <p>A mysterious artist rising from the shadows.</p>
        <div class="bio">
            The Weeknd began anonymously, uploading songs online that quickly caught attention. 
            His dark, emotional sound and unique style turned him into a global superstar dominating modern music.
        </div>
    </div>

    <div class="box">
        <img src="Billie.jpg">
        <h3>Billie Eilish</h3>
        <p>A young creator redefining pop music.</p>
        <div class="bio">
            Billie Eilish created music from her bedroom with her brother, gaining worldwide fame at a young age. 
            Her bold creativity and emotional storytelling made her a voice of a new generation.
        </div>
    </div>

    <div class="box">
        <img src="Bruno.jpg">
        <h3>Bruno Mars</h3>
        <p>A performer bringing old-school vibes to life.</p>
        <div class="bio">
            Bruno Mars worked hard behind the scenes as a songwriter before stepping into the spotlight. 
            His energy, style, and talent turned him into one of the biggest entertainers of his time.
        </div>
    </div>

    <div class="box">
        <img src="Ariana.jpg">
        <h3>Ariana Grande</h3>
        <p>A powerful voice rising from humble beginnings.</p>
        <div class="bio">
            Ariana Grande transitioned from acting to music and quickly proved her incredible vocal range. 
            Her emotional songs and dedication helped her become one of the top pop artists today.
        </div>
    </div>

</div>

</body>
</html>
