<?php
namespace Patterns\Creational\FactoryMethod\DialogExample\Dialogs;

use Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;

abstract class Dialog
{
    abstract public function createButton() :Button;
}