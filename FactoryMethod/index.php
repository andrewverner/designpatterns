<?php
/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 03.02.17
 * Time: 0:32
 */

spl_autoload_register(function ($className) {
    if (file_exists("{$className}.php")) require "{$className}.php";
});

$BMWFactory = new BMWCarFactory();

$BMWX3 = $BMWFactory->getProduct('X3');
$BMWX6 = $BMWFactory->getProduct('X6');
$BMWi8 = $BMWFactory->getProduct('i8');

$chevroletFactory = new ChevroletCarFactory();

$chevroletAveo = $chevroletFactory->getProduct('Aveo');
$chevroletCamaro = $chevroletFactory->getProduct('Camaro');

echo $BMWX3->getName() . PHP_EOL;
echo $BMWX6->getName() . PHP_EOL;
echo $BMWi8->getName() . PHP_EOL;

echo $chevroletAveo->getName() . PHP_EOL;
echo $chevroletCamaro->getName();

//BMW X3
//BMW X6
//BMW i8
//Chevrolet Aveo
//Chevrolet Camaro
