<?php

// What is a variable

/*
--Variable types:
-String
-Integer
-Float/Double
-Boolean
-Null
-Array
-Object
-Resource
*/


// Declare variables
$name = "Denys";
$age = 30;
$isMale = true;
$height = 1.87;
$salary = null;


// Print the variables. Explain what is concatenation
echo $name."<br>", $age; // Dot is concatenating tags

// Print types of the variables
echo "<br>";
echo "<br>";
echo "Type of the variable 'name' is ".gettype($name).'<br>';
echo "Type of the variable 'age' is ".gettype($age).'<br>';
echo "Type of the variable 'isMale' is ".gettype($isMale).'<br>';
echo "Type of the variable 'height' is ".gettype($height).'<br>';
echo "Type of the variable 'salary' is ".gettype($salary).'<br>';

// Print the whole variable
echo "<br>";
echo "<br>";
var_dump($name);

// Change the value of the variable
echo "<br>";
echo "<br>";
$name = "Anna";
echo $name;

// Print type of the variable
echo "<br>";
echo "<br>";
echo gettype($name);

// Variable checking functions
echo "<br>";
echo "<br>";
is_string($name);

// Check if variable is defined
isset($name);

// Constants
echo "<br>";
echo "<br>";
define('PI', 3.14);
echo PI."<br>";

// Using PHP built-in constants
echo SORT_ASC."<br>";
echo PHP_INT_MAX."<br>";
