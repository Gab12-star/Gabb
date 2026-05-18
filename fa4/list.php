<?php
$names = array(
    "lebron james", "stephen curry", "kevin durant", "giannis antetokounmpo", "luka doncic",
    "jayson tatum", "nikola jokic", "joel embiid", "devin booker", "ja morant",
    "anthony davis", "kawhi leonard", "damian lillard", "jimmy butler", "paul george",
    "russell westbrook", "trae young", "zion williamson", "kyrie irving", "jaylen brown"
);

function replaceVowels($name) {
    return preg_replace('/[aeiouAEIOU]/', '@', $name);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>NBA Players</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            padding: 20px;
            color: white;
        }

        .container {
            width: 95%;
            margin: auto;
            background: #181818;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.6);
        }

        h2 {
            text-align: center;
            color: #1DB954;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: #1DB954;
            color: black;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #333;
        }

        tr:nth-child(even) {
            background-color: #181818;
        }

        tr:nth-child(odd) {
            background-color: #121212;
        }

        tr:hover {
            background-color: #282828;
        }

        th {
            font-size: 14px;
        }

        td {
            font-size: 13px;
            color: #b3b3b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>NBA Player List</h2>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Length</th>
                <th>Uppercase First</th>
                <th>Replace Vowels (@)</th>
                <th>Position of "a"</th>
                <th>Reverse Name</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($names as $name):

                $length = strlen($name);
                $ucName = ucfirst($name);
                $replaced = replaceVowels($name);
                $pos = strpos($name, 'a');
                $posDisplay = ($pos !== false) ? $pos + 1 : "Not found";
                $reverse = strrev($name);
            ?>

            <tr>
                <td><?= $name ?></td>
                <td><?= $length ?></td>
                <td><?= $ucName ?></td>
                <td><?= $replaced ?></td>
                <td><?= $posDisplay ?></td>
                <td><?= $reverse ?></td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
