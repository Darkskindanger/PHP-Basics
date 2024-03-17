<?php 

// Interger
$radius=25;

// Float
$pi = 3.14;

// Operators - *, /, +, -, **

echo $pi * $radius**2;

// Order of operation (B I D M A S) - Any calculations get executed in the following order: Brackets, Indices, Division, Multiplication, Addition and Subtraction

echo 2 * (4 + 9) / 4; //Returns 6.5
//   3rd   1st   2nd

// Increment and decrement operators
$radius++; //increment
// echo $radius; //returns 26
$radius--; //decrement
echo $radius; //returns 24

// shorthand operators
$age = 20;

$age += 10;
echo $age;//returns 30 
$age -= 10;
echo $age; //returns 10 
$age *= 10;
echo $age; //returns 40

// Number funtions/Methods
echo floor($pi); // return 3
echo ceil($pi); // return 4
echo pi(); // returns pi, 3.14159...


?>