<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 11.02.17
 * Time: 23:44
 */

class Product extends Observable
{
    private $discount;
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setDiscount($discount) {
        $this->discount = $discount;
        if ($discount > 0) {
            $this->notify();
        }
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function getName() {
        return $this->name;
    }

    public function notify() {
        if (!empty($this->observers)) {
            /**
             * @var $observer Observer
             */
            foreach ($this->observers as $observer) {
                $observer->sendMessage($this);
            }
        }
    }
}
