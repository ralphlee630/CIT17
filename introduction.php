<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Introduce Yourself</title>
</head>
<body>
    <h2>Introduce Yourself</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        Favorite Color: <input type="text" name="favorite_color" required><br><br>
        Hobby: <input type="text" name="hobby" required><br><br>
        City: <input type="text" name="city" required><br><br>
        <input type="submit" value="Introduce">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $age = intval($_POST['age']);
        $favorite_color = htmlspecialchars($_POST['favorite_color']);
        $hobby = htmlspecialchars($_POST['hobby']);
        $city = htmlspecialchars($_POST['city']);

        echo "Hi, I'm $name, I am $age years old, and my favorite color is $favorite_color. ";
        echo "I love $hobby and I currently live in $city.";
    }
    ?>
</body>
</html>
