<?php


namespace App\Classes;


class Session
{
    public static function add($name, $value)
    {
        if ($name != '' && !empty($name) && $value != '' && !empty($value)) {
            return $_SESSION[$name] = $value;
        }

        throw new \Exception('Oturum Adı ve Değerler Zorunludur');
    }

    public static function get($name)
    {
        return $_SESSION[$name];
    }

    public static function has($name)
    {
        if ($name != '' && !empty($name)) {
            return (isset($_SESSION[$name])) ? true : false;
        }

        throw new \Exception('Oturum İsmi Zorunlu');
    }

    public static function remove()
    {
        if (self::has($name)){
            unset($_SESSION[$name]);
        }
    }

}