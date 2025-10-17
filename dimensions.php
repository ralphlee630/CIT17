<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Area and Perimeter Calculator</title>
</head>
<body>
    <h2>Rectangle Area and Perimeter Calculator</h2>
    <form method="post" action="">
        Length: <input type="number" step="0.01" name="length" required><br><br>
        Width: <input type="number" step="0.01" name="width" required><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = floatval($_POST['length']);
        $width = floatval($_POST['width']);

        $area = $length * $width;
        $perimeter = 2 * ($length + $width);

        echo "The area of the rectangle with length $length and width $width is $area.<br>";
        echo "The perimeter of the rectangle with length $length and width $width is $perimeter.<br>";
    }
    ?>
</body>
</html>
