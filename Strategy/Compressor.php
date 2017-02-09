<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 09.02.17
 * Time: 17:37
 */

class Compressor
{

    private $_compressor;

    public function __construct(CompressorStrategy $compressor) {
        $this->_compressor = $compressor;
    }

    public function compress($file) {
        return $this->_compressor->pack($file);
    }

}
