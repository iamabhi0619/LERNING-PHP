<?php
function calculateElectricityBills($unitsConsumed , $costPerUnit, $taxPercentage) {
    $res = $unitsConsumed * $costPerUnit;
    $tax = $res * $taxPercentage /100;
    return $res + $tax;
}

$uc = (int)readline("Enter unit Consumed: ");
$cpu = (int)readline("Enter Cost Per Unit: ");
$tax = (int)readline("Enter Tax Percentage: ");

echo"Total Electricity Bill: Rs ".calculateElectricityBills($uc, $cpu, $tax);
