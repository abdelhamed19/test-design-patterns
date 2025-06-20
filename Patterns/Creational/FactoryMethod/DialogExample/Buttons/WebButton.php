<?php

namespace Patterns\Creational\FactoryMethod\DialogExample\Buttons;

class WebButton extends Button
{
    public function show(): string
    {
        return "Web Button Show Method";
    }
    public function click(): string
    {
        return "Web Button Click Method";
    }
}