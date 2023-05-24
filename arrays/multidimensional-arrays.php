<?php

$products = array(
  array(
      'name' => 'T-Shirt',
      'price' => 24.99,
      'description' => 'Black PHP logo t-shirt',
      'image' => 'php-tee.jpg'
  ),
  array(
      'name' => 'Hoodie',
      'price' => 54.99,
      'description' => 'Black PHP logo hoodie',
      'image' => 'php-hoodie.jpg'
  ),
  array(
      'name' => 'Socks',
      'price' => 11.99,
      'description' => 'Purple PHP all-over print socks',
      'image' => 'php-socks.jpg'
  )
);

print_r($products);

$product_name = $products[0]['name'];
echo $product_name . "\n";

$product_price = $products[1]['price'];
echo $product_price . "\n";

$product_description = $products[2]['description'];
echo $product_description . "\n";

$product_image = $products[0]['image'];
echo $product_image . "\n";