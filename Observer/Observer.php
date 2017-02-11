<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 11.02.17
 * Time: 23:44
 */

interface Observer
{
    public function sendMessage(Product $product);
}
