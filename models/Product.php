<?php 
//this file was missing
require_once __DIR__ . '/Model.php';

class Product extends Model 
{
	protected static $table = 'products';

	protected static function features ()
	{
		//connect to DB
		self::dbconnect();

		//query for prepare statement (the select will change when functionality for pic uploads is done :))
		$query = 'SELECT product_name, description FROM' . static::$table . 'LIMIT 3';

		//prepare and execute the query
		$stmt = self::$dbc->prepare($query);
		$stmt->execute();

		//save results in features var
		$features = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $features;
	}

}


