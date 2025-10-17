<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Temperature Converter</title>
</head>
<body>
    <h2>Celsius to Fahrenheit Converter</h2>
    <form method="post" action="">
        Temperature in Celsius: <input type="number" step="0.1" name="celsius" required><br><br>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = floatval($_POST['celsius']);
        $fahrenheit = ($celsius * 9 / 5) + 32;

        echo "$celsius°C is equal to $fahrenheit°F.";
    }
    ?>
</body>
</html>
