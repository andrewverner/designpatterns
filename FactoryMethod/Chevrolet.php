<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 03.02.17
 * Time: 0:58
 */

class Chevrolet implements Car
{

    private $_model;

    public function __construct($model)
    {
        $this->_model = $model;
    }

    public function getName()
    {
        return "Chevrolet {$this->_model}";
    }

}
