<pre>
<?php
/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 10.02.17
 * Time: 16:11
 */

spl_autoload_register(function ($className) {
    if (file_exists("{$className}.php")) require "{$className}.php";
});

$director = new Director();

$director->setAutoBuilder(new ChevroletAveoBuilder());
$director->constructAuto();

$auto = $director->getAuto();
$auto->showEquipment();

echo PHP_EOL;

$director->setAutoBuilder(new AudiA4Builder());
$director->constructAuto();

$auto = $director->getAuto();
$auto->showEquipment();

//Engine: V4
//Transmission: Manual
//Drive: Front axle
//
//Engine: V8
//Transmission: Auto
//Drive: Front axle
