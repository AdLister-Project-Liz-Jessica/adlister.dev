<?php 
//this file was missing
require_once __DIR__ . '/Model.php';

class Product extends Model 
{
    protected static $table = 'products';

    public static function features()
    {
        //connect to DB
        self::dbconnect();

        //query for prepare statement 
        $query = 'SELECT product_name, image_url, description FROM ' . static::$table . ' LIMIT 3';

        //prepare and execute the query
        $stmt = self::$dbc->prepare($query);
        $stmt->execute();

        //save results in features var
        $features = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $features;
    }

    public function getUserInfo() 
    {

        return User::find($this->user_id);
    }

    public static function findAllAdsFromThisUser($id) 
    {
        //note to self: this fxn will be just like find() in the model class except id = user_id
        //connect to DB
        self::dbconnect();

        //Create select statement using prepared statements
        $query = 'SELECT * FROM ' . static::$table . ' WHERE user_id = :id LIMIT 3';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;

        if ( $result )
        {

            $instance = new static;
            $instance->attributes = $result;
        }

        return $instance;

    }
}


