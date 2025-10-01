<?php

$amount = 1000;  

$exchange_rate_usd = 0.013;  
$exchange_rate_eur = 0.012;  
$exchange_rate_jpy = 1.45;   

$usd = $amount * $exchange_rate_usd;
$eur = $amount * $exchange_rate_eur;
$jpy = $amount * $exchange_rate_jpy;

echo "Amount in local currency: $$amount<br>";
echo "Converted to USD: $$usd<br>";
echo "Converted to EUR: $$eur<br>";
echo "Converted to JPY: ¥$jpy";
?>
