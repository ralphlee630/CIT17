<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Currency Converter</title>
</head>
<body>
    <h2>Currency Converter</h2>
    <form method="post" action="">
        Amount in local currency: <input type="number" step="0.01" name="amount" required><br><br>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = floatval($_POST['amount']);
        $exchange_rate_usd = 0.013;
        $exchange_rate_eur = 0.012;
        $exchange_rate_jpy = 1.45;

        $usd = $amount * $exchange_rate_usd;
        $eur = $amount * $exchange_rate_eur;
        $jpy = $amount * $exchange_rate_jpy;

        echo "Amount in local currency: $$amount<br>";
        echo "Converted to USD: $" . round($usd, 2) . "<br>";
        echo "Converted to EUR: €" . round($eur, 2) . "<br>";
        echo "Converted to JPY: ¥" . round($jpy, 2);
    }
    ?>
</body>
</html>
