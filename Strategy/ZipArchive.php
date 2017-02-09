<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 09.02.17
 * Time: 17:41
 */

class ZipArchive
{

    public $fileName;

    public function addFile($fileName) {
        $this->fileName = "{$fileName}.zip";
    }

    //Archive process

}
