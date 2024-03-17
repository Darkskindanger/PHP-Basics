<?php

// Variable scope

// Local scope:
function localScope(){$price='This variable was created locally (inside of a function)';
echo $price . '</br>';}

localScope();

function localScope2($age){echo "Your age is $age </br>" ;}

localScope2(20);

// Global scope
$globalVar = 'Jamie';

function sayHello(){
  // Must declare 'global' as below to tell browser that its a Global var
  global $globalVar;
  $globalVar='Kevin';
  echo "Hello $globalVar </br>";}

  sayHello();

  function sayBye(&$globalVar){
    // Below will only create a local variable unless we add a '&' inside the param to target the Global variable
    $globalVar='Jess';
    echo "Bye $globalVar </br>";}

sayBye($globalVar)

?>
