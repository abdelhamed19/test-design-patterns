<?php 
namespace Patterns\Creational\FactoryMethod\DialogExample\Buttons;
abstract class Button{
    abstract public function show ():string;
    abstract public function click ():string;
}