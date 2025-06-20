<?php

namespace Patterns\creational\FactoryMethod\DialogExample\Dialogs;

use Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;
use Patterns\Creational\FactoryMethod\DialogExample\Buttons\UiButton;

class MobileDialog extends Dialog
{
    public function createButton(): Button
    {
        return new UiButton();
    }
}