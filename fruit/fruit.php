<!DOCTYPE html>
<html>
<head>
    <title>Fruit Directory</title>
    <style>
        body {
            background-color: #f4f7f6;
            padding: 40px;
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e0e0e0;
        }
        th, td {
            padding: 16px;
            text-align: left;
        }
        th {
            background-color: #2c3e50;
            color: #ffffff;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
            border-bottom: 3px solid #1a252f;
        }
        .header-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            background-color: #1abc9c;
            color: white;
            padding: 20px;
            letter-spacing: 1px;
            border: none;
        }
        tr:nth-child(even) td {
            background-color: #f9fbfb;
        }
        tr:hover td {
            background-color: #f1f4f6;
        }
        td {
            color: #333333;
            font-size: 15px;
            border-bottom: 1px solid #eeeeeec4;
            vertical-align: middle;
        }
        td:nth-child(2) {
            font-weight: bold;
            color: #2c3e50;
        }
        td:nth-child(3) {
            font-style: italic;
            color: #7f8c8d;
        }
        img {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            display: block;
            margin: 0 auto;
        }
        th:nth-child(1), td:nth-child(1) { text-align: center; }
        th:nth-child(2), td:nth-child(2) { text-align: center; }
        th:nth-child(3), td:nth-child(3) { text-align: center; }
    </style>
</head>
<body>

<table>
    <tr>
        <th colspan="4" class="header-title">My Fruits</th>
    </tr>
    <tr>
        <th style="width: 15%;">Image</th>
        <th style="width: 15%;">Name</th>
        <th style="width: 20%;">Description</th>
        <th style="width: 50%;">Facts</th>
    </tr>
    <tbody id="fruit-table-body">
    </tbody>
</table>

<script>
    var fruits = [
        { image: "apple.jpg", name: "Apple", desc: "Color Red", fact: "Apples are high in fiber and vitamin C, promoting heart health." },
        { image: "banana.jpg", name: "Banana", desc: "Color Yellow", fact: "Bananas are a healthful addition to a balanced diet, as they provide a range of vital nutrients and are a good source of fiber." },
        { image: "cherry.jpg", name: "Cherry", desc: "Color Dark Red", fact: "Cherries are packed with antioxidants and anti-inflammatory compounds." },
        { image: "grape.jpg", name: "Grapes", desc: "Color Purple", fact: "Grapes contain powerful antioxidants known as polyphenols, which may slow or prevent many types of cancer." },
        { image: "kiwi.jpg", name: "Kiwi", desc: "Color Green", fact: "Kiwis are nutrient-dense fruits that are rich in vitamin C, vitamin K, and vitamin E." },
        { image: "mango.jpg", name: "Mango", desc: "Color Orange/Yellow", fact: "Mangoes are known as the king of fruits and contain a variety of essential vitamins." },
        { image: "orange.jpg", name: "Orange", desc: "Color Orange", fact: "Oranges are an excellent source of vitamin C, which protects cells from damage." },
        { image: "peach.jpg", name: "Peach", desc: "Color Pinkish Yellow", fact: "Peaches contain fiber, vitamins, and minerals that support good digestion and immunity." },
        { image: "strawberry.jpg", name: "Strawberry", desc: "Color Red", fact: "Strawberries are bright red, juicy, and sweet, protecting your heart and increasing good cholesterol." },
        { image: "watermelon.jpg", name: "Watermelon", desc: "Color Green/Red", fact: "Watermelon has a very high water content and delivers nutrients including lycopene." }
    ];

    fruits.sort(function(a, b) {
        if (a.name < b.name) return -1;
        if (a.name > b.name) return 1;
        return 0;
    });
    
    var tableBody = document.getElementById("fruit-table-body");
    var htmlContent = "";

    for (var i = 0; i < fruits.length; i++) {
        htmlContent += "<tr>" +
            "<td><img src='" + fruits[i].image + "' alt='" + fruits[i].name + "'></td>" +
            "<td>" + fruits[i].name + "</td>" +
            "<td>" + fruits[i].desc + "</td>" +
            "<td>" + fruits[i].fact + "</td>" +
            "</tr>";
    }

    tableBody.innerHTML = htmlContent;
</script>

</body>
</html>