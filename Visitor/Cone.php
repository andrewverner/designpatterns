<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 0:45
 */

class Cone implements Figure
{
    private $baseRadius;
    private $height;
    private $slant;

    public function __construct($radius, $height, $slant) {
        $this->baseRadius = $radius;
        $this->height = $height;
        $this->slant = $slant;
    }

    public function getBaseRadius() {
        return $this->baseRadius;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getSlant() {
        return $this->slant;
    }

    public function visit(Visitor $visitor)
    {
        return $visitor->surfaceArea($this);
    }
}