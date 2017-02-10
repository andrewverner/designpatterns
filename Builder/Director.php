<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 10.02.17
 * Time: 16:25
 */

class Director
{

    protected $autoBuilder;

    public function setAutoBuilder(AutoBuilder $autoBuilder) {
        $this->autoBuilder = $autoBuilder;
    }

    public function getAuto() {
        return $this->autoBuilder->getAuto();
    }

    public function constructAuto() {
        $this->autoBuilder->createNewAuto();
        $this->autoBuilder->buildEngine();
        $this->autoBuilder->buildTransmission();
        $this->autoBuilder->buildDrive();
    }

}
