<?php 
namespace Patterns\Creational\Builder\Computer\MotherBoard\MainParts;
class CPU
{
    private int $speed;
    public function __construct($speed)
    {
        $this->speed = $speed;
    }
    public function getSpeed ():int
    {
        return $this->speed;
    }
}