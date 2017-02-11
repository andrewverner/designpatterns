<?php

/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 1:05
 */

class PaintCommand implements Command
{
    public $handler;
    public $action;
    public $figure;

    const ACTION_ERASE = 0;
    const ACTION_DRAW = 1;

    const FIGURE_LINE = 0;
    const FIGURE_CIRCLE = 1;
    const FIGURE_SQUARE = 2;
    const FIGURE_ELLIPSE = 3;

    public function __construct($handler, $action, $figure) {
        $this->handler = $handler;
        $this->action = $action;
        $this->figure = $figure;
    }

    public function execute() {
        $this->handler->process($this);
    }

    public function unExecute() {
        $this->undo();
        $this->handler->process($this);
    }

    public function undo() {
        $this->action = ($this->action == self::ACTION_ERASE) ? 1 : 0;
    }

    private function getAction() {
        return ($this->action == self::ACTION_ERASE) ? 'ERASE' : 'DRAW';
    }

    private function getFigure() {
        $figures = [
            self::FIGURE_LINE => 'LINE',
            self::FIGURE_CIRCLE => 'CIRCLE',
            self::FIGURE_SQUARE => 'SQUARE',
            self::FIGURE_ELLIPSE => 'ELLIPSE'
        ];
        return $figures[$this->figure];
    }

    public function __toString()
    {
        return "{$this->getAction()} {$this->getFigure()}";
    }
}
