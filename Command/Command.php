<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 1:03
 */

interface Command
{
    public function execute();
    public function unExecute();
}
