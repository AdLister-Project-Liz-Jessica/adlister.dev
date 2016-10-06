<?php 

require_once __DIR__ . '/../../models/Product.php';

$product = new Product;
$product->user_id = 2;
$product->product_name = "silver spoon";
$product->price = 2.00;
$product->pictures = "picture";
$product->description = "Our first product";
$product->save();