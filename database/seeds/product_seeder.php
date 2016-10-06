<?php 

require_once __DIR__ . '/../../models/Product.php';

$product = new Product;
$product->user_id = 2;
$product->product_name = "silver spoon";
$product->price = 2.00;
$product->pictures = "picture";
$product->description = "Our first product";
$product->save();

$product = new Product;
$product->user_id = 4;
$product->product_name = "slow cooker";
$product->price = 75.00;
$product->pictures = 'a picture';
$product->description = "second product";
$product->save();

$product = new Product;
$product->user_id = 6;
$product->product_name = "cutting board";
$product->price = 75.00;
$product->pictures = 'a picture';
$product->description = "third product";
$product->save();