<?php

namespace Patterns\Creational\FactoryMethod\DialogExample\Dialogs;

use Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;
use Patterns\Creational\FactoryMethod\DialogExample\Buttons\WebButton;

class WebDialog extends Dialog
{
    public function createButton(): Button
    {
        return  new WebButton();
    }
}