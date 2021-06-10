<?php

// while
$counter = 0;
while ($counter <= 10 ){
  echo $counter."<br>";
  // if ($counter === 6) {
  //   break;
  // }
  $counter++;
}

// do - while
// do {
//   echo $counter;
//   $counter++;
// } while ($counter < 6);

// for
for ($i = 0; $i <= 6; $i++) {
  echo $i."<br>";
}
// foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach($fruits as $fruit){
  echo $fruit."<br>";
}

foreach($fruits as $i => $fruit){
  echo $i." ".$fruit."<br>";
}
echo "<br>";
// Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];
foreach($person as $key => $value) {
  if(is_array($value)) {
    echo $key.' '.implode(",", $value).'<br>';
  } else {
    echo $key.' '.$value.'<br>';
  }
}