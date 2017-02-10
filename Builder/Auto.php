<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 10.02.17
 * Time: 16:11
 */

class Auto
{

    protected $engine;
    protected $transmission;
    protected $drive;

    public function setEngine($engine) {
        $this->engine = $engine;
    }

    public function setTransmission($transmission) {
        $this->transmission = $transmission;
    }

    public function setDrive($drive) {
        $this->drive = $drive;
    }

    public function showEquipment() {
        echo "Engine: {$this->engine}" . PHP_EOL;
        echo "Transmission: {$this->transmission}" . PHP_EOL;
        echo "Drive: {$this->drive}" . PHP_EOL;
    }

}
