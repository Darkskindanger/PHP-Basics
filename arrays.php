<?php 
// Indexed Arrays
$people1 = ['Shaun','Emily','Ho'];

// Access index of array
echo $people1[0]; // Returns 'Shaun

$people2 = array('Huang','Jess',30);
echo $people2[1];

$ages=[20,30,40,50,100];
echo $ages; // 'echo' wont work because it expects an easy conversion to a string
print_r($ages);

// Override a value
$ages[1]=25;
print_r($ages);

// Add new value to end
$ages[]=70;

array_push($ages,80);

print_r($ages);

// Length of array
echo count($ages);

// Merge arrays together
$people3 = array_merge($people1,$people2);


// Associative Arrays - Key value pairs
$ninjasOne = ['shawun'=>'Male', 'Jess'=>'Female', 'emily'=>'Female'];
echo $ninjasOne = ['Jess'] ;// Returns 'Female'
print_r($ninjasOne);


$ninjasTwo = array('bowser' =>'green', 'peach'=>'yellow');
print_r($ninjasTwo);

// Add into end of array

$ninjasTwo['toad']='pink';

// Replace value of a key

$ninjasTwo['bower']='organge';

// Count elements
echo count($ninjaTwo);

// Mergin associative arrays
$ninjasThree= array_merge($ninjasOne,$ninjasTwo);

?>