<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 03.02.17
 * Time: 18:24
 */

class AutomaticTransmission implements Transmission
{

    public function up()
    {
        echo 'Automatic transmission up';
    }

    public function down()
    {
        echo 'Automatic transmission down';
    }

}
