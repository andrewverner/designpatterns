<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 10.02.17
 * Time: 16:15
 */

abstract class AutoBuilder
{

    protected $auto;

    public function getAuto() {
        return $this->auto;
    }

    public function createNewAuto() {
        $this->auto = new Auto();
    }

    public abstract function buildEngine();
    public abstract function buildTransmission();
    public abstract function buildDrive();

}
