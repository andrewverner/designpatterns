<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 09.02.17
 * Time: 17:35
 */

class RarCompressor extends CompressorStrategy
{

    public function pack($fileName)
    {
        $rar = new RarArchive();
        $rar->addFile($fileName);
        //[...] archiving

        return $rar->fileName;
    }

}
