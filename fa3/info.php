<?php
$people = [
    ["name" => "Carlos Rivera", "emoji" => "👨", "age" => 21, "birthday" => "2003-01-15", "contact" => "09111111111"],
    ["name" => "Sofia Delgado", "emoji" => "👩", "age" => 22, "birthday" => "2002-04-10", "contact" => "09222222222"],
    ["name" => "Marco Alvarez", "emoji" => "👨", "age" => 20, "birthday" => "2004-07-08", "contact" => "09333333333"],
    ["name" => "Isabella Cruz", "emoji" => "👩", "age" => 19, "birthday" => "2005-09-12", "contact" => "09444444444"],
    ["name" => "Daniel Reyes", "emoji" => "👨", "age" => 23, "birthday" => "2001-11-25", "contact" => "09555555555"],
    ["name" => "Angela Santos", "emoji" => "👩", "age" => 21, "birthday" => "2003-03-18", "contact" => "09666666666"],
    ["name" => "Kevin Morales", "emoji" => "👨", "age" => 24, "birthday" => "2000-06-30", "contact" => "09777777777"],
    ["name" => "Lara Bautista", "emoji" => "👩", "age" => 20, "birthday" => "2004-08-14", "contact" => "09888888888"],
    ["name" => "Nathan Villanueva", "emoji" => "👨", "age" => 22, "birthday" => "2002-10-05", "contact" => "09999999999"],
    ["name" => "Paul Torres", "emoji" => "👨", "age" => 23, "birthday" => "2001-12-20", "contact" => "09000000000"],
];

// Sort alphabetically
usort($people, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>

<!DOCTYPE html>
<html>
<head>
<title>People List</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: white;
    }

    h2 {
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 90%;
        margin: 20px auto;
    }

    th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #ccc;
    }

    .emoji {
        font-size: 30px;
    }
</style>
</head>

<body>

<h2>People Information (Alphabetical Order)</h2>

<table>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Contact Number</th>
    </tr>

<?php
$no = 1;
foreach ($people as $person) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$person['name']."</td>";
    echo "<td class='emoji'>".$person['emoji']."</td>";
    echo "<td>".$person['age']."</td>";
    echo "<td>".$person['birthday']."</td>";
    echo "<td>".$person['contact']."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>