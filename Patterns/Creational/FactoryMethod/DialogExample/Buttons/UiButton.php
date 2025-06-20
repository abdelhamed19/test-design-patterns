<?php

namespace Patterns\Creational\FactoryMethod\DialogExample\Buttons;

class UiButton extends Button
{
    public function show(): string
    {
        return "Ui Button Show Method";
    }
    public function click(): string
    {
        return "Ui Button Click Method";
    }
}
