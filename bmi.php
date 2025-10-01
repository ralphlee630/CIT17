<?php

$weight = 70;  // in kilograms
$height = 1.75;  // in meters

$bmi = $weight / ($height * $height);

echo "Your BMI is: " . round($bmi, 2);
?>
