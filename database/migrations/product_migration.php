<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS products');


$query = 'CREATE TABLE products (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    product_name VARCHAR(240) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    pictures VARCHAR(240) NOT NULL,
    description TEXT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE 
)';


$dbc->exec($query);