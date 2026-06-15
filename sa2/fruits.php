<?php
$fruits = [
    ["name" => "Avocado", "image" => "images/avocado.jpg", "desc" => "Color Green", "facts" => "Avocados are rich in healthy fats and good for the heart."],
    ["name" => "Blueberry", "image" => "images/blueberry.jpg", "desc" => "Color Blue", "facts" => "Blueberries are high in antioxidants and boost brain health."],
    ["name" => "Coconut", "image" => "images/coconut.jpg", "desc" => "Color Brown/White", "facts" => "Coconuts provide hydration and healthy nutrients."],
    ["name" => "Dragonfruit", "image" => "images/dragonfruit.jpg", "desc" => "Color Pink/White", "facts" => "Dragonfruit is rich in fiber and vitamin C."],
    ["name" => "Fig", "image" => "images/fig.jpg", "desc" => "Color Purple", "facts" => "Figs support digestive health."],
    ["name" => "Kiwi", "image" => "images/kiwi.jpg", "desc" => "Color Green", "facts" => "Kiwis contain high levels of vitamin C."],
    ["name" => "Lemon", "image" => "images/lemon.jpg", "desc" => "Color Yellow", "facts" => "Lemons help detoxify the body."],
    ["name" => "Peach", "image" => "images/peach.jpg", "desc" => "Color Pink/Orange", "facts" => "Peaches are rich in vitamins and antioxidants."],
    ["name" => "Pear", "image" => "images/pear.jpg", "desc" => "Color Green/Yellow", "facts" => "Pears improve digestion and gut health."],
    ["name" => "Plum", "image" => "images/plum.jpg", "desc" => "Color Purple", "facts" => "Plums support healthy bones and digestion."]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Fruits</title>

    <style>
        body {
            font-family: Arial;
            text-align: center;
        }

        h2 {
            border: 1px solid black;
            padding: 10px;
            background-color: #eee;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 90%;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #ddd;
        }

        img {
            width: 120px;
            border: 3px solid gold;
        }
    </style>

</head>
<body>

<h2>My Fruits</h2>

<table>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Facts</th>
    </tr>

    <?php foreach($fruits as $fruit) { ?>
    <tr>
        <td><img src="<?php echo $fruit['image']; ?>"></td>
        <td><?php echo $fruit['name']; ?></td>
        <td><?php echo $fruit['desc']; ?></td>
        <td><?php echo $fruit['facts']; ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
``