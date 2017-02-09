<?php
/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 09.02.17
 * Time: 17:22
 */

spl_autoload_register(function ($className) {
    if (file_exists("{$className}.php")) require "{$className}.php";
});

$compressor = new Compressor(new ZipCompressor());
echo $compressor->compress('FirstFile');

$compressor = new Compressor(new RarCompressor());
echo $compressor->compress('SecondFile');

//FirstFile.zip
//SecondFile.rar
