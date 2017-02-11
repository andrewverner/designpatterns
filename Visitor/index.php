<?php
/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 09.02.17
 * Time: 17:22
 */

spl_autoload_register(function ($className) {
    if (file_exists("{$className}.php")) require_once "{$className}.php";
});

$visitor = new DecartVisitor();

$triangle = new Triangle(10, 7);
$cone = new Cone(2, 4, 5.5);

echo $triangle->visit($visitor) . PHP_EOL;
echo $cone->visit($visitor);

//35
//47.123889803847
