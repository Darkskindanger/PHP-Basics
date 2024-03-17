<?php 

// Variables - Start with '$' and must start with a letter or an Underscore 
$name = 'Yoshi';
$age=30;

// Overidding variables

// $name='Mario'

// Constants - CONST NAME IN CAPS, Initialize with define function 'define()'
define('NAME','Mario');

// Concatinating variables

// Using .
$food ='Chicken';
$quantity = 5;
$cuisine='Asian';

// echo $quisine.$food;

// Using Double quotes "" (similar to backticks ``)
echo "My favourite quisine is $cuisine and my favourite food is $food";
?>