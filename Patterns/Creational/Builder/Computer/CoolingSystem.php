<?php 
namespace Patterns\Creational\Builder\Computer;
class CoolingSystem
{
    private int $lowTemLimit;
    public function __construct($lowTemLimit)
    {
        $this->lowTemLimit = $lowTemLimit;
    }
    public function getLimit ():int
    {
        return $this->lowTemLimit;
    }
}