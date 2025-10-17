<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Travel Cost Estimator</title>
</head>
<body>
    <h2>Travel Cost Estimator</h2>
    <form method="post" action="">
        Distance (km): <input type="number" step="0.1" name="distance" required><br><br>
        Fuel consumption (km per liter): <input type="number" step="0.01" name="fuel_consumption" required><br><br>
        Fuel price (per liter): <input type="number" step="0.01" name="fuel_price" required><br><br>
        <input type="submit" value="Estimate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $distance = floatval($_POST['distance']);
        $fuel_consumption = floatval($_POST['fuel_consumption']);
        $fuel_price = floatval($_POST['fuel_price']);

        if ($fuel_consumption > 0) {
            $fuel_needed = $distance / $fuel_consumption;
            $travel_cost = $fuel_needed * $fuel_price;

            echo "Distance: $distance km<br>";
            echo "Fuel consumption: $fuel_consumption km per liter<br>";
            echo "Fuel price: $$fuel_price per liter<br>";
            echo "Estimated fuel needed: " . round($fuel_needed, 2) . " liters<br>";
            echo "Estimated travel cost: $" . round($travel_cost, 2);
        } else {
            echo "<p>Please enter a fuel consumption greater than 0.</p>";
        }
    }
    ?>
</body>
</html>
