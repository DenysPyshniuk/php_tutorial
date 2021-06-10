<?php

// Function which prints "Hello I am Zura"
// function hello(){
//   echo "Hello I am Denys";
// }
// hello();

// Function with argument
function hello($name){
  echo "Hello I am $name";
}
hello("Denys");
// Create sum of two functions
echo "<br>";

// function sum($a, $b){
//   return $a + $b;
// }
// echo sum(5, 3);

// Create function to sum all numbers using ...$nums
// function sum(...$nums){
//   $sum = 0;
//   foreach($nums as $num){
//     $sum += $num;
//   }
//   return $sum;
// }
// echo sum(5, 3, 3);

// Arrow functions
function sum(...$nums)
{
  return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo sum(1, 2, 3, 4, 6);