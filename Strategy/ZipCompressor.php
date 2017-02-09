<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 09.02.17
 * Time: 17:29
 */

class ZipCompressor extends CompressorStrategy
{

    /**
     * @param $fileName
     * @return mixed archive file name
     */
    public function pack($fileName)
    {
        $zip = new ZipArchive();
        $zip->addFile($fileName);

        return $zip->fileName;
    }

}
