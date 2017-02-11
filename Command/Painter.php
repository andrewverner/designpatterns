<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 1:31
 */

class Painter
{
    private $paint;
    private $actions;
    private $currentAction;

    public function __construct() {
        $this->paint = new Paint();
    }

    public function redo($count)
    {
        for ($i = 0; $i < $count; $i++) {
            if ($this->currentAction < count($this->actions) - 1) $this->actions[$this->currentAction++]->execute();
        }
    }

    public function undo($count)
    {
        for ($i = 0; $i < $count; $i++)
            if ($this->currentAction > 0) $this->actions[--$this->currentAction]->unExecute();
    }

    public function action($type, $figure)
    {
        $command = new PaintCommand($this->paint, $type, $figure);
        $command->execute();

        $this->actions[] = $command;
        $this->currentAction++;
    }
}
