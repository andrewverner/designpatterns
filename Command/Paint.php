<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 1:13
 */

class Paint
{
    private $history;

    public function process(PaintCommand $command) {
        echo "Processing action $command" . PHP_EOL;
        $this->history[] = $command->__toString();
    }

    public function getHistory() {
        return $this->history;
    }
}
