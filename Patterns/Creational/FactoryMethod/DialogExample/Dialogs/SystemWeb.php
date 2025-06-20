<?php

namespace Patterns\creational\FactoryMethod\DialogExample\Dialogs;

use Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;
use Patterns\Creational\FactoryMethod\DialogExample\Buttons\SystemButton;

class SystemWeb extends Dialog
{
    public function createButton(): Button
    {
        return new SystemButton();
    }
}