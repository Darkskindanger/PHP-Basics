<?php

// functions

function sayHello($name){echo 
  "Hello, $name. </br>";}

sayHello('David');

// With default value for paramter incase no parameter is entered
function sayHello2($name = 'User'){echo 
  "Hello, $name. </br>";}

sayHello2();


// Multiple parameters
function sayHello3($name,$time){echo 
  "Hello $name, It is currently $time </br>";}

sayHello3('David','2pm');
// More complex functions

function product($product)
{
  echo "{$product['name']} costs {$product['price']} dollars to purchase </br>";

}
function product2($product)
{
 return "{$product['name']} costs {$product['price']} dollars to purchase </br>";

}

// When outputting a property from a value, we must wrap in {}

product(['name'=>'Kewpie Mayo','price'=>10]);

// Assigning the return into a variable
$formattedProductValues = product2(['name'=>'Kewpie Mayo','price'=>10]);
echo $formattedProductValues
?>