<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>BMI Calculator</title>
</head>
<body>
    <h2>BMI Calculator</h2>
    <form method="post" action="">
        Weight (kg): <input type="number" step="0.1" name="weight" required><br><br>
        Height (m): <input type="number" step="0.01" name="height" required><br><br>
        <input type="submit" value="Calculate BMI">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = floatval($_POST['weight']);
        $height = floatval($_POST['height']);
        if ($height > 0) {
            $bmi = $weight / ($height * $height);
            echo "<h3>Your BMI is: " . round($bmi, 2) . "</h3>";
        } else {
            echo "<p>Please enter a valid height greater than 0.</p>";
        }
    }
    ?>
</body>
</html>
