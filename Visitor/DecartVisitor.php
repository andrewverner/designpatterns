<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 0:43
 */

class DecartVisitor implements Visitor
{
    public function surfaceArea(Figure $figure)
    {
        if ($figure instanceof Triangle) {
            return ($figure->getBase() * $figure->getHeight()) / 2;
        } elseif ($figure instanceof Cone) {
            return M_PI * $figure->getBaseRadius() * ($figure->getBaseRadius() + $figure->getSlant());
        }
        else
            return false;
    }
}
