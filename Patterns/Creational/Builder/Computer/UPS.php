<?php 
namespace Patterns\Creational\Builder\Computer;
class UPS
{
    private int $duration;
    public function __construct($duration)
    {
        $this->duration = $duration;
    }
    public function getDuration ():int
    {
        return $this->duration;
    }
}