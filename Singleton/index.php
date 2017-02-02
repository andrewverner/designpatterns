<?php
/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 02.02.17
 * Time: 22:49
 */

require 'StorageComponent.php';

$storage = StorageComponent::getInstance();
$storage->setStorage('MySQL DB Storage');

var_dump($storage->getStorage());
unset($storage);

$newStorage = StorageComponent::getInstance();
var_dump($newStorage->getStorage());

//string(16) "MySQL DB Storage"
//string(16) "MySQL DB Storage"
