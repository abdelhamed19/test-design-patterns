<?php 
namespace Patterns\Creational\FactoryMethod\DialogExample\Buttons;
class SystemButton extends Button{
    public function show(): string
    {
        return "System Button Show Method";
    }
    public function click(): string
    {
        return "System Button Click Method";
    }
}