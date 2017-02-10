<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 10.02.17
 * Time: 16:17
 */

class AudiA4Builder extends AutoBuilder
{

    public  function buildEngine()
    {
        $this->auto->setEngine('V8');
    }

    public  function buildTransmission()
    {
        $this->auto->setTransmission('Auto');
    }

    public  function buildDrive()
    {
        $this->auto->setDrive('Front axle');
    }

}
