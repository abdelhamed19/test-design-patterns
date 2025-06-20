<?php 
namespace Patterns\Creational\Builder\Computer\Types;

use Patterns\Creational\Builder\Computer\CoolingSystem;

class ComputerCs extends Computer
{
    private CoolingSystem $coolingSystem;
    public function turnOn():bool
    {
        return true;
    }
    public function turnOff():bool
    {
        return true;
    }
}