<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Salary Calculator</title>
</head>
<body>
    <h2>Salary Calculator</h2>
    <form method="post" action="">
        Hourly Wage ($): <input type="number" step="0.01" name="hourly_wage" required><br><br>
        Hours Worked per Week: <input type="number" step="0.01" name="hours_per_week" required><br><br>
        <input type="submit" value="Calculate Monthly Salary">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hourly_wage = floatval($_POST['hourly_wage']);
        $hours_per_week = floatval($_POST['hours_per_week']);

        // Assuming 4.33 weeks in a month
        $monthly_salary = $hourly_wage * $hours_per_week * 4.33;

        echo "With an hourly wage of $$hourly_wage and working $hours_per_week hours per week, your estimated monthly salary is: $" . number_format($monthly_salary, 2);
    }
    ?>
</body>
</html>
