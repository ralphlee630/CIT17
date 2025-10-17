<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Simple Math</title>
</head>
<body>
    <h2>Simple Math Operations</h2>
    <form method="post" action="">
        Number 1: <input type="number" name="a" required><br><br>
        Number 2: <input type="number" name="b" required><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = floatval($_POST['a']);
        $b = floatval($_POST['b']);

        $sum = $a + $b;
        $difference = $a - $b;
        $product = $a * $b;
        if ($b != 0) {
            $quotient = $a / $b;
        } else {
            $quotient = "undefined (division by zero)";
        }

        echo "The sum of $a and $b is $sum.<br>";
        echo "The difference between $a and $b is $difference.<br>";
        echo "The product of $a and $b is $product.<br>";
        echo "The quotient of $a divided by $b is $quotient.<br>";
    }
    ?>
</body>
</html>
