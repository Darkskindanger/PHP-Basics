<?php
// multidimensional arrays - Nested arrays inside of an array

// With indexed arrays
$blogs = [['mario party','mario','lorem',30],
['mario cart cheats','toad','lorem',25],
['zelda hidden chests','link','lorem',50]];
print_r($blogs[1][1]);


// Associative arrays
$blogs2 = [['title'=>'mario party','author'=>'mario','content'=>'lorem','likes'=>30],
['title'=>'mario cart cheats','author'=>'toad','content'=>'lorem','likes'=>25],
['title'=>'zelda hidden chests','author'=>'link','content'=>'lorem','likes'=>50]];


print_r($blogs2[2]['author']);

// Array length
echo count($blogs2);

// Add to array
$blogs2[]=['title'=>'Halo 3 walkthrough','author'=>'John 117','content'=>'Here is a walkthrough to Halo 3...','likes'=>117];


// remove last value from arrays (all types)
$popped = array_pop($blogs);
print_r($popped)
?>