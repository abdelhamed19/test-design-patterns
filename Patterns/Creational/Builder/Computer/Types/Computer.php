<?php 
namespace Patterns\Creational\Builder\Computer\Types;

use Patterns\Creational\Builder\Computer\Keyboard;
use Patterns\Creational\Builder\Computer\Monitor;
use Patterns\Creational\Builder\Computer\MotherBoard\MotherBoard;
use Patterns\Creational\Builder\Computer\Mouse;

abstract class Computer
{
    protected MotherBoard $motherBoard;
    protected Keyboard $keyboard;
    protected Mouse $mouse;
    protected Monitor $monitor;
    abstract public function turnOn():bool;
    abstract public function turnOff():bool;
    public function dashboard():string
    {
        return "Computer Dashboard";
    }
}