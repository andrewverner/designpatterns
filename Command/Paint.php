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
        echo "Processing action {$command->getAction()} {$command->getFigure()}" . PHP_EOL;
        $this->history[] = "{$command->getAction()} {$command->getFigure()}";
    }

    public function getHistory() {
        return $this->history;
    }
}
