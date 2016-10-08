<?php

class Input
{

    /**
     * @param $key as a string
     * @return boolean
     */
    public static function has($key)
    {
        if(isset($_REQUEST[$key])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return value at $_SESSION[$key] if set, else return null
     */
    public static function get($key, $default = null)
    {
        if(isset($_REQUEST[$key])) {
            return $_REQUEST[$key];

        } else {
            return $default;
        }

    }


    public static function getUsername($key, $min = 4, $max = 20){

        $value = self::get($key);

        if(strlen($value)<$min|| strlen($value)>$max){
            throw new LengthException("Username must be between '$min' and '$max' characters long");
        }

        if(User::findByUsernameOrEmail($value)){
            throw new UnexpectedValueException("Username '$value' is already taken. Please try another username.");
        }

        return $value;

    }

    public static function getEmail($key, $min = 5, $max = 50){

        $value = self::get($key);

        if(strlen($value)<$min || strlen($value)>$max){
            throw new LengthException("Email '$value' is already taken. Please try another '$value' ");
        }

        if(User::findByUsernameOrEmail($value)){
            throw new UnexpectedValueException("Email '$value' is already taken. Please try another email.");
        }

        return $value;
    }


    // returns entire array from request super global
    public static function all()
    {
        return $_REQUEST;
    }
}
