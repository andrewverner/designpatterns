<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 10.02.17
 * Time: 16:17
 */

class ChevroletAveoBuilder extends AutoBuilder
{

    public  function buildEngine()
    {
        $this->auto->setEngine('V4');
    }

    public  function buildTransmission()
    {
        $this->auto->setTransmission('Manual');
    }

    public  function buildDrive()
    {
        $this->auto->setDrive('Front axle');
    }

}
