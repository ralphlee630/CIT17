<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Swap Variables</title>
</head>
<body>
    <h2>Swap Two Numbers</h2>
    <form method="post" action="">
        Value of a: <input type="number" name="a" required><br><br>
        Value of b: <input type="number" name="b" required><br><br>
        <input type="submit" value="Swap">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];

        $temp = $a;
        $a = $b;
        $b = $temp;

        echo "After swapping, a = $a and b = $b.";
    }
    ?>
</body>
</html>
