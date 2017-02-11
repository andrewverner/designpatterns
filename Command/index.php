<pre>
<?php
/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 09.02.17
 * Time: 17:22
 */

spl_autoload_register(function ($className) {
    if (file_exists("{$className}.php")) require_once "{$className}.php";
});

$painter = new Painter();

$painter->action(PaintCommand::ACTION_DRAW, PaintCommand::FIGURE_LINE);
$painter->action(PaintCommand::ACTION_DRAW, PaintCommand::FIGURE_ELLIPSE);
$painter->action(PaintCommand::ACTION_DRAW, PaintCommand::FIGURE_SQUARE);
$painter->action(PaintCommand::ACTION_ERASE, PaintCommand::FIGURE_LINE);
$painter->action(PaintCommand::ACTION_DRAW, PaintCommand::FIGURE_CIRCLE);
$painter->action(PaintCommand::ACTION_ERASE, PaintCommand::FIGURE_SQUARE);
$painter->action(PaintCommand::ACTION_ERASE, PaintCommand::FIGURE_ELLIPSE);

$painter->undo(5);
$painter->redo(2);
