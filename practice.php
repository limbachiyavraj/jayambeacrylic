<?php

// Define constants
define('BASIC', 1000);
define('DA_PERCENTAGE', 0.1);  // 10%
define('TA_PERCENTAGE', 0.2);  // 20%
define('HRA_PERCENTAGE', 0.3);  // 30%
define('PF_PERCENTAGE', 0.1);  // 10%

// Calculate gross salary
$DA = BASIC * DA_PERCENTAGE;
$TA = BASIC * TA_PERCENTAGE;
$HRA = BASIC * HRA_PERCENTAGE;
$PF = BASIC * PF_PERCENTAGE;
$GrossSalary = BASIC + $DA + $TA + $HRA;

// Calculate net salary
$NetSalary = $GrossSalary - $PF;

// Output results
echo "Basic Salary: " . BASIC . "\n<br>";
echo "Dearness Allowance (DA):$DA ";
echo "Travel Allowance (TA):$TA";
echo "House Rent Allowance (HRA):$HRA ";
echo "Provident Fund (PF):$PF";
echo "Gross Salary:$GrossSalary";
echo "Net Salary:$NetSalary";
