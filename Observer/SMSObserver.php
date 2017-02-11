<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 11.02.17
 * Time: 23:51
 */

class SMSObserver implements Observer
{
    public function sendMessage(Product $product) {
        //Sending SMS message
        echo "SMS: {$product->getName()} has a discount of {$product->getDiscount()}%" . PHP_EOL;
    }
}
