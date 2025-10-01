<?php

$distance = 300;           
$fuel_consumption = 12;   
$fuel_price = 1.50;      

$fuel_needed = $distance / $fuel_consumption;
$travel_cost = $fuel_needed * $fuel_price;

echo "Distance: $distance km<br>";
echo "Fuel consumption: $fuel_consumption km per liter<br>";
echo "Fuel price: $$fuel_price per liter<br>";
echo "Estimated fuel needed: $fuel_needed liters<br>";
echo "Estimated travel cost: $$travel_cost";
?>
