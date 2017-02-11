<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 0:35
 */

interface Figure
{
    public function visit(Visitor $visitor);
}
