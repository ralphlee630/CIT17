<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Bank Account Simulation</title>
</head>
<body>
    <h2>Bank Account Simulation</h2>
    <form method="post" action="">
        Initial Balance: <input type="number" step="0.01" name="balance" required><br><br>
        Deposit Amount: <input type="number" step="0.01" name="deposit" required><br><br>
        Withdraw Amount: <input type="number" step="0.01" name="withdraw" required><br><br>
        <input type="submit" value="Simulate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $balance = floatval($_POST['balance']);
        $deposit = floatval($_POST['deposit']);
        $withdraw = floatval($_POST['withdraw']);

        $balance_after_deposit = $balance + $deposit;
        $balance_after_withdraw = $balance_after_deposit - $withdraw;

        echo "Initial balance: $" . number_format($balance, 2) . "<br>";
        echo "After depositing $" . number_format($deposit, 2) . ", your balance is: $" . number_format($balance_after_deposit, 2) . "<br>";
        echo "After withdrawing $" . number_format($withdraw, 2) . ", your balance is: $" . number_format($balance_after_withdraw, 2);
    }
    ?>
</body>
</html>
