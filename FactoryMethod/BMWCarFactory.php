<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 03.02.17
 * Time: 0:55
 */

class BMWCarFactory implements CarFactory
{

    public function getProduct($model)
    {
        return new BMW($model);
    }

}
