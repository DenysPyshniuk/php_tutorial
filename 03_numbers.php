<?php

// Declaring numbers
$a = 10;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo $a + $b * $c."<br>";
echo "<br>";
echo $a % $b;
echo "<br>";

// Assignment with math operators
$a = 10;
$b = 4;
$a = $a + $b;
echo $a;
echo "<br>";
// Same as:
$a = 10;
$b = 4;
$a += $b;
echo $a;
echo "<br>";


// Increment operator
echo $a++; //first printed then increased
echo "<br>";
echo ++$a; //first increased then printed

// Decrement operator

// Number checking functions
echo "<br>";
echo is_float(1.25);
is_int(5); //true
is_numeric(3.45); //true
is_numeric("3.45"); //true
is_numeric("3g.45"); //false

// Conversion
echo "<br>";
echo "<br>";
$strNumber = "12.34";
$number = (int)$strNumber;
var_dump($number);
echo "<br>";
$number = (float)$strNumber;
var_dump($number);
echo "<br>";
$number = floatval($strNumber);
echo $number;


// Number functions
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';


// Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br>';

// https://www.php.net/manual/en/ref.math.php
