<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 03.02.17
 * Time: 18:24
 */

class ManualTransmission implements Transmission
{

    public function up()
    {
        echo 'Manual transmission up';
    }

    public function down()
    {
        echo 'Manual transmission down';
    }

}
