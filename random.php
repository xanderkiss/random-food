<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Food Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .menu {
            font-size: 24px;
            font-weight: bold;
            color: #4CAF50;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>What's for lunch?</h1>
    <form method="post">
        <button type="submit" name="randomize">Get Random Menu</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['randomize'])) {
        // Array of food menus
        $menus = [
            "Pad Thai",
            "Green Curry",
            "Tom Yum Soup",
            "Massaman Curry",
            "Papaya Salad",
            "Chicken Satay",
            "Fried Rice",
            "Spring Rolls",
            "Grilled Pork Skewers",
            "Sticky Rice with Mango"
        ];
        
        // Randomly select a menu
        $randomMenu = $menus[array_rand($menus)];
        
        // Display the result
        echo "<p class='menu'>Today's menu: $randomMenu</p>";
    }
    ?>
</body>
</html>
