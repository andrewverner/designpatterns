<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 10.02.17
 * Time: 17:19
 */

class Product
{

    public $name;
    public static $list;

    private function __construct($name)
    {
        $this->i = $name;
    }

    public static function getProduct($name) {
        if (!isset(self::$list[$name])) {
            echo "{$name} is undefined. Initializing..." . PHP_EOL;
            self::$list[$name] = new Product($name);
        } else {
            echo "{$name} already exists" . PHP_EOL;
            return self::$list[$name];
        }
    }

}
