<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 11.02.17
 * Time: 23:51
 */

class EmailObserver implements Observer
{
    public function sendMessage(Product $product) {
        //Sending Email message
        echo "Email: {$product->getName()} has a discount of {$product->getDiscount()}%" . PHP_EOL;
    }
}
