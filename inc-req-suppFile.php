<?php
$products = [['name'=>'lettuce','price'=>5],['name'=>'tomato','price'=>5],['name'=>'chicken','price'=>15],['name'=>'beef','price'=>20 ],['name'=>'Ice cream','price'=>5],['name'=>'sauce','price'=>3],['name'=>'oil, 5L','price'=>20],['name'=>'steak','price'=>30]];

foreach($products as $product)
{if($product['price']>10)
  { echo $product['name'] . ' is expensive' . '</br>';}
}
?>