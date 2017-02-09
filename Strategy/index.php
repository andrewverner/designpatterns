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

$strategy = (isset($_GET['type']) && $_GET['type'] == 'zip') ? new ZipCompressor() : new RarCompressor();
$compressor = new Compressor($strategy);
echo $compressor->compress('SomeFile');
