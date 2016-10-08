<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS products');


$query = 'CREATE TABLE products (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    product_name VARCHAR(240) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image_url VARCHAR(240) NULL,
    description TEXT NOT NULL,
    PRIMARY KEY (id) 
)';


$dbc->exec($query);