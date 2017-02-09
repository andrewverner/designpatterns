<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 09.02.17
 * Time: 17:41
 */

class RarArchive
{

    public $fileName;

    public function addFile($fileName) {
        $this->fileName = "{$fileName}.rar";
    }

    //Archive process

}
