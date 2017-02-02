<?php

/**
 * Created by PhpStorm.
 * User: verner
 * Date: 03.02.17
 * Time: 0:00
 */

class StorageComponent
{

    private static $_instance;
    private $storage;

    private function __construct(){}
    private function __clone(){}
    private function __sleep(){}

    public static function getInstance() {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function setStorage($storage) {
        $this->storage = $storage;
    }

    public function getStorage()
    {
        return $this->storage;
    }

}
