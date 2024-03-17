<?php

// conditionals
// $price =20;

// if($price<10)
// {echo 'the if condition is met';}
//   elseif($price<20){echo 'elseif condition is met';}
//     else{echo 'condition not met';}


$products = [['name'=>'lettuce','price'=>5],['name'=>'tomato','price'=>5],['name'=>'chicken','price'=>15],['name'=>'beef','price'=>20 ],['name'=>'Ice cream','price'=>5],['name'=>'sauce','price'=>3],['name'=>'oil, 5L','price'=>20],['name'=>'steak','price'=>30]];

foreach($products as $product)
{if($product['price']>10)
  { echo $product['name'] . ' is expensive' . '</br>';}
}

// Break keyword - Exits loop after specified itteration 
foreach($products as $product)
{echo $product['name'].'</br>';
  
  if($product['name']=='chicken')
  {break;}
}

// Continue keyword - Skips specified itteration

foreach($products as $product)
{echo $product['name'].'</br>';

if($product['name']=='tomato'){continue;}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditionals</title>
</head>
<body>
  <h1>Most valuable foods list:</h1>
<?php foreach($products as $product){?>
<?php echo $product['name']. ': $'. $product['price'].'</br>'   ?>
<?php } ?>

<!-- 1 -->
  <ul>
    <h2>Expensive items ($10 and higher)</h2>
<?php foreach($products as $product){?>
<?php if($product['price']>10) {?>
<li><?php echo $product['name']?></li>
<?php }?>
<?php }?>
  </ul>

<!-- 2 -->
  <ul>
    <h2>Ice cream last</h2>
<?php foreach($products as $product){?>
  <li><?php echo $product['name']?></li>
<?php if($product['name']=='Ice cream') {?>
<?php break;}?>
  <?php }?>

  </ul>

<!-- 3 -->

  <ul>
    <h2>Skip Chicken</h2>
<?php foreach($products as $product){?><?php if($product['name']=='chicken') {?>
<?php continue;}?>
  <li><?php echo $product['name']?></li>
  <?php }?>
  </ul>

</body>
</html>