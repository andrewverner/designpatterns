<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 11.02.17
 * Time: 23:43
 */

abstract class Observable
{
    protected $observers;

    public function attachObserver(Observer $observer) {
        if (!in_array($observer, $this->observers)) $this->observers[] = $observer;
    }

    public function detachObserver(Observer $observer) {
        if (in_array($observer, $this->observers)) unset($this->observers[array_search($observer, $this->observers)]);
    }

    abstract public function notify();
}
